<?php

// the actual daemon. wooo.

require_once __DIR__ . '/vendor/autoload.php';

$handlers = array('Codaemon\\DefinitionLocation');

$app = function ($request, $response) use ($handlers) {
    $headers = array('Content-Type' => 'application/json');

    $handled = false;
    foreach ($handlers as $handler) {
        if ($handler::testRoute($request->getPath())) {
            $handler::respond($request, $response);

            $handled = true;
        }
    }

    if (! $handled) {
        $path = $request->getPath();
        $response->writeHead(404, $headers);
        $response->end('No handler matched.');
    }
};

$loop = React\EventLoop\Factory::create();
$socket = new React\Socket\Server($loop);
$http = new React\Http\Server($socket);

$http->on('request', $app);

// DEBUG The port should be configurable.
$socket->listen(1337);
$loop->run();

$http->on('request', $app);

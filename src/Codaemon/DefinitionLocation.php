<?php

namespace Codaemon;

class DefinitionLocation
{
    public function __construct()
    {

    }

    public static function testRoute($path)
    {
        return '/definition-location' === $path;
    }

    public static function respond($request, &$response)
    {
        $headers = array('Content-Type' => 'application/json');
        $response->writeHead(200, $headers);

        $response->end('{"data": "Imagine I worked."}');
    }
}

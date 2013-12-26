php-codaemon
============

php-codaemon is an experimental stab at building a static-analysis daemon for
PHP. It is meant to help give editors advanced intelligence when editing PHP.

**N.B.** - this project has nothing useful as yet. I'm just developing it in
the open for now, because I believe it's generally a better way to work.

The name is just a mildly stupid pun - it's a daemon to help analyze code.

Targeted Platforms
------------------

I would like to support OS X, other *nix variants, and Windows (7 at least,
others if that works out).

[ReactPHP](http://reactphp.org/) looks like a good way to write daemons on
Windows and OS X without any custom extensions (the demo works without fuss on
both of them, at least). The performance may be relatively poor, but for
a single-user daemon, it probably doesn't need to be greased lightning.
If it turns out unusably slow, libevent is supposed to speed it up and is
available for Windows and *nixes.

License
-------

This project is copyright Nate Eagleson, 2013. Feel free to use it, but
please do not package it for redistribution (or commercial purposes) until it
actually does something useful.

If this ever gets anywhere, the license will probably become something
standard, meaningful, and open source. I tend to like BSD myself.

About
-----

I have gone for years without intelligent auto-complete or jump-to-definition,
relying mostly on grep and my memory to survive in complex codebases.

However, I have recently rediscovered these wonderful tools of good
autocompletion and jump-to-definition by way of Tern and
[Jedi](http://jedi.jedidjah.ch/en/latest/).

Sadly, my paying gigs tend to be for writing PHP. As an Emacser, I greatly
appreciate [ejmr](https://github.com/ejmr/php-mode)'s wonderful work to
modernize php-mode, which has made my life a great deal easier. However, now
that I have intelligent code assistance when writing JS and Python, I have
begun to miss it terribly when dealing with PHP.

After reading
[the author's excellent description of Tern's innards](http://marijnhaverbeke.nl/blog/tern.html),
I thought "I wonder how hard it would be to come up with a similar tool for
PHP?"

It may prove far beyond my free time or energy level, given PHP's abominable
complexities, but since I've found several tools that should do a lot of the
heavy lifting, I've decided to try a little prototyping.

We'll see if it actually gets anywhere.

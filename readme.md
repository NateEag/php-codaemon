php-codaemon [Abandoned]
========================

N.B.: This project is abandoned. I had barely begun to work on it when I
discovered the tools I was stitching together weren't fit for purpose. At this
point, if you want PHP intelligence in Emacs (or any other tool that's not a PHP
IDE), I strongly recommend the 
[php-language-server](https://github.com/felixfbecker/php-language-server) project.

php-codaemon is an experimental stab at building a static-analysis daemon for
PHP. It is meant to help give editors advanced intelligence when editing PHP.

**N.B.** - this project has nothing useful as yet. I'm just developing it in
the open for now, because I believe it's generally a better way to work.

The name is just a mildly stupid pun - it's a daemon to help analyze code.

I have not worked on this much at all, since I discovered early in the process
that [ReactPHP](http://reactphp.org/) does not have support for waiting until a
request ends. I was only using React as a portable daemon that would let me
build up a complex data structure over multiple requests, and did not find any
other cross-platform alternatives.

I also discovered [emacs-eclim](https://github.com/senny/emacs-eclim), which
in combination with Eclipse's PHP development tools should be usable to get
decent PHP auto-completion and jump-to-definition, which reduced my interest in
this project significantly. Running Eclipse in the background is annoying,
because it's huge, but writing the bits of elisp needed to support PHP properly
would be a much smaller undertaking than building this whole tool.

I may come back to this someday, but I'm more likely to just spend the time
getting emacs-eclim's PHP support up to snuff.

Targeted Platforms
------------------

I would like to support OS X, other *nix variants, and Windows (7 at least,
others if that works out).

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

However, I have recently rediscovered the glories of good
autocompletion and jump-to-definition by way of [Tern](http://ternjs.net/) and
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

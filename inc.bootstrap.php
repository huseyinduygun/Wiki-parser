<?php

use rdx\wikiparser\Parser;

spl_autoload_register(function($class) {
	if ( file_exists($file = __DIR__ . '/' . str_replace('\\', '/', str_replace('rdx\\wikiparser\\', 'src\\', $class)) . '.php') ) {
		include $file;
	}
});

header('Content-type: text/plain; charset=utf-8');

$Parser = Parser::class;

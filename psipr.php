<?php

spl_autoload_register(function($className) {

	$className = explode("\\",$className);
	require __DIR__ . '/class/' . $className[1] . '.php';

});
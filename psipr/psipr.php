<?php

spl_autoload_register(function ($nombre_clase) {
    // include_once $nombre_clase . '.php';
    require __DIR__.'/getURL/'.$nombre_clase.'.php';
});

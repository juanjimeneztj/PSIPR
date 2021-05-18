<?php

spl_autoload_register(function ($nombre_clase) {
    require_once __DIR__.'\\'.$nombre_clase . '.php';
});

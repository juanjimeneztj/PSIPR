<?php

spl_autoload_register(function ($nombre_clase) {
    include_once __DIR__.'/class/'.$nombre_clase . '.php';
});

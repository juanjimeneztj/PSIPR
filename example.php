<?php

require 'vendor/autoload.php';

$sip = new App\getURL([
    'url'    => 'https://google.com',
    'method' => 'GET',
    'data'   => [
        'title' => 'example title'
    ]
]);
echo $sip->send();
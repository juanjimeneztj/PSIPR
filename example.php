<?php

require 'vendor/autoload.php';

$sip = new Nowy\getURL\getURL([
    'url'    => 'https://google.com',
    'method' => 'GET',
    'data'   => [
        'title' => 'example title'
    ]
]);
echo $sip->send();

use Nowy\Params\getParams as ValidateData;

if(ValidateData::url('http://test.com')){
    echo 'si es url buena';
}else{
    echo 'mala url';
}


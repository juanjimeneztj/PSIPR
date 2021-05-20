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

// $test = new Nowy\Params\getParams();
// if($test->url('http://test.com')){
//     echo 'si es url buena';
// }else{
//     echo 'mala url';
// }

use Nowy\Params\getParams as ValidateData;

if(ValidateData::url('http://test.com')){
    echo 'si es url buena';
}else{
    echo 'mala url';
}
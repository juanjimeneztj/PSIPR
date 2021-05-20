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
echo '<br>';
if(ValidateData::url('http://test.com')){
    echo 'si es url buena';
}else{
    echo 'mala url';
}

echo '<br>';
if(ValidateData::fieldEmail('noegomez@c.ca')){
    echo 'si correo electronico valido';
}else{
    echo 'No es correo electronico valido';
}
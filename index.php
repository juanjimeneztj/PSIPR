<?php
require_once 'vendor/autoload.php';

use App\getURL as option1;
use App2\getURL as option2;


$test = new option1();
echo $test->init();

echo '<br>';

$test2 = new option2();
echo $test2->init();
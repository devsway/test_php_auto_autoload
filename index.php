<?php

use classes\Boyaki;
use classes\Greeting;

require_once "Autoloader.php";//これ一度だけでOK

$test = new Greeting();
$test2 = new Boyaki();

var_dump($test->hello());
var_dump($test2->hello());
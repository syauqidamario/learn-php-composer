<?php

require_once __DIR__ . '/vendor/autoload.php';

use ProgrammerZamanNow\Data\People;

$people = new People("Misaki");

echo $people->sayHello("Misaki") . PHP_EOL;

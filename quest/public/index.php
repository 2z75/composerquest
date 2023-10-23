<?php

use App\Hello;

require_once __DIR__ . "../vendor/autoload.php";

$hello = new Hello();

echo $hello->talk();
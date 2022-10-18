<?php

include_once('../src/Hello.php');

use App\Hello;

$hello = new Hello;

echo $hello->talk();

?>
<?php

/*$_COOKIE['count']++;

echo '<p>Adding 1</p>';*/

$value = $_COOKIE['count'];
$value++;

setcookie('count', $value);

echo 'Adding 1';

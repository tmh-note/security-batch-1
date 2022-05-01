<?php

$arr = ['apple', 'orange', 'banana'];
$serialize = serialize($arr);
// $unserialize = unserialize($serialize);
// var_dump($unserialize);

$encode = json_encode($arr);
$decode = json_decode($encode);

var_dump($decode);
<?php
$json = file_get_contents('php://input');
$obj = json_decode($json);
var_dump($_POST);
var_dump($obj->value);
die();


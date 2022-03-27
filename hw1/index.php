<?php

$connect_db = new PDO('mysql:host=db;port=3306', 'root', 'test');

$connect_second = new PDO('mysql:host=second;port=3306', 'root', 'test');

echo "<pre>";
var_dump($connect_db);

var_dump($connect_second);

phpinfo();

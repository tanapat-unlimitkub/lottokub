<?php

try {
    $sqlite = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (Exception $ex) {
    echo $ex->getMessage();
}
$databaseB = new mysqli('localhost', 'tua_admin', 'fvdfwT1nBX', 'viphack1_vip');


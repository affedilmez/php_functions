<?php
$config = array(
    'host'		=> 'localhost',
    'username' 	=> 'root',
    'password' 	=> '',
    'dbname' 	=> 'nihat'
);

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
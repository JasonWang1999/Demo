<?php
$host = '127.0.0.1';
$dbuser = 'root';
$pwd = 'root123';
$dbname='fenye';
$db=new mysqli($host,$dbuser,$pwd,$dbname);
$db->query("SET NAMES UTF8");

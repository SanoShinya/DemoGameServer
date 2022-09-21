<?php
phpinfo();

$pdo = new PDO("mysql:host=db;dbname=demo_game_server", "root", "root");
var_dump($pdo);
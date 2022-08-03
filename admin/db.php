<?php

$host = 'localhost';
$user = 'weblee';
$pw = 'dlwogns94!';
$dbName = 'weblee';
$mysqli = new mysqli($host, $user, $pw, $dbName);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
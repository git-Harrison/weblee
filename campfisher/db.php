<?php 

	$host = 'localhost';
	$user = 'weblee';
	$pw = 'dlwogns7662!';
	$dbName = 'weblee';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	session_cache_expire(360);

	session_start();

?>
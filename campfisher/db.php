<?php 

	$host = 'localhost';
	$user = 'weblee';
	$pw = 'leejaehun94!';
	$dbName = 'weblee';
	$mysqli = new mysqli($host, $user, $pw, $dbName);
	
	session_cache_expire(120);

	session_start();

//    if ($mysqli->connect_error) {
//        die("연결 실패 : " .$mysqli->connect_error);
//    } else {
//        echo "연결 성공";
//    }

?>
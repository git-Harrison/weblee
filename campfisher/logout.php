<?php
	include_once "db.php";
	
	$res = session_destroy();

	if ($res) {
		header('Location: index.php');
	}
?>
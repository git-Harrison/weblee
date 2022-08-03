<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

		$host = 'localhost';
		$user = 'weblee';
		$pw = 'leejaehun94!';
		$dbName = 'weblee';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		session_cache_expire(360);

		session_start();


		$id = $_POST['id'];
		$pw = $_POST['pw'];

		$check = "SELECT * FROM member WHERE id='$id'";

		$result = $mysqli->query($check);

		if ($result->num_rows==1) {
			$row = $result->fetch_array(MYSQLI_ASSOC);
			if (password_verify($pw, $row['pw'])) {
				$_SESSION['id'] = $id;
				if (isset($_SESSION['id'])) {
					echo "<script>alert('은요미 하위~ :) ♥'); alert(' {$_SESSION['id']}님 환영합니다.'); location.href='eunhun.php';</script>";
				}else {
					echo "세션 저장 실패";
				}
			}else {
				echo ("<script>alert('은아가 아니네요?? 웹툰이나 보러 꺼지세요.'); location.href='https://comic.naver.com/index';</script>");
			}
		}else {
			echo ("<script>alert('은아가 아니네요?? 웹툰이나 보러 꺼지세요.'); location.href='https://comic.naver.com/index';</script>");
		}
	?>

</body>
</html>
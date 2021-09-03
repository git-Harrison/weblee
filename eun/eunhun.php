<?php
	session_cache_expire(120);

	session_start();

	if (!isset($_SESSION['id'])) {
		echo ("<script>alert('Who are you? Login please'); location.href='eun.php';</script>");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta property="og:image" content="kakaoimage.jpg"> 
	<title>블랙빈메모장</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/eun/eun1.jpg">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="eun.css">

</head>
<body>

<style>
    a.home {
        display: none !important;
    }
</style>

	<?php include_once('header.php')?>
	
	<?php
		$host = 'localhost';
		$user = 'weblee';
		$pw = 'dlwogns7662!';
		$dbName = 'weblee';
		$mysqli = new mysqli($host, $user, $pw, $dbName);
	?>

	<h1 id="title">Today BlackBeen</h1>
	<form name="join" method="post" action="eun_data.php">
		<div>
			<input type="text" class="text" id="feel" name="feel" placeholder="오늘 은루의 기분을 적어주세요." autocomplete="off">
			<input type="text" class="text" id="food" name="food" placeholder="오늘 먹고싶은 음식을 적어주세요." autocomplete="off">
			<textarea class="text" id="today" name="today" placeholder="오늘의 메세지를 적어주세요. (필수항목)" autocomplete="off"></textarea> 
		</div>
		<button type="submit" id="submit">째니에게 보내기</button>
	</form>
	
</body>
</html>
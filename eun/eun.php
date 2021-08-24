

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta property="og:image" content="kakaoimage.jpg"> 
	<title>BlackBeen</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/eun/eun1.jpg">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="eun.css">

</head>
<body>

	<form method="post" action="eun_check.php">
		<div>
			<h1 id="title">BlackBeen ID</h1>
			<input type="text" class="text" id="id" name="id" autocomplete="off">
			<h1 id="title">비밀번호</h1>
			<input type="password" class="text" id="pw" name="pw" autocomplete="off">
		</div>
		<button type="submit" id="submit">확인</button>
	</form>
	
</body>
</html>
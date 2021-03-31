<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="../assets/images/favicon.png">

	<!-- 웹 폰트 -->
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">

	<!-- 스타일시트 -->
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	
</head>
<body>

	<footer>

		<div>
			<a href="/">
				<i class="fa fa-home" aria-hidden="true"></i>
			</a>
		</div>
		<div id="chang_bg_btn">
			<i class="fa fa-moon-o" aria-hidden="true"></i>
		</div>
<!-- 		<div>
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</div> -->
		<div id="change_lang" onclick="change_lang()">
			<i class="fa fa-language" aria-hidden="true"></i>
		</div>

	</footer>

	<script>

		// 낮 밤 전환

		$('#chang_bg_btn').on('click', function(){
			$('#change_bg').toggleClass('night');
		});

		$('#change_lang').on('click', function(){
			$(this).toggleClass('on');
		});

	</script>
	
</body>
</html>
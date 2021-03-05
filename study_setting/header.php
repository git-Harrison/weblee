<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>

	<!-- 폰트 -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;900&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/default.css">
	
</head>
<body>
	
	<div class="nav">
		<div class="container">
			<?	
				$filename =  basename($_SERVER['PHP_SELF']);

				if (file_exists($filename)) {

				    echo "<div class='update'>페이지 최종 수정일 : " . date ("Y년 m월  d일  H시 i분 ", filemtime($filename));
				    echo "</div>";
				}
			?> 
			<ul>
				<li>
					<a href="https://weblee.kr/study_setting/index.php">MAIN</a>
				</li>
				<li>
					<a href="https://weblee.kr/" target="_blank">WEBLEE</a>
				</li>
				<li>
					<a href="" target="_blank">CODPEN</a>
				</li>
				<li>
					<a href="https://publ-reference.tistory.com" target="_blank">TISTORY</a>
				</li>
				<li>
					<a href="https://github.com/wognsl305/weblee" target="_blank">GITHUB</a>
				</li>
			</ul>
		</div>
	</div>

</body>
</html>
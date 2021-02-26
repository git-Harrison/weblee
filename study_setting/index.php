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

	<!-- 폰트 -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;900&display=swap" rel="stylesheet">

	<!-- 메인페이지 레이아웃 기본 CSS 설정 -->
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/default.css">

</head>
<body>

	<div class="wrap">
		
		<div class="nav">
			<div class="container">
				<?
					$filename = 'index.php';

					if (file_exists($filename)) {

					    echo "<div class='update'>페이지 최종 수정일 : " . date ("Y년 m월  d일  H시 i분 ", filemtime($filename));
					    echo "</div>";
					}
				?> 
				<ul>
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

		<header>
			<div class="title">
				<h1>메인 타이틀</h1> <!-- 제목 -->
				<p>서브 타이틀</p> <!-- 부제목 -->
			</div>
		</header>

		<main>
			<div class="container">
				
				<div class="filter_button">
					<button class="button is-checked" data-filter="*">ALL</button>
					<button class="button" data-filter=".html">HTML</button>
					<button class="button" data-filter=".css">CSS</button>
					<button class="button" data-filter=".info">INFO</button>
					<button class="button" data-filter=".test">TEST</button>
				</div>

				<div class="list">
					<div class="list_item color1 html" data-category="html">
						<a href="html/html.html">
							<h2>HTML</h2>
							<p>HTML 관련 자료</p>
							<div class="tag">
								<span>#html</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
					<div class="list_item color2 css" data-category="css">
						<a href="css/css.html">
							<h2>CSS</h2>
							<p>CSS 관련 자료</p>
							<div class="tag">
								<span>#css</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
					<div class="list_item color3 info" data-category="info">
						<a href="info/info.html">
							<h2>INFO</h2>
							<p>INFO 관련 자료</p>
							<div class="tag">
								<span>#html</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
					<div class="list_item color4 test" data-category="test">
						<a href="">
							<h2>테스트</h2>
							<p>테스트</p>
							<div class="tag">
								<span>#teg</span><span>#html</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
					<div class="list_item color3 info" data-category="info">
						<a href="">
							<h2>INFO</h2>
							<p>INFO 관련 자료</p>
							<div class="tag">
								<span>#html</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
					<div class="list_item color4 test" data-category="test">
						<a href="">
							<h2>테스트</h2>
							<p>테스트</p>
							<div class="tag">
								<span>#teg</span><span>#html</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
					<div class="list_item color1 html" data-category="html">
						<a href="">
							<h2>HTML</h2>
							<p>HTML 관련 자료</p>
							<div class="tag">
								<span>#html</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
					<div class="list_item color2 css" data-category="css">
						<a href="">
							<h2>CSS</h2>
							<p>CSS 관련 자료</p>
							<div class="tag">
								<span>#css</span>
							</div>
							<div class="day">
								<span>2021</span>.<span>03</span>.<span>02</span>
							</div>
						</a>
					</div>
				</ul>
			</div>
		</main>

	</div>

	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/index.js"></script>
	<script>
		
	</script>	
</body>
</html>
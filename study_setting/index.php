<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>
	
	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/study_setting/assets/images/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/default.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q33C7E9XM2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Q33C7E9XM2');
	</script>

</head>
<body>

	<? include_once('header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>STUDY MAIN SITE</h1>
				<p>References</p>
			</div>
		</header>

		<main>
			<div class="container">
				
				<div class="filter_button">
					<div class="scroll_btn">
						<button class="button is-checked" data-filter="*">ALL</button>
						<button class="button" data-filter=".html">HTML</button>
						<button class="button" data-filter=".css">CSS</button>
						<button class="button" data-filter=".info">INFO</button>
						<button class="button" data-filter=".timetable">TIME TABLE</button>
						<button class="button" data-filter=".coding">CODING</button>
					</div>
				</div>

				<div class="list">

					<div class="list_item timetable" title="timetable">
						<a href="timetable/timetable.php">
							<h2>TIME TABLE</h2>
							<p>시간표</p>
							<div class="tag">
								<span>#일정</span><span>#스터디</span><span>#html</span><span>#css</span>
							</div>
						</a>
					</div>

					<div class="list_item info" title="info">
						<a href="info/info.php">
							<h2>INFO</h2>
							<p>필요 정보 사이트 링크</p>
							<div class="tag">
								<span>#information</span>
							</div>
						</a>
					</div>

					<div class="list_item html" title="html">
						<a href="html/html.php">
							<h2>HTML</h2>
							<p>HTML 레퍼런스</p>
							<div class="tag">
								<span>#html</span><span>#자료</span>
							</div>
						</a>
					</div>

					<div class="list_item html" title="html">
						<a href="emmet/emmet.php">
							<h2>EMMET</h2>
							<p>EMMET 레퍼런스</p>
							<div class="tag">
								<span>#EMMET</span><span>#단축키</span><span>#태그</span>
							</div>
						</a>
					</div>

					<div class="list_item css" title="css">
						<a href="css/css.php">
							<h2>CSS</h2>
							<p>CSS 레퍼런스</p>
							<div class="tag">
								<span>#css</span><span>#자료</span>
							</div>
						</a>
					</div>

					<div class="list_item css" title="css">
						<a href="flex/flex.php">
							<h2>FLEX</h2>
							<p>CSS - display:flex 상세 내용</p>
							<div class="tag">
								<span>#display #flex #CSS3 #flexible box</span>
							</div>
						</a>
					</div>

					<div class="list_item css" title="css">
						<a href="background/background.php">
							<h2>BACKGROUND</h2>
							<p>CSS - background 상세 내용</p>
							<div class="tag">
								<span>#background #background-color</span>
							</div>
						</a>
					</div>

					<div class="list_item css" title="css">
						<a href="transform/transform.php">
							<h2>TRANSFORM</h2>
							<p>CSS - transform 상세 내용</p>
							<div class="tag">
								<span>#transform #animation</span>
							</div>
						</a>
					</div>

					<div class="list_item css" title="css">
						<a href="boxshadow/boxshadow.php">
							<h2>BOX-SHADOW</h2>
							<p>CSS - boxshadow 상세 내용</p>
							<div class="tag">
								<span>#boxshadow #그림자</span>
							</div>
						</a>
					</div>

					<div class="list_item coding" title="coding">
						<a href="markup/markup.php">
							<h2>MARKUP</h2>
							<p>홈페이지 마크업</p>
							<div class="tag">
								<span>#markup #홈페이지디자인 #레이아웃</span>
							</div>
						</a>
					</div>

				</div>

			</div>
		</main>

	</div>

	<? include_once('footer.php'); ?>

</body>
</html>


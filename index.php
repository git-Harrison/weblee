<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="assets/images/favicon.png">

	<!-- 웹 폰트 -->
	<link href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css' rel='stylesheet' type='text/css'>

	<!-- 스타일시트 -->
	<link rel="stylesheet" href="assets/css/jquery.fullPage.css">
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

		<main id="main">

			<!-- 컨텐츠 1 -->
			<section class="section" id="section1">
				<div class="sec1_bg_L">
					<div class="cont_L">
						<h1>WEB | LEE</h1>
						<div class="lee_img">
							<img src="assets/images/weblee.jpg" alt="weblee">
						</div>
					</div>
				</div>

				<div class="sec1_bg_R">
					<div class="cont_R">
						
					</div>
				</div>
			</section>
			<!-- 컨텐츠 1 -->

			<!-- //컨텐츠 2 -->
			<section class="section" id="section2">
			    ㅇ
			</section>
			<!-- //컨텐츠 2 -->

			<!-- //컨텐츠 3 -->
			<section class="section" id="section3">
			    ㅇ
			</section>
			<!-- //컨텐츠 3 -->

		</main>

</body>
</html>

<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/jquery.fullPage.js"></script>
<script>


		$('#main').fullpage({
			anchors: ['firstPage', 'secondPage', '3rdPage'],
			navigation: true,
			navigationPosition: 'right',
			navigationTooltips: ['컨텐츠1', '컨텐츠2', '컨텐츠3']
		});


</script>
<? include_once('footer.php'); ?>
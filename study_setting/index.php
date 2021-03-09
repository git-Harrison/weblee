<? include_once('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<title>WebLee</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="../assets/images/favicon.png">

</head>
<body>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>STUDY MAIN SITE</h1>
				<p>강의</p>
			</div>
		</header>

		<main>
			<div class="container">
				
				<div class="filter_button">
					<button class="button is-checked" data-filter="*">ALL</button>
					<button class="button" data-filter=".html">HTML</button>
					<button class="button" data-filter=".css">CSS</button>
					<button class="button" data-filter=".info">INFO</button>
					<button class="button" data-filter=".timetable">TIME TABLE</button>
				</div>

				<div class="list">

					<div class="list_item color4 timetable" data-category="test">
						<a href="timetable/timetable.php">
							<h2>TIME TABLE</h2>
							<p>시간표</p>
							<div class="tag">
								<span>#시간표</span><span>#스터디</span><span>#html</span><span>#css</span>
							</div>
						</a>
					</div>

					<div class="list_item color1 html" data-category="html">
						<a href="html/html.php">
							<h2>HTML</h2>
							<p>HTML 레퍼런스</p>
							<div class="tag">
								<span>#html</span>
							</div>
						</a>
					</div>

					<div class="list_item color2 css" data-category="css">
						<a href="css/css.php">
							<h2>CSS</h2>
							<p>CSS 레퍼런스</p>
							<div class="tag">
								<span>#css</span>
							</div>
						</a>
					</div>

					<div class="list_item color3 info" data-category="info">
						<a href="info/info.php">
							<h2>INFO</h2>
							<p>필요 정보 사이트 링크</p>
							<div class="tag">
								<span>#information</span>
							</div>
						</a>
					</div>

				</div>

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
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
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/index.css">
	<!-- <link rel="stylesheet" href="assets/css/slick-theme.css"> -->

</head>
<body>



	<div class="wrap">
		
		<section class="main">

			<h1>WebLee</h1>
			<h2>My delicate and free UI&UX development space</h2>
			<div class="main_img">
				<img src="assets/images/bg.jpg" alt="강동원">
			</div>
<!-- 			<div class="main_s_img">
				<img src="assets/images/bg.jpg" alt="강동원">
			</div> -->

		</section>

		<section>
			<div class="container">
				<div class="m_production">
					<h1>My production site</h1>
					<p>참여도 100%</p>
				</div>
			</div>
			<div class="m_slider">
				<div>
					<img src="../assets/images/site/pc_site_portfolio.png" alt="">
				</div>
				<div>
					<img src="../assets/images/site/pc_site_portfolio.png" alt="">
				</div>
				<div>
					<img src="../assets/images/site/pc_site_portfolio.png" alt="">
				</div>
				<div>
					<img src="../assets/images/site/pc_site_portfolio.png" alt="">
				</div>
			</div>
		</section>

	</div>



	<script src="../assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script>
		$('.m_slider').slick({
		  centerMode: true,
		  centerPadding: '20px',
		  slidesToShow: 2,
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '20px',
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 380,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '10px',
		        slidesToShow: 1
		      }
		    }
		  ]
		});
	</script>	
</body>
</html>
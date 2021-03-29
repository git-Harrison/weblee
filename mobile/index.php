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
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/index.css">
	<!-- <link rel="stylesheet" href="assets/css/slick-theme.css"> -->

</head>
<body>

	<style>
		#wrap {
			width: 100%;
			height: 100vh;
			background: url(assets/images/m_bg_day.png) no-repeat top center;
			background-size: cover;
			transition: background 0.6s ease;
		}
		#wrap.night {
			background: url(assets/images/m_bg_night.png) no-repeat top center;
			background-size: cover;
			transition: background 0.6s ease;
		}
		#wrap.night .title {
			color: #fff;
			transition: color 0.6s ease;
		}
		#wrap.night .message span,
		#wrap.night .message .msg_text {
			color: #343434;
			transition: color 0.6s ease;
		}

		#wrap.night .bottom_nav {
			background-color: #0f1f36;
			transition: background 0.6s ease;
		}
		.title {
			position: absolute;
			left: 0;
			top: 40px;
			width: 100%;
			color: #343434;
			transition: color 0.6s ease;
		}
		.title h1 {
			font-weight: bold;
		}
		.title p {
			font-size: 13px;
			margin-top: 12px;
		}
		.message {
			position: absolute;
			left: 0;
			top: 120px;
			width: 92%;
			padding: 4%;
			font-size: 13px;
			border-radius: 12px;
			background-color: #fff;
		}
		.msg_top {
			overflow: hidden;
		}
		.msg_top i {
			display: inline-block;
			float: left;
			padding-top: 5px;
			color: #FFD228;
		}
		.msg_top i:last-child {
			font: none;
			position: absolute;
			right: 6px;
			top: 6px;
			padding: 0;
			font-size: 20px;
			color: #ff0000;
		}
		.msg_top span {
			display: inline-block;
			float: left;
			padding-left: 5px;
			color: #343434;
		}
		.msg_top div {
			display: inline-block;
			float: right;
			padding-top: 3px;
			padding-right: 6%;
			font-size: 11px;
			color: #848484;
		}
		.msg_text {
			padding-top: 6px;
		}
		.bottom_nav {
			display: flex;
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 60px;
			/*background-color: rgba(71,84,101,0.8);*/
			background-color: #c98d9b;
			transition: background 0.6s ease;
		}
		.bottom_nav > div {
			width: 33.33333333333%;
			line-height: 58px;
			text-align: center;
			cursor: pointer;
		}
		.bottom_nav i {
			font-size: 22px;
			color: #fff;
		}
	</style>

	<div id="wrap">
		
		<section>
			<div class="container">
				<div class="title">
					<h1>WebLee</h1>

					<?	
						$filename =  basename($_SERVER['PHP_SELF']);

						if (file_exists($filename)) {

						    echo "<p>" . date ("j F,  Y H:i ", filemtime($filename));
						    echo "</p>";
						}
					?> 

				</div>

				<div class="message">
					<div class="msg_top">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Unread message</span>
						<div>

							<?php
								echo date("Y-m-d H:i")."<br/>";
							?>

						</div>
						<i class="fa fa-times" aria-hidden="true"></i>
					</div>
					<div class="msg_text">This is the mobile version<br>If you want the PC version, please use the PC</div>	
				</div>
			</div>
		</section>

		<div class="bottom_nav">
			<div>
				<i class="fa fa-home" aria-hidden="true"></i>
			</div>
			<div id="chang_bg_btn">
				<i class="fa fa-moon-o" aria-hidden="true"></i>
			</div>
			<div>
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</div>
		</div>

		<!-- <section class="main">

			<h1>WebLee</h1>
			<h2>My delicate and free UI&UX development space</h2>
			<div class="main_img">
				<img src="assets/images/bg.jpg" alt="강동원">
			</div>

		</section>

		<section>
			<div class="container">
				<div class="m_production">
					<h1>My production site</h1>
					<p>참여도 100%</p>
				</div>
			</div>
			<div class="m_slider">
				<div class="m_slider_item">
					<div class="m_slider_content">
						<div class="m_slider_img">
							<img src="../assets/images/site/mobile_site_studying.png" alt="studying">
						</div>
						<div class="m_slider_text">	
							<h4>Reference Site</h4>
							<div class="tag">
								<span>#PHP</span>
								<span>#웹표준</span>
								<span>#반응형</span>
							</div>
						</div>	
						<div class="browser">
							<img src="../assets/images/icon/IE.png" alt="IE">
							<img src="../assets/images/icon/crome.png" alt="crome">
							<img src="../assets/images/icon/firefox.png" alt="firefox">
							<img src="../assets/images/icon/whale.png" alt="whale">
						</div>
						<a href="https://weblee.kr/study_setting/index.php">Go to Site</a>
					</div>
				</div>
				<div class="m_slider_item">
					<div class="m_slider_content">
						<div class="m_slider_img">
							<img src="../assets/images/site/mobile_site_studying.png" alt="studying">
						</div>
						<a href="https://weblee.kr/study_setting/index.php">사이트 보기</a>
					</div>
				</div>
				<div class="m_slider_item">
					<div class="m_slider_content">
						<div class="m_slider_img">
							<img src="../assets/images/site/mobile_site_studying.png" alt="studying">
						</div>
						<a href="https://weblee.kr/study_setting/index.php">사이트 보기</a>
					</div>
				</div>
				<div class="m_slider_item">
					<div class="m_slider_content">
						<div class="m_slider_img">
							<img src="../assets/images/site/mobile_site_studying.png" alt="studying">
						</div>
						<a href="https://weblee.kr/study_setting/index.php">사이트 보기</a>
					</div>
				</div>
				<div class="m_slider_item">
					<div class="m_slider_content">
						<div class="m_slider_img">
							<img src="../assets/images/site/mobile_site_studying.png" alt="studying">
						</div>
						<a href="https://weblee.kr/study_setting/index.php">사이트 보기</a>
					</div>
				</div>
			</div>
		</section> -->

		<!-- 메일보내기 -->
		<!-- <section>
			<div class="container">
				<div class="contact_us">
					
				</div>
			</div>
		</section> -->

	</div>



	<script src="../assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script>
		// $('.m_slider').slick({
		//   centerMode: true,
		//   dots: true,
		//   centerPadding: '20px',
		//   slidesToShow: 1,
		//   responsive: [
		//     {
		//       breakpoint: 768,
		//       settings: {
		//         arrows: false,
		//         centerMode: true,
		//         centerPadding: '140px',
		//         slidesToShow: 1
		//       }
		//     },
		//     {
		//       breakpoint: 600,
		//       settings: {
		//         arrows: false,
		//         centerMode: true,
		//         centerPadding: '50px',
		//         slidesToShow: 1
		//       }
		//     }
		//   ]
		// });
		$('#chang_bg_btn').on('click', function(){
			$('#wrap').toggleClass('night');
		});
	</script>	
</body>
</html>
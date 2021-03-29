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
			overflow: hidden;
			width: 100%;
			height: 100vh;
			min-height: 100vh;
			max-height: 100vh;
			background: url(assets/images/m_bg_day.png) no-repeat top center;
			background-size: cover;
			transition: background 0.6s ease;
			-webkit-tap-highlight-color: rgba(0,0,0,0);
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
		header {
			display: inline-block;
			position: absolute;
			right: 4px;
			top: 4%;
			padding: 14px;
			font-size: 20px;
			cursor: pointer;
		}
		header i {
			color: #FFD228;
		}
		header span {
			opacity: 0;
			display: inline-block;
			position: absolute;
			right: 10px;
			top: 14px;
			width: 15px;
			height: 15px;
			line-height: 13.5px;
			font-size: 9px;
			border-radius: 50%;
			text-align: center;
			background-color: #ff0000;
			color: #fff;
			transition: opacity 0.3s ease; 
		}
		header span.on {
			opacity: 1;
			transition: opacity 1.6s ease; 
		}
		.title h1 {
			font-weight: bold;
		}
		.title p {
			font-size: 13px;
			margin-top: 12px;
		}
		.message {
			opacity: 1;
			position: absolute;
			right: 0;
			top: 120px;
			width: 92%;
			padding: 4%;
			font-size: 13px;
			border-radius: 12px;
			background-color: #fff;
			transition: all 0.3s ease; 
		}
		.message.none {
			opacity: 0;
			right: -500px;
			transition: all 0.3s ease; 
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
			float: none;
			position: absolute;
			right: 0;
			top: 0;
			padding: 3px 7px;
			font-size: 20px;
			color: #ff4d4d;
		}
		.msg_top span {
			display: inline-block;
			float: left;
			padding-left: 5px;
			color: #ff4d4d;;
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
			width: 25%;
			line-height: 58px;
			text-align: center;
			cursor: pointer;
		}
		.bottom_nav > div a {
			display: block;
			height: 100%;
		}
		.bottom_nav i {
			font-size: 22px;
			color: #fff;
		}
		/*@keyframes msg_none {
			animation: msg_none 0.4s ease;
		    0% {
		        transform: scale(1);
		    }
		    100% {
		    	transform: scale(0);
		    }
		}*/
	</style>

	<div id="wrap">
		
		<section>

			<header>
				<i class="fa fa-bell" aria-hidden="true"></i>
				<span>1</span>
			</header>

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

				<div id="message" class="message">
					<div class="msg_top">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span data-translate="msg_top">Unread message</span>
						<div>

							<?php
								echo date("Y-m-d H:i")."<br/>";
							?>

						</div>
						<i class="fa fa-times msg_close" aria-hidden="true"></i>
					</div>
					<div class="msg_text" data-translate="msg_text"></div>	
				</div>
			</div>
		</section>

		<div class="bottom_nav">
			<div>
				<a href="/">
					<i class="fa fa-home" aria-hidden="true"></i>
				</a>
			</div>
			<div id="chang_bg_btn">
				<i class="fa fa-moon-o" aria-hidden="true"></i>
			</div>
			<div>
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</div>
			<div onclick="change_lang()">
				<i class="fa fa-language" aria-hidden="true"></i>
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



	<script src="assets/js/jquery-3.4.1.js"></script>
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

		$('.msg_close').on('click', function(){
			$('#message').addClass('none');
			$('header span').addClass('on');
		});
		$('header').on('click', function(){
			$('#message').removeClass('none');
			$('header span').removeClass('on');
		});

		var dictionary = {
        	'msg_top': {
	            'en': 'Unread message',
	            'ko': '읽지 않은 메시지',
		    },
		    'msg_text': {
	            'en': '<?php echo 'This is the mobile version <br> If you want the PC version, please use the PC' ?>',
	            'ko': '<?php echo '현재 모바일 버전입니다 <br> PC 버전을 원하시면 PC를 사용하세요' ?>',
		    }
		};
		var langs = ['en', 'ko'];
		var current_lang_index = 0;
		var current_lang = langs[current_lang_index];

		window.change_lang = function() {
		    current_lang_index = ++current_lang_index % 2;
		    current_lang = langs[current_lang_index];
		    translate();
		}

		function translate() {
		    $("[data-translate]").each(function(){
		        var key = $(this).data('translate');
		        $(this).html(dictionary[key][current_lang] || "N/A");
		    });
		}

		translate();
	</script>	
</body>
</html>
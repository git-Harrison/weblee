<?php include_once('xss.php')?>

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
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

	<!-- 스타일시트 -->
	<link rel="stylesheet" href="assets/css/jquery.fullPage.css">
	<link rel="stylesheet" href="assets/css/slider.css">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/index.css">
	<link rel="stylesheet" href="assets/css/mail.css">
	<link rel="stylesheet" href="assets/css/mideaquery.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q33C7E9XM2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Q33C7E9XM2');

	</script>

	<script>
		//디바이스 모바일일때 모바일 페이지로 자동이동
 		var uAgent = navigator.userAgent.toLowerCase();
		var mobilePhones = new Array('iphone', 'ipod', 'ipad', 'android', 'blackberry', 'windows ce','nokia', 'webos', 'opera mini', 'sonyericsson', 'opera mobi', 'iemobile');

		for (var i = 0; i < mobilePhones.length; i++){
			if (uAgent.indexOf(mobilePhones[i]) != -1){
				location.href="/mobile/index.php";
			}
		};
 	</script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3684998563812597"
            crossorigin="anonymous"></script>

</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

	<? include_once('header.php'); ?>

	<main id="main">

		<!-- 컨텐츠 1 -->
		<section class="section" id="section1">
			<div class="sec_container">
				<div class="cont_wrap">
					<div class="cont_L">
						<h1>WEB | LEE</h1>
						<div class="lee_img">
							<img src="assets/images/weblee.jpg" alt="weblee" class="black">
							<img src="assets/images/weblee_white.jpg" alt="weblee" class="white">
						</div>
						<div class="title">Web Publisher<br>and<br>Front-End Developer</div>
						<div class="sub_title">My delicate and free UI&UX development space</div>
					</div>
					<div class="cont_R">
						<div class="marker">
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
							<span>WEBLEE</span>
						</div>
						<div class="center_title">
							<h2>PERSONAL SITE</h2>
						</div>
						<div id="section1_theme" class="color_mode">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none" role="img" class="icon color-palette-icon">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M22 11C22 17.05 17.05 22 11 22C4.95 22 0 17.05 0 11C0 4.95 4.95 0 11 0C17.05 0 22 4.95 22 11ZM11 19C15.411 19 19 15.411 19 11C19 6.589 15.411 3 11 3V19Z" fill="#3D3D4E"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- 컨텐츠 1 -->

		<!-- 컨텐츠 2 -->
		<section class="section" id="section2">
		    <div class="sec_container">
		    	<div class="site_slider">
					<div class="slider_wrap">
						<div class="site s1">
							<div class="txt">
								<h2><span>S</span><span>T</span><span>U</span><span>D</span><span>Y</span><span>I</span><span>N</span><span>G</span></h2>
							</div>
							<div class="img_bg">
								<div class="site_ps">이미지에 마우스를 올려보세요<br>Put your mouse over the image</div>
							</div>
							<div class="img pc">
								<div class="pc_img_wrap fittrix">
									<img src="assets/images/site/pc_site_studying.png" alt="site">
								</div>
							</div>
							<div class="img pad">
								<div class="tablet_img_wrap">
									<img src="assets/images/site/d_site_studying.png" alt="site">
								</div>
							</div>
							<div class="img mobile">
								<div class="mobile_img_wrap">
									<img src="assets/images/site/m_site_studying.png" alt="site">
								</div>
							</div>
							<div class="site_introduction">
								<div class="tag">
									<span>HTML5,</span>
									<span>CC3,</span>
									<span>jQuery,</span>
									<span>javascript</span>
								</div>
								<div class="browser">
									<img src="assets/images/icon/IE.png" alt="IE">
									<img src="assets/images/icon/crome.png" alt="crome">
									<img src="assets/images/icon/firefox.png" alt="firefox">
									<img src="assets/images/icon/whale.png" alt="whale">
								</div>
								<div class="view_site">
									<a class="view_btn" href="https://weblee.kr/study_setting/index.php" target="_blank">
										<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
											<rect class="outline" height="100%" width="100%" />
											<div class="text">VIEW WEB SITE</div>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="site s2">
							<div class="txt">
								<h2><span>P</span><span>O</span><span>R</span><span>T</span><span>F</span><span>O</span><span>L</span><span>I</span><span>O</span></h2>
							</div>
							<div class="img_bg">
								<div class="site_ps">이미지에 마우스를 올려보세요<br>Put your mouse over the image</div>
							</div>
							<div class="img pc">
								<div class="pc_img_wrap fittrix">
									<img src="assets/images/site/pc_site_prot.png" alt="site">
								</div>
							</div>
							<div class="img pad">
								<div class="tablet_img_wrap">
									<img src="assets/images/site/d_site_prot.png" alt="site">
								</div>
							</div>
							<div class="img mobile">
								<div class="mobile_img_wrap">
									<img src="assets/images/site/m_site_prot.png" alt="site">
								</div>
							</div>
							<div class="site_introduction">
								<div class="tag">
									<span>HTML5,</span>
									<span>CC3</span>
								</div>
								<div class="browser">
									<img src="assets/images/icon/IE.png" alt="IE">
									<img src="assets/images/icon/crome.png" alt="crome">
									<img src="assets/images/icon/firefox.png" alt="firefox">
									<img src="assets/images/icon/whale.png" alt="whale">
								</div>
								<div class="view_site">
									<a class="view_btn" href="http://weblee.kr/portfolio_ver1/indexs/main.html" target="_blank">
										<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
											<rect class="outline" height="100%" width="100%" />
											<div class="text">VIEW WEB SITE</div>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="site s4">
							<div class="txt">
								<h2><span>P</span><span>O</span><span>R</span><span>T</span><span>F</span><span>O</span><span>L</span><span>I</span><span>O</span></h2>
							</div>
							<div class="img_bg">
								<div class="site_ps">이미지에 마우스를 올려보세요<br>Put your mouse over the image</div>
							</div>
							<div class="img pc">
								<div class="pc_img_wrap">
									<img src="assets/images/site/pc_site_portfolio.png" alt="site">
								</div>
							</div>
							<div class="img pad">
								<div class="tablet_img_wrap">
									<img src="assets/images/site/d_site_portfolio.png" alt="site">
								</div>
							</div>
							<div class="img mobile">
								<div class="mobile_img_wrap">
									<img src="assets/images/site/m_site_portfolio.png" alt="site">
								</div>
							</div>
							<div class="site_introduction">
								<div class="tag">
									<span>HTML5,</span>
									<span>CC3,</span>
									<span>jQuery,</span>
									<span>javascript</span>
								</div>
								<div class="browser">
									<img src="assets/images/icon/IE.png" alt="IE">
									<img src="assets/images/icon/crome.png" alt="crome">
									<img src="assets/images/icon/firefox.png" alt="firefox">
									<img src="assets/images/icon/whale.png" alt="whale">
								</div>
								<div class="view_site">
									<a class="view_btn" href="http://weblee.kr/portfolio_ver2/src/html/main.html" target="_blank">
										<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
											<rect class="outline" height="100%" width="100%" />
											<div class="text">VIEW WEB SITE</div>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="site s3">
							<div class="txt">
								<h2><span>F</span><span>I</span><span>T</span><span>T</span><span>R</span><span>I</span><span>X</span></h2>
							</div>
							<div class="img_bg">
								<div class="site_ps">이미지에 마우스를 올려보세요<br>Put your mouse over the image</div>
							</div>
							<div class="img pc">
								<div class="pc_img_wrap fittrix">
									<img src="assets/images/site/pc_site_fittrix.png" alt="site">
								</div>
							</div>
							<div class="img pad">
								<div class="tablet_img_wrap">
									<img src="assets/images/site/d_site_fittrix.png" alt="site">
								</div>
							</div>
							<div class="img mobile">
								<div class="mobile_img_wrap">
									<img src="assets/images/site/m_site_fittrix.png" alt="site">
								</div>
							</div>
							<div class="site_introduction">
								<div class="tag">
									<span>HTML5,</span>
									<span>CC3</span>
								</div>
								<div class="browser">
									<img src="assets/images/icon/IE.png" alt="IE">
									<img src="assets/images/icon/crome.png" alt="crome">
									<img src="assets/images/icon/firefox.png" alt="firefox">
									<img src="assets/images/icon/whale.png" alt="whale">
								</div>
								<div class="view_site">
									<a class="view_btn" href="http://fittrix.co.kr/" target="_blank">
										<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
											<rect class="outline" height="100%" width="100%" />
											<div class="text">VIEW WEB SITE</div>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
		</section>
		<!-- //컨텐츠 2 -->

		<!-- //컨텐츠 4 -->
		<section class="section" id="section4">
			<div class="sec_container">
				<div class="contact_us">
					<h1>Contact us</h1>
					<div class="map"></div>
					<div class="mail_send_form">
						<h2>피드백 문의</h2>
<!--					    <form class="gform" method="POST" action="https://script.google.com/macros/s/AKfycbxZl4zj1MIOahRvkI3GIFg05S9ziv4pmB_aeSA1/exec">-->
						    <div class="form-elements">
								<fieldset class="pure-group">
									<label for="name"></label>
									<input id="name" type="text"  value="" required placeholder="Name">
								</fieldset>

								<fieldset class="pure-group">
									<label for="email"></label>
									<input id="email" type="email" name="email" onblur="this.setAttribute('value', this.value);" value="" required placeholder="E-mail">
									<span class="validation-text">이메일을 확인해주세요</span>
								</fieldset>

								<fieldset class="pure-group">
									<label for="title"></label>
									<input id="title" name="title" type="text" value="" required placeholder="Title">
								</fieldset>

								<fieldset class="pure-group">
									<label for="message"></label>
									<textarea id="message" name="message" rows="1" required placeholder="Message"></textarea>
								</fieldset>

								<button class="button-success pure-button button-xlarge" id="email_form">
								<i class="fa fa-paper-plane"></i>SEND MESSAGE</button>
						    </div>
							<div style="display:none" class="thankyou_message">
								<h2>메일을 성공적으로 보냈습니다.<br>
									감사합니다.<br><br>
									The mail was sent successfully.<br>
									Thank you.</h2>
							</div>
							<p class="ps">
								보내기 버튼을 누른 후 3초 정도의 시간이 소요됩니다.<br><br>
								It will take about 3 seconds after pressing the Send button.
							</p>
<!--						</form>-->
					</div>
					<div class="our">
						<div class="our_box">
							<h4>주소</h4>
							<div>
								경기도 남양주시<br>
								인근역 - 도농역, 구리역
							</div>
						</div>
						<div class="our_box">
							<h4>이메일</h4>
							<div>
								wognsl305@naver.com<br>
							</div>
						</div>
					</div>
					<div class="sns">
						<ul>
							<li class="opentalk">
								<a href="https://open.kakao.com/me/Pub_harrison"></a>
							</li>
							<li class="insta">
								<a href="https://www.instagram.com/lj_hun/"></a>
							</li>
						</ul>
					</div>
					<div id="section2_theme" class="color_mode">
						<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none" role="img" class="icon color-palette-icon">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M22 11C22 17.05 17.05 22 11 22C4.95 22 0 17.05 0 11C0 4.95 4.95 0 11 0C17.05 0 22 4.95 22 11ZM11 19C15.411 19 19 15.411 19 11C19 6.589 15.411 3 11 3V19Z" fill="#3D3D4E"></path>
						</svg>
					</div>
				</div>
			</div>
		</section>
		<!-- //컨텐츠 4 -->
		
	</main>

	<? include_once('footer.php'); ?>
	
	<!-- 스크립트 -->
	<script data-cfasync="false" type="text/javascript"
	src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
	<script src="assets/js/jquery-1.12.4.js"></script>
	<script src="assets/js/jquery-ui-1.12.1.min.js"></script>
	<script src="assets/js/jquery.fullPage.js"></script>
	<script src="assets/js/index.js"></script>
	<script src="assets/js/slider.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>

	<!-- 스타일시트 -->
	<link rel="stylesheet" href="assets/css/index.css">
	<link rel="stylesheet" href="assets/css/common.css">

</head>
<body id="change_bg">

	<div class="wrap">
		
		<section>

			<header>
				<i class="fa fa-bell" aria-hidden="true"></i>
				<span>1</span>
			</header>

			<!-- container -->
			<div class="container">

				<div class="title">
					<h1>WebLee</h1>

					<?php
						echo "<p>" . date("j F,  Y H:i")."<br/>";
						echo "</p>";
					?>

				</div>

				<div id="message" class="message">
					<div class="msg_top">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span data-translate="msg_top">Unread message</span>
						<div>

							<?	
								$filename =  basename($_SERVER['PHP_SELF']);

								if (file_exists($filename)) {

								    echo "<p>" . date ("Y-m-d H:i", filemtime($filename));
								    echo "</p>";
								}
							?> 

						</div>
						<i id="msg_close" class="fa fa-times" aria-hidden="true"></i>
					</div>
					<div class="msg_text" data-translate="msg_text">This is the mobile version<br>If you want the PC version, please use the PC</div>	
				</div>

				<div class="app_wrap">
					<ul>
						<li class="site">
							<div class="app_icon">
									<img src="assets/images/app_icon/site_app_icon1.png" alt="앱아이콘" title="site">
							</div>
							<span data-translate="app1">Site</span>
						</li>
						<li>
							<div class="app_icon">
								<img src="assets/images/app_icon/site_app_icon2.png" alt="앱아이콘" title="mail">
							</div>
							<span data-translate="app2">mail</span>
						</li>
						<li>
							<a href="https://github.com/wognsl305/weblee" title="github">
								<div class="app_icon">
									<img src="assets/images/app_icon/site_app_icon3.png" alt="앱아이콘">
								</div>
								<span data-translate="app3">github</span>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/lj_hun/" title="instagram">
								<div class="app_icon">
									<img src="assets/images/app_icon/site_app_icon4.png" alt="앱아이콘">
								</div>
								<span data-translate="app4">instagram</span>
							</a>
						</li>
					</ul>
				</div>

			</div>
			<!-- //container -->

			<div id="site" class="app_on">
				<div class="app_site_container">
					<div class="app_top">
						<h1>My Site Coding</h1>
						<i class="fa fa-times" aria-hidden="true"></i>
					</div>
				</div>
			</div>

		</section>

	</div>

	<? include_once('footer.php'); ?>

	<script>

		$(document).ready(function(){

			// 번역
			var dictionary = {
		    	'msg_top': {
		            'en': 'Unread message',
		            'ko': '읽지 않은 메시지',
			    },
			    'msg_text': {
		            'en': 'This is the mobile version <br> If you want the PC version, please use the PC',
		            'ko': '현재 모바일 버전입니다 <br> PC 버전을 원하시면 PC를 사용하세요',
			    },
			    'site1': {
		            'en': 'Publisher Study (Reference)',
		            'ko': '퍼블리셔 스터디 (참조)',
			    },
			    'site1_sub': {
		            'en': '#reactive #web #mobile',
		            'ko': '#반응형 #웹 #모바일',
			    },
			    'app1': {
		            'en': 'site',
		            'ko': '웹페이지',
			    },
			    'app2': {
		            'en': 'mail',
		            'ko': '메일',
			    },
			    'app3': {
		            'en': 'github',
		            'ko': '깃허브',
			    },
			    'app4': {
		            'en': 'instagram',
		            'ko': '인스타그램',
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

		});

	</script>

</body>
</html>
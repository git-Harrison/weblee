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
						<i id="msg_close" class="fa fa-times" aria-hidden="true"></i>
					</div>
					<div class="msg_text" data-translate="msg_text"></div>	
				</div>
			</div>
		</section>

	</div>

	<!-- 스크립트 -->
	<script src="assets/js/jquery-3.4.1.js"></script>
	<script src="assets/js/index.js"></script>
	<script>

		$(document).ready(function(){

			// 번역
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

		});

	</script>

</body>
</html>

<? include_once('footer.php'); ?>
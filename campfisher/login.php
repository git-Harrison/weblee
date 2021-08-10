<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="캠핑,캠낚,캠피셔,오토캠핑,카라반">
	<title>campfisher</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/study_setting/assets/images/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/sinup.css">

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

	<? 
		include_once('db.php');
		include_once('header.php');
	?>

	<div class="main">

		<div class="container">

			<div class="sinup">
				<form method="post" action="login_check.php">
					<a href="" title="쇼핑몰로고">
	                    <img src="assets/images/logo.png" class="logo_img" alt="로고이미지">
	                </a>
					<div class="input_box">
						<div>
							<input type="text" size="30" name="id" class="form_field" id="sinup_id" placeholder="아이디" autocomplete="off">
							<label for="sinup_id" class="form_label">아이디</label>
							<div class="line"></div>
						</div>
					</div>
					<div class="input_box">
						<div>
							<input type="password" size="30" name="pw" class="form_field" id="sinup_pw" placeholder="비밀번호" autocomplete="off">
							<label for="sinup_pw" class="form_label">비밀번호</label>
							<div class="line"></div>
						</div>
					</div>
					<input type=submit value="로그인" class="sinup_btn">
					<div>
						<a href="sinup_terms.php" class="sinup_href">회원가입</a>
					</div>
				</form>
			</div>
		</div>

	</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="캠핑,캠낚,캠피셔,오토캠핑,카라반">
	<title>campfisher</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/study_setting/assets/images/avifcon.png">

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

	<? include_once('db.php'); ?>

	<? include_once('header.php'); ?>


	<div class="main">

		<div class="container">

			<div class="sinup">
				<form name="join" method="post" action="membersave.php">
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
					<div class="input_box">
						<div>
							<input type="password" size="30" name="repw" class="form_field" id="sinup_pw" placeholder="비밀번호" autocomplete="off">
							<label for="sinup_pw" class="form_label">비밀번호 확인</label>
							<div class="line"></div>
						</div>
					</div>
					<div class="input_box">
						<div>
							<input type="text" size="12" maxlength="10" name="name" class="form_field" id="sinup_name" placeholder="닉네임" autocomplete="off">
							<label for="sinup_name" class="form_label">닉네임</label>
							<div class="line"></div>
						</div>
					</div>
					<div class="input_box">
						<div>
							<input type="email" size="30" name="email" class="form_field" id="sinup_email" placeholder="이메일" autocomplete="off">
							<label for="sinup_email" class="form_label">이메일</label>
							<div class="line"></div>
						</div>
					</div>
					<div class="input_box checkbox">
						<div class="checkbox_box" style="text-align: left; font-size: 13px; font-weight: 300; color: #9b9b9b;">성별 (선택)</div>
						<div class="checkbox_box">
							<label for="sinup_sex1" class="sex">
								<input type="radio" name="sex" id="sinup_sex1" value="남">
								<span>남</span>
							</label>
						</div>
						<div class="checkbox_box">
							<label for="sinup_sex2" class="sex">
								<input type="radio" name="sex" id="sinup_sex2" value="여">
								<span>여</span>
							</label>
						</div>
					</div>
					<input type=submit value="가입하기" class="sinup_btn">
				</form>
			</div>
		</div>

	</div>
</body>
</html>
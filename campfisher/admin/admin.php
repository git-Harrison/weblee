<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>캠피셔 관리자</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/study_setting/assets/images/favicon.png">

	<link rel="stylesheet" href="src/components/css/admin.css">
</head>
<body>
	<?php include_once('admin_nav.php'); ?>

	<?php 
		if (!$_SESSION['id']) {
			echo "<script>alert('로그인 후 이용해주세요');</script>";
			echo "<script>location.href='../login.php'</script>";
		}
		if ($_SESSION['id']!=="admin") {
			echo "<script>alert('권한이 없습니다.');</script>";
			echo "<script>location.href='../index.php'</script>";
		}
	?>
	

	<div class="wrap">
		
		<div class="container">

			<div class="content">
				<h1 class="main_title">CampFisher</h1>
			</div>

			<div class="content">
				<div>
					TEST<br>
					입니다
				</div>
			</div>
			
		</div>

	</div>

</body>
</html>
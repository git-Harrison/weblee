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

	<div class="wrap">
		
		<div class="container">

			<div class="content">
				<h1 class="main_title">주문내역</h1>
			</div>

			<div class="content">
				<div class="cont">
					<h2>기간조회 : </h2>
					<div class="date">
						<form>
							<input type="date"> &nbsp;&nbsp;~&nbsp;&nbsp; <input type="date">
							<span>* 달력이미지를 클릭하세요.</span>
						</form>
					</div>
					<div class="excel_download_btn">
						<button type="submit">엑셀 다운로드</button>
					</div>
				</div>
			</div>

			
		</div>

	</div>
</body>
</html>			
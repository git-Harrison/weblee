<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>

	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/study_setting/assets/images/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/common.css">
	<link rel="stylesheet" href="../assets/css/sub_default.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q33C7E9XM2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Q33C7E9XM2');
	</script>
	
</head>
<body class="sub timetable" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

	<? include_once('../header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>스터디 공유 시간표</h1>
				<p>지인 스터디용</p>
			</div>
		</header>

		<main class="timetable">
			<div class="container">

                <div class="list">
                    <ul>
                        <li>
                            <a href="./timetable2.php">규태, 태현 시간표 <strong style="color: #ff0000; font-weight: normal">(종료)</strong> - <span>시간표 이동하기</span></a>
                        </li>
                        <br>
                        <li>
                            <a href="./timetable3.php">경민 시간표 <strong style="color: #ff0000; font-weight: normal">(진행중)</strong> - <span>시간표 이동하기</span></a>
                        </li>
                    </ul>
                </div>

			</div>
		</main>

	</div>

	<? include_once('../footer.php'); ?>

	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>
</body>
</html>


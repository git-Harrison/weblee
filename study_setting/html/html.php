<? include_once('../header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>
	
	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="../../assets/images/favicon.png">

	<!-- 폰트 -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;900&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/common.css">
	<link rel="stylesheet" href="../assets/css/sub_default.css">

</head>
<body class="sub html">

	<div class="wrap">

		<header>
			<div class="title">
				<h1>HTML</h1> <!-- 제목 -->
				<p>HTML 레퍼런스(reference)</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="html">
			<div class="container">

				<div class="list">
					<h2>HTML</h2>
					<p>HTML( HyperText Markup Language )은 웹 페이지를 만들기 위한 언어입니다.</p>
					<ul>
						<li>HT = HyperText : 문서와 문서를 연결</li>
						<li>M = Markup : 마크업, 태그</li>
						<li>L = Language : 언어</li>
						<li>HTML이란? 문서와 문서로 연결된 태그 언어를 말합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>태그(Tag)</h2>
					<p>태그는 정보를 정의하는 방식을 의미합니다.</p>
					<ul>
						<li>태그는 열린태그와 닫는태그가 있습니다.</li>
						<li>닫는태그에는 "/" 있어야 합니다.</li>
						<li>
							닫는태그가 필요 없는 것도 있습니다. (일반 적인 태그는 태그 처럼 시작하면 태그 처럼 닫아주어야 합니다. 하지만 br 등의 일부 태그는 /br 처럼 닫지 않는 경우가 있는데, 이를 닫는 태그가 없는 태그라 합니다. <span class="tag">&lsaquo;br&rsaquo;</span>, <span class="tag">&lsaquo;img&rsaquo;</span>, <span class="tag">&lsaquo;meta&rsaquo;</span>, <span class="tag">&lsaquo;link&rsaquo;</span>, <span class="tag">&lsaquo;input&rsaquo;</span>, <span class="tag">&lsaquo;hr&rsaquo;</span>등의 태그는 닫는 태그가 없는데, 그 이유는 태그 내부에 넣을 값이 없기 때문입니다.)
						</li>
						<li>HTML5에서는 "/"가 생략이 가능합니다.</li>
					</ul>
				</div>

			</div>
		</main>

	</div>
	
</body>
</html>
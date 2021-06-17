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
<body class="sub coding">

	<? include_once('../header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>Bootstrap (부트스트랩)</h1> <!-- 제목 -->
				<p>HTML, CSS, JS 프레임워크</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="html">
			<div class="container">

				<div class="list">
					<h2>부트스트랩이란?</h2>
				</div>

				<div class="list" style="background-color: #dff5f9;">

					<ul style="padding: 20px 0; margin: 0 0 0 25px;">
						<li>부트스트랩은 반응형이며 모바일 우선인 웹프로젝트 개발을 위한 가장 인기있는 HTML, CSS, JS 프레임워크입니다.</li>
						<li>무료로 사용 가능한 오픈 소스 (상업적 용도도 사용 가능)</li>
						<li>부트스트랩은 프론트엔드 웹개발을 더 빠르고 쉽게 만들어줍니다.</li>
						<li><a href="http://bootstrapk.com/" target="_blank" style="color: #1155cc;">( 부트스트랩 바로가기 )</a></li>
					</ul>
				</div>
				
				<div class="list">
					<p>
						딱히 설치라기보다는 다운받아서 라이브러리들을 프로젝트에 삽입해주면 됩니다. 자바 개발에서 사용할 것이므로 이클립스에 넣어주겠습니다.<br>먼저 아래 사이트에 들어가서 부트스트랩을 다운받습니다. 공식 사이트 말고 이미 커스터마이징된 부트스트랩 템플릿을 받아도 됩니다.<br>
						<a href="http://bootstrapk.com/getting-started/" target="_blank" style="color: #1155cc;">( 다운로드 링크 )</a>
					</p>
				</div>

				<div class="list">
					<img src="../assets/images/bootstrap.png" alt="bootstrap">
				</div>

				<div class="list">
					<p>
						다운로드를 받았다면 html파일에 연결해주세요.<br>
						저는 CDN주소로 연결해 보겠습니다.
					</p>
				</div>

<pre class="flex" style="margin-top: 10px;overflow: hidden;">
<code style="white-space: break-spaces"><span class="code_ps">/* 합쳐지고 최소화된 최신 */</span>
<<span class="pre_tag">link</span> <span class="pre_class">rel=</span><span class="pre_classname">"stylesheet"</span> <span class="pre_class">href=</span><span class="pre_classname">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"</span>>

<span class="code_ps">/* 부가적인 테마 */</span>
<<span class="pre_tag">link</span> <span class="pre_class">rel=</span><span class="pre_classname">"stylesheet"</span> <span class="pre_class">href=</span><span class="pre_classname">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"</span>>

<span class="code_ps">/* 합쳐지고 최소화된 최신 자바스크립트 */</span>
<<span class="pre_tag">script</span> <span class="pre_class">src=</span><span class="pre_classname">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"</span>><<span class="pre_open">/<span class="pre_tag">script</span>>

</code>
<div class="flex_tag">CDN</div>
</pre>
				<br>
				<div class="list">
					<h2>브라우저와 기기 지원</h2>
					<table>
						<thead>
							<tr>
								<th></th>
								<th>크롬</th>
								<th>파이어폭스</th>
								<th>익스플로러</th>
								<th>오페라</th>
								<th>사파리</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>안드로이드</td>
								<td class="ok">지원됨</td>
								<td class="ok">지원됨</td>
								<td>없음</td>
								<td class="no">지원되지 않음</td>
								<td>없음</td>
							</tr>
							<tr>
								<td>IOS</td>
								<td class="ok">지원됨</td>
								<td>없음</td>
								<td>없음</td>
								<td class="no">지원되지 않음</td>
								<td class="ok">지원됨</td>
							</tr>
							<tr>
								<td>맥 OS X</td>
								<td class="ok">지원됨</td>
								<td class="ok">지원됨</td>
								<td>없음</td>
								<td class="ok">지원됨</td>
								<td class="ok">지원됨</td>
							</tr>
							<tr>
								<td>윈도우즈</td>
								<td class="ok">지원됨</td>
								<td class="ok">지원됨</td>
								<td class="ok">지원됨</td>
								<td class="ok">지원됨</td>
								<td class="no">지원되지 않음</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list">
					<h2>인터넷 익스플로러 8 과 9</h2>
					<p>인터넷 익스플로러 8 과 9 또한 지원됩니다만, 이 브라우저들이 완전하게 지원하지 않는 몇몇 CSS 속성과 HTML5 요소들을 주의해주세요. 또한, 인터넷 익스플로러 8 은 미디어쿼리를 지원하기 위해 Respond.js 의 사용을 필요합니다.</p>
					<table>
						<thead>
							<tr>
								<th>기능</th>
								<th>인터넷 익스플로러 8</th>
								<th>인터넷 익스플로러 9</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>border-radius</td>
								<td class="no">지원되지 않음</td>
								<td class="ok">지원됨</td>
							</tr>
							<tr>
								<td>box-shadow</td>
								<td class="no">지원되지 않음</td>
								<td class="ok">지원됨</td>
							</tr>
							<tr>
								<td>transform</td>
								<td class="no">지원되지 않음</td>
								<td class="ok">지원됨 -ms 접두사 필요</td>
							</tr>
							<tr>
								<td>transition</td>
								<td class="no">지원되지 않음</td>
								<td class="no">지원되지 않음</td>
							</tr>
							<tr>
								<td>placeholder</td>
								<td class="no">지원되지 않음</td>
								<td class="no">지원되지 않음</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list">
					<p>CSS3 와 HTML5 기능들의 브라우저 지원에 관해 자세한 것은 <a href="https://caniuse.com/" target="_blank" style="color: #1155cc;">여기</a> 을 방문하여 확인하세요.</p>
				</div>

			</div>
		</main>

	</div>
	
	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>
</body>
</html>

<? include_once('../footer.php'); ?>
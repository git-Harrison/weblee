<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="display,flex,display:flex,css,웹퍼블리셔,퍼블리셔,웹표준,웹접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
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
	<body class="sub css flex">

	<? include_once('../header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>FLEX (Flexible Box)</h1> <!-- 제목 -->
				<p>CSS display:flex 속성 상세페이지</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="timetable">
			<div class="container">

				<div class="list flex">
					<p>
						대부분 사이트는 전체 레이아웃이 수직 구성이며 ‘위-아래’로 스크롤 하여 사용합니다.<br>
						레이아웃을 구성할 때 가장 많이 사용하는 요소(Elements)들이 기본적으로 블록(Block) 개념으로 표시(Display)되며 이는 뷰(View)에 수직(위에서 아래로)으로 쌓이기 때문에 수직 구성은 상대적으로 쉽게 만들 수 있습니다.<br>
						하지만 수평(왼쪽에서 오른쪽으로) 구성의 경우는 상황이 조금 다릅니다.
						<br><br>
						문제는 수평 구조를 만드는 속성이 명확하지 않았기 때문인데, 그래서 많은 경우 <span class="tag">&lsaquo;table&rsaquo;</span>나 <span class="style">float</span> 혹은 <span class="style">inline-block</span> 등의 도움을 받았습니다.<br>
						하지만 이러한 방법들은 다양한 문제(Clear, White space 등, 해결은 가능하지만..)를 가지고 있기 때문에 결국 수평 레이아웃 구성의 차선책일 뿐이며,<br>이제 우리는 Flex(Flexible Box)라는 명확한 개념(속성들)으로 레이아웃을 쉽게 구성할 수 있습니다.
					</p>
					<div class="ps">Tip. 위에서 쉬운 수평 구성을 얘기했지만 Flex는 쉬운 수직 구성도 가능합니다.</div>
				</div>

				<div class="list flex">
					<p>시작하기에 앞서 간단한 얘제를 살펴봅시다.<br>
					float 속성을 이용한 수평 구성의 경우 다음과 같이 스타일을 작성할 수 있습니다.</p>
				</div>

<pre class="flex">
<code>
<<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/div></span>
<<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/div></span>
<<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/div></span>
<<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"clear-element"</span>><<span class="pre_open">div></span>

</code>
</pre>

<pre class="flex">
<code>
.box {
&nbsp;&nbsp;&nbsp;float: left;
}

.clear-element {
&nbsp;&nbsp;&nbsp;clear: both; /* or left */
}
</code>
</pre>

			</div>
		</main>

	<? include_once('../footer.php'); ?>

	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>
</body>
</html>
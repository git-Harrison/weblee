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
<body class="sub html" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	
	<? include_once('../header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>EMMET</h1> <!-- 제목 -->
				<p>Emmet 레퍼런스(reference)</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="html">
			<div class="container">

				<div class="list">
					<h2>Emmet</h2>
					<p>
						<span>Emmet은 HTML,CSS의 자동완성 기능을 통해 작업 생산성을 향상시키는 기능입니다.</span>
						<a href="https://docs.emmet.io/cheat-sheet/" target="_blank">( Emmet 바로가기 )</a>
					</p>
				</div>

				<div class="list">
					<h2>Emmet의 문법</h2>
					<table>
						<thead>
							<tr>
								<th>문법</th>
								<th>예제</th>
								<th>설명</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>&gt;</code></td>
								<td>div&gt;ul&gt;lu</td>
								<td>여러개의 요소를 한번에 만들때 사용합니다.(child)</td>
							</tr>
							<tr>
								<td><code>+</code></td>
								<td>div+p</td>
								<td>형제 요소를 한번에 만들때 사용합니다.(sibling)</td>
							</tr>
							<tr>
								<td><code>^</code></td>
								<td>div>p^span</td>
								<td>부모 요소를 추가하여 만들때 사용합니다.(Climb-up)</td>
							</tr>
							<tr>
								<td><code>()</code></td>
								<td>(ul>li>a)+div</td>
								<td>그룹화하여 순서를 정할 때 사용합니다.(Grouping)</td>
							</tr>
							<tr>
								<td><code>*</code></td>
								<td>div>ul>li*5</td>
								<td>원하는 개수를 설정할 때 사용합니다.(Multiplickation)</td>
							</tr>
							<tr>
								<td><code>$</code></td>
								<td>div>lu>lu.img$*5</td>
								<td>넘버를 순차적으로 적용할 때 사용합니다.(Numbering)</td>
							</tr>
							<tr>
								<td><code>#</code>,<code>.</code></td>
								<td>#wrap,div</td>
								<td>아이디와, 클래스 속성 설정 할 때 사용합니다.</td>
							</tr>
							<tr>
								<td><code>[]</code></td>
								<td>td[rowspan="2"]</td>
								<td>요소의 속성 값을 설정 할 때 사용합니다.</td>
							</tr>
							<tr>
								<td><code>{}</code></td>
								<td>ul>li{header}</td>
								<td>텍스트 요소를 추가 할 때 사용합니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list pre">
					<h2>div>ul>li</h2>

<pre class="prettyprint">
	&lt;div&gt;
	    &lt;ul&gt;
	        &lt;li&gt;&lt;/li&gt;
	    &lt;/ul&gt;
	&lt;/div&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>! or html:5</h2>

<pre class="prettyprint">
	&lt;!DOCTYPE html&gt;
	&lt;html lang="en"&gt;
	&lt;head&gt;
	    &lt;meta charset="UTF-8"&gt;
	    &lt;title&gt;Document&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
	    
	&lt;/body&gt;
	&lt;/html&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>div>ul>li</h2>

<pre class="prettyprint">
	&lt;div&gt;
	    &lt;ul&gt;
	        &lt;li&gt;&lt;/li&gt;
	    &lt;/ul&gt;
	&lt;/div&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>link</h2>

<pre class="prettyprint">
	&lt;link rel="stylesheet" href=""&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>div+p+div</h2>

<pre class="prettyprint">
	&lt;div&gt;&lt;/div&gt;
	&lt;p&gt;&lt;/p&gt;
	&lt;div&gt;&lt;/div&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>div>ul>li*4^^p^div</h2>

<pre class="prettyprint">
	&lt;div&gt;
	    &lt;ul&gt;
	        &lt;li&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;/li&gt;
	    &lt;/ul&gt;
	&lt;/div&gt;
	&lt;p&gt;&lt;/p&gt;
	&lt;div&gt;&lt;/div&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>#wrap>#header+#content+#footer</h2>

<pre class="prettyprint">
	&lt;div id="wrap"&gt;
	    &lt;div id="header"&gt;&lt;/div&gt;
	    &lt;div id="content"&gt;&lt;/div&gt;
	    &lt;div id="footer"&gt;&lt;/div&gt;
	&lt;/div&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>#link>a[#]*10</h2>

<pre class="prettyprint">
	&lt;div id="link"&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	    &lt;a href="#"&gt;&lt;/a&gt;
	&lt;/div&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>ul[id="ul" class="ul"]>li*8</h2>

<pre class="prettyprint">
	&lt;ul id="ul" class="ul"&gt;
	    &lt;li&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;/li&gt;
	&lt;/ul&gt;
</pre>

				</div>

				<div class="list pre">
					<h2>div>ul>li>a[#]{글씨}</h2>

<pre class="prettyprint">
	&lt;div&gt;
	    &lt;ul&gt;
	        &lt;li&gt;&lt;a href="#"&gt;글씨&lt;/a&gt;&lt;/li&gt;
	    &lt;/ul&gt;
	&lt;/div&gt;
</pre>
				
				</div>

				<div class="list pre">
					<h2>#list>ul>.link$*10>a[#]+{link$}</h2>

<pre class="prettyprint">
	 &lt;div id="list"&gt;
	     &lt;ul&gt;
	         &lt;li class="link1"&gt;&lt;a href="#"&gt;&lt;/a&gt;link1&lt;/li&gt;
	         &lt;li class="link2"&gt;&lt;a href="#"&gt;&lt;/a&gt;link2&lt;/li&gt;
	         &lt;li class="link3"&gt;&lt;a href="#"&gt;&lt;/a&gt;link3&lt;/li&gt;
	         &lt;li class="link4"&gt;&lt;a href="#"&gt;&lt;/a&gt;link4&lt;/li&gt;
	         &lt;li class="link5"&gt;&lt;a href="#"&gt;&lt;/a&gt;link5&lt;/li&gt;
	         &lt;li class="link6"&gt;&lt;a href="#"&gt;&lt;/a&gt;link6&lt;/li&gt;
	         &lt;li class="link7"&gt;&lt;a href="#"&gt;&lt;/a&gt;link7&lt;/li&gt;
	         &lt;li class="link8"&gt;&lt;a href="#"&gt;&lt;/a&gt;link8&lt;/li&gt;
	         &lt;li class="link9"&gt;&lt;a href="#"&gt;&lt;/a&gt;link9&lt;/li&gt;
	         &lt;li class="link10"&gt;&lt;a href="#"&gt;&lt;/a&gt;link10&lt;/li&gt;
	     &lt;/ul&gt;
	 &lt;/div&gt;
</pre>
				
				</div>

			</div>
		</main>

	</div>

	<? include_once('../footer.php'); ?>

	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>

</body>
</html>
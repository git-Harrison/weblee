<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="display flex,display,flex,display:flex,css,웹퍼블리셔,퍼블리셔,웹표준,웹접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
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

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3684998563812597"
            crossorigin="anonymous"></script>
</head>
	<body class="sub css flex" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

	<? include_once('../header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>FLEX (Flexible Box)</h1> <!-- 제목 -->
				<p>CSS display:flex 속성 상세페이지</p> <!-- 부제목 -->
			</div>
		</header>

		<main>
			<div class="container">

				<div class="list flex">
					<p>
						대부분 사이트는 전체 레이아웃이 수직 구성이며 ‘위-아래’로 스크롤 하여 사용합니다.<br>
						레이아웃을 구성할 때 가장 많이 사용하는 요소(Elements)들이 기본적으로 블록(Block) 개념으로 표시(Display)되며 이는 뷰(View)에 수직(위에서 아래로)으로 쌓이기 때문에 수직 구성은 상대적으로 쉽게 만들 수 있습니다.<br>
						하지만 수평(왼쪽에서 오른쪽으로) 구성의 경우는 상황이 조금 다릅니다.
						<br><br>
						문제는 수평 구조를 만드는 속성이 명확하지 않았기 때문인데, 그래서 많은 경우 <span class="tag">&lsaquo;table&rsaquo;</span>나 <span style="color: #f2793d; font-weight: bold">float</span> 혹은 <span style="color: #f2793d; font-weight: bold">inline-block</span> 등의 도움을 받았습니다.<br>
						하지만 이러한 방법들은 다양한 문제(Clear, White space 등, 해결은 가능하지만..)를 가지고 있기 때문에 결국 수평 레이아웃 구성의 차선책일 뿐이며,<br>이제 우리는 Flex(Flexible Box)라는 명확한 개념(속성들)으로 레이아웃을 쉽게 구성할 수 있습니다.
					</p>
					<div class="ps">Tip. 위에서 쉬운 수평 구성을 얘기했지만 Flex는 쉬운 수직 구성도 가능합니다.</div>
				</div>

				<div class="list flex">
					<p>시작하기에 앞서 간단한 얘제를 살펴봅시다.<br>
					float 속성을 이용한 수평 구성의 경우 다음과 같이 스타일을 작성할 수 있습니다.</p>
				</div>

<pre class="flex" style="margin-top: 10px;">
<code><<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
<<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
<<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
<<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"clear-element"</span>><<span class="pre_open"><span class="pre_tag">div</span>></span></code>
<div class="flex_tag">HTML</div>
</pre>

<pre class="flex">
<code><span class="pre_class">.box</span> {
   <span class="css">float</span>: <span class="css_detail">left;</span>
}
<span class="pre_class">.clear-element</span> {
   <span class="css">clear</span>: <span class="css_detail">both;</span> <span class="code_ps">/* or left */</span>
}</code>
<div class="flex_tag css">CSS</div>
</pre>
			
				<div class="list flex">
					<p>자세한 설명은 생략하고, 위 방법은 보기엔 단순하지만 <span style="color: #f2793d; font-weight: bold">box</span>를 제외한 <span style="color: #f2793d; font-weight: bold">clear-element</span>라는 이름(class)의 다음(next) 요소도 있어야 하기 때문에 실제 사용엔 매우 불편하며 명확하지 않은 방법으로써 많은 경우 아래 방식을 사용합니다.</p>
				</div>

<pre class="flex" style="margin-top: 10px;">
<code><<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"clearfix"</span>></span>
   <<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
   <<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
   <<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
<<span class="pre_open">/<span class="pre_tag">div</span>></code>
<div class="flex_tag">HTML</div>
</pre>

<pre class="flex">
<code><span class="code_ps">/* IE 핵이나 기타 방식을 제외하고 가장 원리에 충실한 방법 */</span>
<span class="pre_class">.clearfix</span>::after {
   <span class="css">content</span>: <span class="css_detail">"";</span>
   <span class="css">clear</span>: <span class="css_detail">both;</span>
   <span class="css">display</span>: <span class="css_detail">block;</span>
}
<span class="pre_class">.box</span> {
   <span class="css">float</span>: <span class="css_detail">left;</span> 
}
</code>
<div class="flex_tag css">CSS</div>
</pre>	

				<div class="list flex">
					<p>예제를 보면 수평이 될 요소들에 직접! <span style="color: #f2793d; font-weight: bold">float</span>를 적용하고 그 요소들의 Container(부모 요소)에 미리 설정한 <span style="color: #f2793d; font-weight: bold">clearfix</span>를 적용합니다.<br>
						그러면 Flexible Box(이하 Flex)는 어떻게 작성할 수 있을까요?<br>
						아주 간단합니다.
					</p>
				</div>

<pre class="flex" style="margin-top: 10px;">
<code><<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box-container"</span>></span>
   <<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
   <<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
   <<span class="pre_tag">div</span> <span class="pre_class">class=</span><span class="pre_classname">"box"</span>><<span class="pre_open">/<span class="pre_tag">div</span>></span>
<<span class="pre_open">/<span class="pre_tag">div</span>></code>
<div class="flex_tag">HTML</div>
</pre>

<pre class="flex">
<code><span class="code_ps">/* IE 핵이나 기타 방식을 제외하고 가장 원리에 충실한 방법 */</span>
<span class="pre_class">.box-container</span> {
   <span class="css">display</span>: <span class="css_detail">flex;</span>
}
</code>
<div class="flex_tag css">CSS</div>
</pre>	
				
				<div class="list flex">
					<p>Flex는 수평이 될 요소들의 Container( <span style="color: #f2793d; font-weight: bold">box-container</span> )에 <span style="color: #f2793d; font-weight: bold">display: flex;</span>를 적용합니다.<br>(세부 속성이 필요하지 않은 경우도 많기 때문에 상당히 쉽고 빠르게 수평 요소를 구성할 수 있습니다.)
					</p>
				</div>

				<div class="list" style="margin-top: 80px;">
					<h2>CSS3 Flexible Box</h2>
					<p>Flex는 요소의 크기가 불분명하거나 동적인 경우에도, 각 요소를 정렬할 수 있는 효율적인 방법을 제공합니다.<br>
						우선 Flex는 2개의 개념으로 나뉩니다.<br>
						첫 번째는 Container 두 번째는 Items 입니다.<br>
						위에서 살펴본 바와 같이 Container는 Items를 감싸는 부모 요소이며, 각 Item을 정렬하기 위해선 Container가 필수입니다.<br><br>
						주의할 부분은 Container와 Items에 적용하는 속성이 구분되어 있다는 것 입니다.<br>
						Container에는 <span style="color: #f2793d; font-weight: bold">display</span>, <span style="color: #f2793d; font-weight: bold">flex-flow</span>, <span style="color: #f2793d; font-weight: bold">justify-content</span> 등의 속성을 사용할 수 있으며,
						Items에는 <span style="color: #f2793d; font-weight: bold">order</span>, <span style="color: #f2793d; font-weight: bold">flex</span>, <span style="color: #f2793d; font-weight: bold">align-self</span> 등의 속성을 사용할 수 있습니다.
					</p>
					<img src="../assets/images/flex1.jpg" alt="flex_img">
				</div>

				<div class="list" style="margin-top: 80px;">
					<h2>Flex Container</h2>
					<p>Flex Container를 위한 속성들은 다음과 같습니다.<br>
						주 축(main-axis)과 교차 축(cross-axis)의 개념은 뒤에서 살펴봅시다.
					</p>
					<table>
						<thead>
							<tr>
								<th>속성</th>
								<th>의미</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>display</td>
								<td>Flex Container를 정의</td>
							</tr>
							<tr>
								<td>flex-flow</td>
								<td><span style="color: #f2793d; font-weight: bold">flex-direction</span>와 <span style="color: #f2793d; font-weight: bold">flex-wrap</span>의 단축 속성</td>
							</tr>
							<tr>
								<td>flex-direction</td>
								<td>Flex Items의 주 축(main-axis)을 설정</td>
							</tr>
							<tr>
								<td>flex-wrap</td>
								<td>Flex Items의 여러 줄 묶음(줄 바꿈) 설정</td>
							</tr>
							<tr>
								<td>justify-content</td>
								<td>주 축(main-axis)의 정렬 방법을 설정</td>
							</tr>
							<tr>
								<td>align-content</td>
								<td>교차 축(cross-axis)의 정렬 방법을 설정(2줄 이상)</td>
							</tr>
							<tr>
								<td>align-items</td>
								<td>교차 축(cross-axis)에서 Items의 정렬 방법을 설정(1줄)</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list" style="margin-top: 80px;">
					<h2>Flex Container</h2>
					<p>
						<span style="color: #f2793d; font-weight: bold">display</span> 속성으로 Flex Container를 정의합니다.<br>
						보통 요소의 표시 방법을 <span style="color: #f2793d; font-weight: bold">display: block;</span>, <span style="color: #f2793d; font-weight: bold">display: inline-block;</span> 혹은 <span style="color: #f2793d; font-weight: bold">display: none;</span> 같이 사용하는 경우가 많죠.<br>
						같은 요소의 표시 방법으로 Block이나 Inline이 아닌 Flex( <span style="color: #f2793d; font-weight: bold">display: flex</span>, <span style="color: #f2793d; font-weight: bold">display: inline-flex</span> )로 정의합니다.
					</p>
				</div>

				<div class="list">
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>flex</td>
								<td>Block 특성의 Flex Container를 정의</td>
								<td></td>
							</tr>
							<tr>
								<td>inline-flex</td>
								<td>Inline 특성의 Flex Container를 정의</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list">
					<p><span style="color: #f2793d; font-weight: bold">flex</span>와 <span style="color: #f2793d; font-weight: bold">inline-flex</span>는 차이는 단순합니다.<br>
						<span style="color: #f2793d; font-weight: bold">display: flex</span>로 지정된 Flex Container는 Block 요소와 같은 성향(수직 쌓임)을 가지며,<br>
						<span style="color: #f2793d; font-weight: bold">display: inline-flex</span>로 지정된 Flex Container는 Inline(Inline Block) 요소와 같은 성향(수평 쌓임)을 가집니다.
						<br>
						<br>
						여기서 말하는 수직과 수평 쌓임은 Items가 아니라 Container라는 것에 주의합시다.<br>두 값의 차이는 내부에 Items에는 영향을 주지 않습니다.
					</p>
					<img src="../assets/images/flex2.jpg" alt="flex_img">
				</div>

				<div class="list">
					<h2>flex-flow</h2>
					<p>이 속성은 단축 속성으로 Flex Items의 주 축(main-axis)을 설정하고 Items의 여러 줄 묶음(줄 바꿈)도 설정합니다.</p>
				</div>

<pre class="flex">
<code><span class="code_ps">flex-flow: 주축 여러줄묶음;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
</pre>

<pre class="flex">
<code><span class="pre_class">.flex-container</span> {
   <span class="css">flex-flow</span>: <span class="css_detail">row-reverse wrap;</span>
}
</code>
<div class="flex_tag css">CSS</div>
</pre>	
				
				<div class="list">
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>flex-direction</td>
								<td>Items의 주 축(main-axis)을 설정</td>
								<td><code>row</code></td>
							</tr>
							<tr>
								<td>flex-wrap</td>
								<td>Items의 여러 줄 묶음(줄 바꿈) 설정</td>
								<td><code>nowrap</code></td>
							</tr>
						</tbody>
					</table>
					<p style="margin-top: 20px;">개별 속성을 알아봅시다.</p>
					<h4 style="background-color: #fff5e4; padding: 16px; margin-top: 20px; font-weight: bold; font-size: 22px;"> - flex-direction</h4>
					<p>Items의 주 축(main-axis)을 설정합니다.</p>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>row</td>
								<td>Itmes를 수평축(왼쪽에서 오른쪽으로)으로 표시</td>
								<td><code>row</code></td>
							</tr>
							<tr>
								<td>row-reverse</td>
								<td>Items를 <code>row</code>의 반대 축으로 표시</td>
								<td></td>
							</tr>
							<tr>
								<td>column</td>
								<td>Items를 수직축(위에서 아래로)으로 표시</td>
								<td></td>
							</tr>
							<tr>
								<td>column-reverse</td>
								<td>Items를 <code>column</code>의 반대 축으로 표시</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

<pre class="flex">
<code><span class="code_ps">flex-direction: 주축;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
<img src="../assets/images/flex3.jpg" alt="flex_img">
</pre>
				<div class="list">
					
				</div>

				<div class="list">
					<h4 style="background-color: #fff5e4; padding: 16px; font-weight: bold; font-size: 22px;"> - 주 축(main-axis)과 교차 축(cross-axis)</h4>
					<p>
						위에서 언급했었던 주 축(main-axis)과 교차 축(cross-axis)의 개념은 다음과 같습니다.<br>
						값 <span style="color: #f2793d; font-weight: bold">row</span>는 Items를 수평축으로 표시하므로 이때는 주 축이 수평이며 교차 축은 수직이 됩니다.<br>
						반대로 값 <span style="color: #f2793d; font-weight: bold">column</span>은 Items를 수직축으로 표시하므로 주 축은 수직이며 교차 축은 수평이 됩니다.<br>
						즉, 방향(수평, 수직)에 따라 주 축과 교차 축이 달라집니다.
					</p>
					<img src="../assets/images/flex4.jpg" alt="flex_img">
				</div>

				<div class="list">
					
				</div>

				<div class="list">
					<h4 style="background-color: #fff5e4; padding: 16px; font-weight: bold; font-size: 22px;"> - 시작점(flex-start)과 끝점(flex-end)</h4>
					<p>
						시작점(flex-start)과 끝점(flex-end)이라는 개념도 있습니다.<br>
						이는 주 축이나 교차 축의 시작하는 지점과 끝나는 지점을 지칭합니다.<br>
						역시 방향에 따라 시작점과 끝점이 달라집니다.
					</p>
					<img src="../assets/images/flex5.jpg" alt="flex_img">
					<img src="../assets/images/flex6.jpg" alt="flex_img">
					<p>뒤에서 언급할 속성 중 값으로 flex-start와 flex-end를 사용하는데 이는 방향에 맞는 그 시작점과 끝점을 의미합니다.</p>
				</div>

				<div class="list">
					<h4 style="background-color: #fff5e4; padding: 16px; font-weight: bold; font-size: 22px;"> - flex-wrap</h4>
					<p>Items의 여러 줄 묶음(줄 바꿈)을 설정합니다.</p>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>nowrap</td>
								<td>모든 Itmes를 여러 줄로 묶지 않음(한 줄에 표시)</td>
								<td><code>nowrap</code></td>
							</tr>
							<tr>
								<td>wrap</td>
								<td>Items를 여러 줄로 묶음</td>
								<td></td>
							</tr>
							<tr>
								<td>wrap-reverse</td>
								<td>Items를 <code>wrap</code>의 역 방향으로 여러 줄로 묶음</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

<pre class="flex">
<code><span class="code_ps">flex-wrap: 여러줄묶음;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
<img src="../assets/images/flex3.jpg" alt="flex_img">
</pre>
				<div class="list">
					<p>
						기본적으로 Items는 한 줄에서만 표시되고 줄 바꿈 되지 않습니다.<br>
						이는 지정된 크기(주 축에 따라 <span style="color: #f2793d; font-weight: bold">width</span>나 <span style="color: #f2793d; font-weight: bold">height</span> )를 무시하고 한 줄 안에서만 가변합니다.<br>
						Items를 줄 바꿈 하려면 값으로 <span style="color: #f2793d; font-weight: bold">wrap</span>을 사용해야 합니다.
					</p>
				</div>

				<div class="list">
					<h2>justify-content</h2>
					<p>주 축(main-axis)의 정렬 방법을 설정합니다.</p>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>flex-start</td>
								<td>Items를 시작점(flex-start)으로 정렬</td>
								<td><code>flex-start</code></td>
							</tr>
							<tr>
								<td>flex-end</td>
								<td>Items를 끝점(flex-end)으로 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>center</td>
								<td>Items를 가운데 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>space-between</td>
								<td>시작 Item은 시작점에, 마지막 Item은 끝점에 정렬되고 나머지 Items는 사이에 고르게 정렬됨</td>
								<td></td>
							</tr>
							<tr>
								<td>space-around</td>
								<td>Items를 균등한 여백을 포함하여 정렬</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

<pre class="flex">
<code><span class="code_ps">justify-content: 정렬방법;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
<img src="../assets/images/flex7.jpg" alt="flex_img">
</pre>
				<div class="list">
					<h2>align-content</h2>
					<p>교차 축(cross-axis)의 정렬 방법을 설정합니다.<br>주의할 점은 flex-wrap 속성을 통해 Items가 여러 줄(2줄 이상)이고 여백이 있을 경우만 사용할 수 있습니다.</p>
					<div class="ps">Items가 한 줄일 경우 align-items 속성을 사용하세요.</div>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>stretch</td>
								<td>Container의 교차 축을 채우기 위해 Items를 늘림</td>
								<td><code>stretch</code></td>
							</tr>
							<tr>
								<td>flex-start</td>
								<td>Items를 시작점(flex-start)으로 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>flex-end</td>
								<td>Items를 끝점(flex-end)으로 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>center</td>
								<td>Items를 가운데 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>space-between</td>
								<td>시작 Item은 시작점에, 마지막 Item은 끝점에 정렬되고 나머지 Items는 사이에 고르게 정렬됨</td>
								<td></td>
							</tr>
							<tr>
								<td>space-around</td>
								<td>Items를 균등한 여백을 포함하여 정렬</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

<pre class="flex">
<code><span class="code_ps">align-content: 정렬방법;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
</pre>
				<div class="list">
					<p>
						값 <span style="color: #f2793d; font-weight: bold">stretch</span>는 교차 축에 해당하는 너비(속성 <span style="color: #f2793d; font-weight: bold">width</span> 혹은 <span style="color: #f2793d; font-weight: bold">height</span> )가 값이 <span style="color: #f2793d; font-weight: bold">auto</span>(기본값)일 경우 교차 축을 채우기 위해 자동으로 늘어납니다.
					</p>
					<img src="../assets/images/flex8.jpg" alt="flex_img">
				</div>

				<div class="list">
					<h2>align-items</h2>
					<p>
						교차 축(cross-axis)에서 Items의 정렬 방법을 설정합니다.<br>
						Items가 한 줄일 경우 많이 사용합니다.<br><br>

						주의할 점은 Items가 <span style="color: #f2793d; font-weight: bold">flex-wrap</span>을 통해 여러 줄(2줄 이상)일 경우에는 <span style="color: #f2793d; font-weight: bold">align-content</span> 속성이 우선합니다.<br>
						따라서 <span style="color: #f2793d; font-weight: bold">align-items</span>를 사용하려면 <span style="color: #f2793d; font-weight: bold">align-content</span> 속성을 기본값( <span style="color: #f2793d; font-weight: bold">stretch</span> )으로 설정해야 합니다.
					</p>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>stretch</td>
								<td>Container의 교차 축을 채우기 위해 Items를 늘림</td>
								<td><code>stretch</code></td>
							</tr>
							<tr>
								<td>flex-start</td>
								<td>Items를 각 줄의 시작점(flex-start)으로 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>flex-end</td>
								<td>Items를 각 줄의 끝점(flex-end)으로 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>center</td>
								<td>Items를 가운데 정렬</td>
								<td></td>
							</tr>
							<tr>
								<td>baseline</td>
								<td>Items를 문자 기준선에 정렬</td>
								<td></td>
							</tr>
						</tbody>
					</table>		
				</div>

<pre class="flex">
<code><span class="code_ps">align-items: 정렬방법;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
<img src="../assets/images/flex9.jpg" alt="flex_img">
</pre>
				
				<div class="list">
					<h2>Flex Items</h2>
					<p>Flex Items를 위한 속성들은 다음과 같습니다.</p>
					<table>
						<thead>
							<tr>
								<th>속성</th>
								<th>의미</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>order</td>
								<td>Flex Item의 순서를 설정</td>
							</tr>
							<tr>
								<td>flex</td>
								<td><code>flex-grow</code>, <code>flex-shrink</code>, <code>flex-basis</code>의 단축 속성</td>
							</tr>
							<tr>
								<td>flex-grow</td>
								<td>Flex Item의 증가 너비 비율을 설정</td>
							</tr>
							<tr>
								<td>flex-shrink</td>
								<td>Flex Item의 감소 너비 비율을 설정</td>
							</tr>
							<tr>
								<td>flex-basis</td>
								<td>Flex Item의 (공간 배분 전) 기본 너비 설정</td>
							</tr>
							<tr>
								<td>align-self</td>
								<td>교차 축(cross-axis)에서 Item의 정렬 방법을 설정</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list">
					<h2>order</h2>
					<p>
						Item의 순서를 설정합니다.<br>
						Item에 숫자를 지정하고 숫자가 클수록 순서가 밀립니다.<br>
						음수가 허용됩니다.
					</p>
					<div class="ps">HTML 구조와 상관없이 순서를 변경할 수 있기 때문에 유용합니다.</div>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>숫자</td>
								<td>Item의 순서를 설정</td>
								<td><code>0</code></td>
							</tr>
						</tbody>
					</table>
				</div>

<pre class="flex">
<code><span class="code_ps">order: 순서;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
<img src="../assets/images/flex10.jpg" alt="flex_img">
</pre>

				<div class="list">
					<h2>flex</h2>
					<p>Item의 너비(증가, 감소, 기본)를 설정하는 단축 속성입니다.</p>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>flex-grow</td>
								<td>Item의 증가 너비 비율을 설정</td>
								<td><code>0</code></td>
							</tr>
							<tr>
								<td>flex-shrink</td>
								<td>Item의 감소 너비 비율을 설정</td>
								<td><code>1</code></td>
							</tr>
							<tr>
								<td>flex-basis</td>
								<td>Item의 (공간 배분 전) 기본 너비 설정</td>
								<td><code>auto</code></td>
							</tr>
						</tbody>
					</table>
				</div>

<pre class="flex">
<code><span class="code_ps">flex: 증가너비 감소너비 기본너비;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
</pre>

<pre class="flex">
<code><span class="pre_class">.item</span> {
   <span class="css">flex</span>: <span class="css_detail">1 1 20px;</span>   <span class="code_ps">/* 증가너비 감소너비 기본너비 */</span>
   <span class="css">flex</span>: <span class="css_detail">1 1;</span>   <span class="code_ps">/* 증가너비 감소너비 */</span>
   <span class="css">flex</span>: <span class="css_detail">1 20px;</span>   <span class="code_ps">/* 증가너비 기본너비 (단위를 사용하면 flex-basis가 적용됩니다) */</span>
}
</code>
<div class="flex_tag css">CSS</div>
</pre>

				<div class="list">
					<p>
						<span style="color: #f2793d; font-weight: bold">flex-grow</span>를 제외한 개별 속성은 생략할 수 있습니다.<br>
						만약 <span style="color: #f2793d; font-weight: bold">flex: 1;</span>로 작성하면 <span style="color: #f2793d; font-weight: bold">flex-grow: 1;</span>과 같습니다.<br>
						그러면 나머지 속성은 생략했으니 기본값이 적용되어 <span style="color: #f2793d; font-weight: bold">flex-shrink: 1;</span>, <span style="color: #f2793d; font-weight: bold">flex-basis: auto;</span>가 되겠죠?<br>
						즉 <span style="color: #f2793d; font-weight: bold">flex: 1;</span> 혹은 <span style="color: #f2793d; font-weight: bold">flex: 1 1;</span>은 <span style="color: #f2793d; font-weight: bold">flex: 1 1 auto;</span>와 같다고 볼 수 있습니다만 그렇지 않습니다.<br>
						<br>
						<span style="color: #f2793d; font-weight: bold">flex-basis</span>의 기본값은 <span style="color: #f2793d; font-weight: bold">auto</span>입니다만 단축 속성인 <span style="color: #f2793d; font-weight: bold">flex</span>에서 그 값을 생략할 경우 0이 적용됩니다.<br>
						다시 정리하면 <span style="color: #f2793d; font-weight: bold">flex: 1</span>; 혹은 <span style="color: #f2793d; font-weight: bold">flex: 1 1;</span>은 <span style="color: #f2793d; font-weight: bold">flex: 1 1 0;</span>이 된다는 것입니다.<br>
						이 부분을 기억하지 않으면 엉뚱한 결과가 나올 수 있으니 주의합시다!
					</p>
					<h4 style="background-color: #fff5e4; padding: 16px; font-weight: bold; font-size: 22px;"> - flex-grow</h4>
					<p>
						Item의 증가 너비 비율을 설정합니다.<br>
						숫자가 크면 더 많은 너비를 가집니다.<br>
						Item이 가변 너비가 아니거나, 값이 0일 경우 효과가 없습니다.
					</p>
					<table>
						<thead>
							<tr>
								<th>값</th>
								<th>의미</th>
								<th>기본값</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>숫자</td>
								<td>Item의 증가 너비 비율을 설정</td>
								<td><code>0</code></td>
							</tr>
						</tbody>
					</table>
				</div>

<pre class="flex">
<code><span class="code_ps">flex-grow: 증가너비;</span></code>
<div class="flex_tag text">PLAINTEXT</div>
</pre>

			</div>
		</main>

	<? include_once('../footer.php'); ?>

	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>
</body>
</html>
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
	<link rel=" shortcut icon" href="/assets/images/favicon.png">

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

				<div class="list">
					<h2>블록 요소/인라인 요소(Block/Inline)</h2>
					<p>블록 요소는 박스, 인라인 요소는 텍스트를 의미합니다.</p>
					<ul>
						<li>블록 엘리먼트(Block Element)
							<ul>
								<li>독립된 박스 영영으로, 한 줄에 하나에 블록요소만 표현 할 수 있습니다.</li>
								<li>블록요소에는 블록요소 인라인요소를 포함 할 수 있습니다.</li>
							    <li>&lt;div&gt;,&lt;p&gt;,&lt;h1&gt;~&lt;h6&gt;,&lt;ul&gt;,&lt;li&gt;</li>
							</ul>
						</li>
						<li>인라인 엘리먼트(Inline Element)
							<ul>
								<li>독립된 텍스트 영역으로 , 한 줄에 여러개의 인라인요소를 표현 할 수 있습니다.</li>
								<li>인라인요소에는 블록요소가 포함 될 수 없지만, 인라인요소는 포함 할 수 있습니다.</li>
								<li>&lt;span&gt;,&lt;a&gt;,&lt;strong&gt;,&lt;em&gt;,&lt;img&gt;</li>
							</ul>
						</li>
					</ul>
					<div style="max-width: 500px;">
						<img src="http://i1.daumcdn.net/img-contents/darum/images/guide/1_02_02.jpg" alt="블록요소/인라인요소이미지">
					</div>
				</div>

				<div class="list">
					<h2>DTD (Document type Declaration) 선언</h2>
					<p>웹 페이지를 제작하기 위해서는 웹 문서 형식 유형을 설정하여야 합니다.</p>
					<ul>
						<li>독타입을 설정하지 않거나 잘못 설정하면 브라우저에 따라 화면이 다르게 나오거나 렌더링이 달라지기 떄문에 독타입을 설정해야 합니다</li>
					</ul>
				
<pre>
&lt;!-- HTML5 --&gt;
&lt;!DOCTYPE HTML&gt;
&lt;!-- HTML 4.01 Strict --&gt;
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"&gt;
&lt;!-- HTML 4.01 Transitional --&gt;
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;
&lt;!-- HTML 4.01 Frameset --&gt;
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"&gt;
&lt;!-- XHTML 1.0 Strict --&gt;
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;!-- XHTML 1.0 Transitional --&gt;
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
&lt;!-- XHTML 1.0 Frameset --&gt;
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd"&gt;
</pre>
				</div>

				<div class="list">
					<h2>언어 속성 설정</h2>
					<p>컨텐츠의 언어를 인식하고 언어 정보를 추출하는데 사용합니다. 미리 언어를 설정하면 효율성이 더 좋아집니다.</p>
<pre>
&lt;!-- HTML5 --&gt;
&lt;html lang="ko"&gt;
&lt;!-- HTML4 --&gt;
&lt;html lang="ko" xml:lang="ko" xmlns= "http://www.w3.org/1999/xhtml"&gt;
</pre>
				</div>


				<div class="list">
					<h2>문서 정보 설정</h2>
					<p>웹 문서의 필요한 정보를 제공합니다.</p>
<pre>
&lt;!--html5 언어설정--&gt;
&lt;meta charset="UTF-8"&gt;
&lt;!--html4 언어설정--&gt;
&lt;meta http-equiv="Content-Language" content="text/html; charset=UTF-8"&gt;
&lt;!--웹 문서에 대한 제작자 설정--&gt;
&lt;meta name="author" content="kimkyoungmin"&gt;
&lt;!--웹 문서에 대한 설명 설정--&gt;
&lt;meta name="description" content="사이트 설명"&gt;
&lt;!--웹 문서에 대한 키워드 설정--&gt;
&lt;meta name="keywords" content="키워드"&gt;
</pre>
				</div>

				<br>
				<br>

				<div class="list">
					<h2>HTML Description</h2>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;html&gt;</span></h2>
					<p>HTML 문서의 최상위 루트를 나타냅니다.</p>
					<ul>
						<li>HT = HyperText : 문서와 문서를 연결</li>
						<li>M = Markup : 마크업, 태그</li>
						<li>L = Language : 언어</li>
						<li>HTML이란? 문서와 문서로 연결된 태그 언어를 말합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;head&gt;</span></h2>
					<p>HTML 문서의 헤더 요소를 정의하는 영역입니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;body&gt;</span></h2>
					<p>HTML 문서의 본문에 헤당하는 콘텐츠를 정의하는 영역입니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;meta&gt;</span></h2>
					<p>HTML 문서에 대한 정보를 제공합니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;link&gt;</span></h2>
					<p>HTML 문서를 외부 파일과 연결합니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;title&gt;</span></h2>
					<p>HTML 문서의 제목을 설정합니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;h1&gt;~&lt;h6&gt;</span></h2>
					<p>HTML 섹션, 문단의 제목을 나타내며 숫자가 작을수록 글자의 크기가 커집니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;p&gt;</span></h2>
					<p>paragraph의 약자로, 하나의 문단을 만들 때 쓰입니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;ul&gt;</span></h2>
					<p>unordered list의 약자로, 순서가 필요없는 목록을 만듭니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;li&gt;</span></h2>
					<p>list의 약자로, 목록을 만드는 태그이며, 단독으로 쓰이지 않습니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;a&gt;</span></h2>
					<p>하이퍼링크를 걸어주는 태그입니다.</p>
					<ul>
						<li>href: 링크로 이동하는 경로를 설정합니다.</li>
						<li>target: 새로운 브라우저를 설정합니다.
							<ul>
								<li>_self: 현재 페이지 (기본값)</li>
								<li><span class="tag">&lt;a target="_blank"&gt;</span><span class="tag">&lt;/a&gt;</span>: 링크 클릭시 새로운 브라우저 창으로 설정합니다.</li>
								<li><span class="tag">&lt;a target="_parent"&gt;</span><span class="tag">&lt;/a&gt;</span>: 현재 부라우저의 부모 브라우저 창으로 설정합니다. 부모가 없는 경우 _self와 동일합니다.</li>
								<li><span class="tag">&lt;a target="_top"&gt;</span><span class="tag">&lt;/a&gt;</span>: 최상위 브라우저 창에서 설정합니다.</li>
								<li><span class="tag">&lt;a target="_self"&gt;</span><span class="tag">&lt;/a&gt;</span>: 현재와 동일한 브라우저 창으로 설정합니다.</li>
							</ul>
						</li>
						<li>방문하지 않은 링크는 밑줄과 파란색으로 표시됩니다.</li>
						<li>방문한 링크는 밑줄과 보라색으로 표시됩니다.</li>
						<li>활성화된 링크는 밑줄과 빨간색으로 표시됩니다.</li>
						<li><span class="tag">&lt;a&gt; 태그는 예외적으로 HTML5에서 블록요소를 포함 할 수 있습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;strong&gt;</span></h2>
					<p>글자를 굵게 표시하여, 텍스트를 중요하게 보이고자 할때 사용합니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;em&gt;</span></h2>
					<p>텍스트를 강조하고자 할때 사용 합니다.</p>
				</div>


			</div>
		</main>

	</div>
	
</body>
</html>
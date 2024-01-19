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

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3684998563812597"
            crossorigin="anonymous"></script>

</head>
<body class="sub html" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

	<? include_once('../header.php'); ?>

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

				<div class="list">
					<h2><span class="tag">&lt;span&gt;</span></h2>
					<p><span class="tag">&lt;div&gt;</span><span class="tag">&lt;/div&gt;</span> 태그처럼 특별한 기능을 갖고있지 않고, CSS와 함께 쓰입니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;div&gt;</span></h2>
					<p>문단 서식에 관한 태그입니다. 스타일을 이용해서 크기를 잡지 않는다면 기본적으로 줄바꿈이 됩니다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;address&gt;</span></h2>
					<p>문서 나 문서의 작성자 / 소유자의 연락처 정보를 정의합니다.</p>
					<ul>
						<li>body : 문서에 대한 연락처 정보를 나타냅니다.</li>
						<li>article : 그 기사의 연락처 정보를 나타냅니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;hr&gt;</span></h2>
					<p>주제를 분리하기 위한 용도로 사용합니다.(닫는태그는 없음)</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;br&gt;</span></h2>
					<p>줄바꿈 할때 사용합니다. (닫는태그는 안써도 됨)</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;table&gt;</span></h2>
					<p>데이터를 담고 있는 표를 만들기 위한 목적</p>
					<ul>
						<li>colspan : 셀(가로줄)을 합치는 개수를 지정</li>
						<li>rowspan : 셀(세로줄)을 합치는 개수를 지정</li>
						<li>border : 테이블 경계선 굵기를 지정</li>
						<li>bgcolor : 배경색으로 지정</li>
						<li>bordercolor : 경계선 색깔 지정</li>
						<li>width : 너비를 지정(픽셀이나 %)</li>
						<li>height : 높이를 지정(픽셀이나 %)</li>
						<li>cellpadding : 셀과 경계선 사이의 여백</li>
						<li>cellspacing : 셀과 셀 사이의 여백</li>
						<li>align : 셀의 가로줄을 오른쪽,왼쪽,중앙 등으로 정렬</li>
						<li>valign : 셀의 세로줄의 위 중앙 아래를 정렬</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;input&gt;</span></h2>
					<p>사용자가 다양하게 폼 태그에 입력할 수 있는 공간을 만들어 줍니다.</p>
					<ul>
						<li>type : 태그 모양을 다양하게 변경할 수 있습니다. type에는 text, radio, checkbox, password, button, hidden, fileupload, submit, reset 등을 지정할 수 있습니다.</li>
						<li>name : 태그 이름을 지정합니다.</li>
						<li>maxlength : 해당 태그 최대 글자 수를 지정합니다.</li>
						<li>required : 해당 태그가 필수태그로 지정됩니다. 필수 태그를 입력하지 않고, submit 버튼을 누르면 에러메시지가 웹 브라우저에 출력됩니다. (HTML5 추가사항)</li>
						<li>autofocus : 웹 페이지가 로딩되자마자 이 속성을 지정한 태그로 포커스가 이동됩니다. (HTML5 추가사항)</li>
						<li>placeholder : 태그에 입력할 값에 대한 힌트를 줍니다. (HTML5 추가사항)</li>
						<li>pattern : 정규표현식을 사용하여 특정범위 내의 유효한 값을 입력받을 때 사용합니다. (HTML5 추가사항)</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;legend&gt;</span></h2>
					<p>fieldset 요소의 제목(LEGEND)을 표시한다. fieldset 요소를 이용하여 여러 개의 컨트롤들을 묶었으면 이 묶음이 어떤 성격 또는 용도인지 알려줄 필요가 있다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;fieldset&gt;</span></h2>
					<p>관련 있는 폼 필드 세트(form FIELD SET)를 표시한다. 폼 필드 세트는 폼 내에서 관련 컨트롤을 하나의 그룹으로 묶은 것을 말한다.</p>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;form&gt;</span></h2>
					<p>폼(FORM)의 범위를 표시한다. 폼은 사용자 입력을 위한 다양한 형식의 컨트롤(W3C는 입력필드, 버튼 등 폼을 구성하는 입력 요소를 컨트롤이라고 부름)로 구성되는 영역이며, 이 영역의 시작과 종료 지점은 form 요소에 의해 정의된다.</p>
					<ul>
						<li>action : 폼을 전송할 서버 쪽 스크립트 파일을 지정합니다.</li>
						<li>name : 폼을 식별하기 위한 이름을 지정합니다.</li>
						<li>accept-charset : 폼 전송에 사용할 문자 인코딩을 지정합니다.</li>
						<li>target : action에서 지정한 스크립트 파일을 현재 창이 아닌 다른 위치에 열도록 지정합니다.</li>
						<li>method : 폼을 서버에 전송할 http 메소드를 정합니다. (GET 또는 POST)</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;section&gt;</span></h2>
					<p>일반적으로 문서의 콘텐츠 섹션을 의미합니다.</p>
					<ul>
						<li>콘텐츠와 관련된 한 가지 주제 영역을 말합니다.</li>
						<li>section 요소는 문장이나 문서의 스타일링 요소가 아니기 때문에 편의나 영역을 위함이면 div 태그가 좋습니다.</li>
						<li>section 요소는 재목이 없는 경우는 섹션이라고 할 수 없기 때문에 제목을 제공해야 합니다.</li>
						<li>section 요소는 일반적인 주제가 아니라면 구체적인 요소(article, aside, nav)를 사용하는 것이 더 적절합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;article&gt;</span></h2>
					<p>콘텐츠의 독립적인 항목을 나타내는 콘텐츠를 의미합니다.</p>
					<ul>
						<li>article는 포럼,신문기사,잡지,블러그 항목, 게시판 글 등은 콘텐츠의 독립적인 항목을 나타냅니다.</li>
						<li>section은 하나의 주제를 나타낸다면, article은 주제를 묶은 독립적인 콘텐츠입니다.</li>
						<li>section 요소 안에는 article 요소를 쓸 수 있으며, article 요소안에도 section요소를 쓸 수 있습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;nav&gt;</span></h2>
					<p>페이지 내에서 이동 할 수 있는 네비게이션 링크 그룹입니다.</p>
					<ul>
						<li>nav는 문서의 핵심적인 페이지의 메뉴 및 서브메뉴에서 사용하고, 문서에서 주로 한 번만 사용 합니다.</li>
						<li>문서 안에 링크가 포함된 콘텐츠는 nav를 사용하지 않습니다.</li>
						<li>nav는 핵심적인 네비게이션에 사용해야 하므로, 푸터 내에 링크 그룹의 사용은 적절하지 않습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;main&gt;</span></h2>
					<p>웹 문서의 주요 콘텐츠 영역을 나타낼 때 사용합니다.</p>
					<ul>
						<li>main은 웹 페이지에서 한 번만 사용할 수 있으며, 접근성과 검색 영역에 노출을 향상시킵니다.</li>
						<li>article, aside, footer, header, nav를 하위 요소로 사용 할 수 있습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;aside&gt;</span></h2>
					<p>웹 문서의 메인 콘텐츠와 관련된 사이트 콘텐츠 영역을 나타냅니다.</p>
					<ul>
						<li>aside는 메인 콘텐츠와 관련된 사이드의 정보, 광고 등 부분적인 정보를 그룹화 할 때 사용합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;header&gt;</span></h2>
					<p>웹 문서의 헤더 영역을 나타냅니다.</p>
					<ul>
						<li>헤더에는 웹페이지에 대한 소개, 네비게이션 영역, 테이블 영역, 검색영역, 로고영역을 포함한 영역입니다.</li>
						<li>헤더에는 제목 태그가 포함 될 수 있으며, 필수 조건은 아닙니다.</li>
						<li>header는 섹션 콘텐츠가 아닌 그룹화하기 위한 요소이므로 section 요소를 포함 할 수 없습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;footer&gt;</span></h2>
					<p>웹 문서의 푸터 영역을 나타냅니다.</p>
					<ul>
						<li>footer는 저작권 정보, 회사정보, 관련링크, 주소, 바닥글, 사이트정보 등을 포함하는 콘텐츠 영역입니다.</li>
						<li>footer는 섹션 콘텐츠가 아닌 그룹을 나타내는 요소이며, section, article, aside, 등을 포함 할 수 있습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>html5에서 새로 생긴 태그</h2>
					<ul>
						<li>article : 문서의 기사를 정의</li>
						<li>aside : 페이지 내용을 제외하고 내용을 정의</li>
						<li>bdi : 다른 텍스트와는 다른 방향으로 포맷 할 수있는 텍스트의 일부를 정의</li>
						<li>details : 사용자가 보거나 숨길 수있는 추가 정보를 정의합니다</li>
						<li>dialog : 대화 상자 또는 창을 정의</li>
						<li>figcaption : A에 대한 자막을 정의 figure 요소</li>
						<li>figure : 등 그림, 도표, 사진, 코드 목록, 같은 자체에 포함 된 내용을 정의합니다</li>
						<li>footer : 문서 또는 섹션 바닥 글을 정의</li>
						<li>header : 문서 또는 섹션 헤더를 정의합니다</li>
						<li>main : 문서의 주요 내용을 정의</li>
						<li>mark : 표시 또는 텍스트를 강조 정의합니다</li>
						<li>menuitem : 사용자가 팝업 메뉴에서 호출 할 수있는 명령 / 메뉴 항목을 정의합니다</li>
						<li>meter : 공지 범위 스칼라 측정을 정의</li>
						<li>nav : 문서의 탐색 링크를 정의</li>
						<li>progress : 작업의 진행 상황을 정의</li>
						<li>rp : 지원하지 않는 브라우저에 표시 할 것을 정의 ruby 주석을</li>
						<li>rt : 문자에 대한 설명 / 발음을 정의합니다</li>
						<li>ruby : 정의 ruby 주석을 (for East Asian typography)</li>
						<li>section : 문서에 섹션을 정의합니다</li>
						<li>summary : 	A에 대한 눈에 띄는 제목을 정의 <details> 요소</li>
						<li>time : 날짜 / 시간을 정의</li>
						<li>datalist : 입력 제어를위한 미리 정의 된 옵션을 정의</li>
						<li>keygen : 키 쌍 생성기 필드를 정의 (for forms)</li>
						<li>output : 계산 결과를 정의</li>
					</ul>
				</div>

				<div class="list">
					<h2>html5에서 의미가 변한 속성 태그</h2>
					<ul>
						<li>HTML5의 DTD 선언:!DOCTYPE html</li>
						<li>HTML5의 인코딩 선언:meta charset="utf-8"</li>
						<li>hr - 원래 단순한 가로줄을 나타내는 태그 였으나, 페이지의 주제가 바뀔 때 내용을 분리시키는 의미가 HTML5에서 추가되었다.</li>
						<li>u - 양식상 일반적인 텍스트보다 돋보여야 할 때 쓴다. 예를 들어 철자가 틀린 단어나, 중국어로 번역된 고유 명사등이 있다. 별도의 CSS없이 쓰면 브라우저에서는 밑줄을 긋는 것이 기본값이다.</li>
						<li>s - 더이상 옳지 않은 내용을 나타내는 데에 쓴다. 별도의 CSS없이 쓰면 브라우저에서는 취소선을 긋는 것이 기본값이다. 더 적절한 시맨틱 태그가 있을 경우 그쪽을 쓴다.</li>
						<li>strong- HTML4에서는 강한 강조를 의미했지만, HTML5에서는 중요성으로 의미가 변경되었다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>html5에서 없어진 태그</h2>
					<ul>
						<li>basefont</li>
						<li>big</li>
						<li>center</li>
						<li>font</li>
						<li>s</li>
						<li>strike</li>
						<li>tt</li>
						<li>u</li>
						<li>frame</li>
						<li>framesets</li>
						<li>noframes</li>
						<li>acronym</li>
						<li>applet</li>
						<li>isindex</li>
						<li>dir</li>
					</ul>
				</div>

				<div class="list">
					<h2><span class="tag">&lt;table&gt;</span>속성</h2>
					<ul>
						<li>
							<strong>thead, tbody, tfoot</strong>
							<ul>
								여러개의 행을 하나의 그룹으로 묶어주는 엘리먼트 입니다. 테이블 안에서 이 3개의 태그는 사용이 제한이 있는데 thead와 tfoot는 한 테이블에서 하나만 작성을 할 수가 있습니다. 하지만 tbody의 경우는 여러번 사용해도 무방합니다. <br>	 header 의th 태그를 적용하면 글자가 bold체로 굵게 표시되고 가운데 정렬을 하게 됩니다.
							</ul>
						</li>
						<li>
							<strong>summary</strong>
							<ul>
								표의 목적이나, 음성, 점자등 보이지 않는 메디아 표현의 구조를 제공합니다. 해당 테이블의 내용이 뭔지를 축약적으로 나타낼 수 있습니다. 이미지 태그의 alt 속성과 같다고 할 수 있습니다.
							</ul>
						</li>
						<li>
							<strong>caption (닫는 태그 필요)</strong>
							<ul>
								테이블의 열이나 행 앞에 header나 caption을 넣어 줄때 사용합니다. caption태그는 반드시 table태그 블록에 포함 되어야 합니다. default 정렬방식은 중앙정렬 입니다.
								<li>
									속성
									<ul>① align = top, left, right, bottom
										<li>top : 행의 상단에 배치</li>
										<li>left : 문자열을 왼쪽에 정렬</li>
										<li>right : 문자열을 오른쪽에 정렬</li>
										<li>bottom : 행의 하단에 배치</li>
									</ul>
									<ul>② class : css의 class 선택자를 지정합니다.</ul>
									<ul>③ id : css의 id 선택자를 지정합니다.</ul>
									<ul>④ style : css스타일을 지정합니다.</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>colgroup (닫는 태그 선택적)</strong>
							<ul>
								표의 세로줄 그룹을 만들때 사용합니다. table요소내에서 caption뒤 thead 앞에 위치 해야 합니다.
								<li>
									속성
									<ul>① class : css의 class 선택자를 지정 합니다.</ul>
									<ul>② id : css의 id 선택자를 지정합니다.</ul>
									<ul>③ style : css 스타일을 지정합니다.(적용할 수 있는 스타일은 border, background, width 입니다.)</ul>
									<ul>④ span : 그룹화할 세로줄의 개수를 지정합니다.</ul>
									<ul>⑤ width : 세로줄 그룹의 너비를 지정합니다.</ul>
									<ul>⑥  align = top, left, right, bottom, center (ie에서만 적용됩니다. 구글이나 파이어폭스에서 적용안됨)</ul>
								</li>
							</ul>
						</li>
						<li>
							<strong>col (닫는 태그 없음)</strong>
							<ul>
								표의 세로줄을 지정할때 사용합니다. table요소내에서 caption뒤 thead 앞에 위치 해야 합니다. colgroup과 달리 col은 세로줄을 구조적으로 그룹핑하지 않으며 단순히 하나 이상 세로줄에 공통적인 속성을 정의 합니다. col요소는 table요소 안에 바로 포함되거나 colgroup 안에 포함될 수 있습니다. col요소가 colgroup안에 있을때 col속성은 colgroup속성보다 우선합니다. 
								<li>속성
									<ul>① class : css의 class 선택자를 지정 합니다.</ul>
									<ul>② id : css의 id 선택자를 지정합니다.</ul>
									<ul>③ style : css 스타일을 지정합니다. (적용할 수 있는 스타일은 border, background, width 입니다.)</ul>
									<ul>④ width : 디폴트 값은 픽셀입니다. %로도 사용이 가능합니다.</ul>
									<ul>⑤ span : 그룹화할 가로줄의 개수를 지정합니다.</ul>
								</li>
							</ul>
						<li>
							<strong>scope</strong>
							<ul>데이터의 header 정보를 제공합니다</ul>
							<ul>col : 그 열의 header의 정보를 제공합니다.</ul>
							<ul>row : 그 행의 header의 정보를 제공합니다.</ul>
						</li>
						<li>
							<strong>abbr (헤더의 요약)</strong>
							<ul>
								스크린리더가 테이블의 내용을 읽어 내려갈때 테이블의 내용(td) 보다는 상단header(th)부분부터 읽게 될 것입니다. 만약 이때 헤더(th) 내용이 길게 들어가면 스크린리더가 행을 읽을때마다 헤더의 내용을 계속 반복해서 읽게 될 것입니다. abbr속성은 이렇게 길게 들어가 있는 헤더의 내용을 단축해서 표현해주는 역활을 합니다.
							</ul>
						</li>
					</ul>
				</div>


				<div class="list">
					<h2>Table의 scope (col / row)</h2>
					<p>시각 장애인을 위한 테이블 속성의 웹접근성</p>
					<ul>
						<li>scope는 th에 사용하는 속성으로, 제목과 내용을 연결해주는 기능을 갖고 있습니다.</li>
						<li>예① : 과일에(th) scope="col" 이라고 적용하고 과일이라는 제목셀부터 사과, 바나나 순으로 읽으라는 뜻입니다.</li>
						<img src="../assets/images/html1.png" alt="table태그이미지" style="max-width: 500px;">
						<br>	
						<br>	
						<img src="../assets/images/html2.png" alt="table태그이미지" style="max-width: 500px;">
						<br>	
						<br>	
						<li>예② : 월요일(th)에 scope="col"을 적용하고 날씨(th)에 scope="row"라고 적용하면 월요일 - 날씨 - 맑음 순으로 읽으라는 뜻입니다.</li>
						<img src="../assets/images/html3.png" alt="table태그이미지" style="max-width: 500px;">
						<br>	
						<br>	
						<img src="../assets/images/html4.png" alt="table태그이미지" style="max-width: 500px;">
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
<? include_once('../header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
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
				<h1>CSS</h1> <!-- 제목 -->
				<p>CSS 레퍼런스(reference)</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="html">
			<div class="container">

				<div class="list">
				   	<h2>태그(Tag)</h2>
				   	<p>요소를 선택하여 속성을 줄 수 있습니다.</p>
				</div>

				<div class="list">
				   	<h2>CSS Selector</h2>
				   	<p>요소를 선택하여 속성을 줄 수 있습니다.</p>
				   	<table>
				      	<thead>
							<tr>
								<th>Tag</th>
								<th>Type</th>
								<th>Description</th>
								<th>Version</th>
							</tr>
				    	</thead>
				      	<tbody>
				         	<tr>
				            	<td>.</td>
				            	<td>.class {color:#fff;}</td>
				            	<td>클래스 선택자</td>
				            	<td>CSS1</td>
				        	</tr>
				        	<tr>
				            	<td>#</td>
				            	<td>#id {color:#fff;}</td>
				            	<td>아이디 선택자</td>
				            	<td>CSS1</td>
				        	</tr>
				        	<tr>
								<td>*</td>
								<td>* {margin:0; padding:0;}</td>
								<td>전체 선택자</td>
								<td>CSS2</td>
							</tr>
							<tr>
								<td>element</td>
								<td>div {background:#fff;}</td>
								<td>요소 선택자</td>
								<td>CSS1</td>
							</tr>
							<tr>
								<td>element,element</td>
								<td>div, p {background:#fff;}</td>
								<td>그룹 선택자</td>
								<td>CSS1</td>
							</tr>
							<tr>
								<td>element > element</td>
								<td>div > p {background:#fff;}</td>
								<td>자식 선택자</td>
								<td>CSS1</td>
							</tr>
							<tr>
								<td>element + element</td>
								<td>div + p {background:#fff;}</td>
								<td>형제 선택자</td>
								<td>CSS</td>
							</tr>
							<tr>
								<td>[attribute]</td>
								<td>div[class] {color:#fff}</td>
								<td>속성 선택자</td>
								<td>CSS</td>
							</tr>
							<tr>
								<td>[attribute=value]</td>
								<td>div[class="white"] {color:#fff}</td>
								<td>속성 선택자</td>
								<td>CSS3</td>
							</tr>
							<tr>
								<td>[attribute^=value]</td>
								<td>div[class^="white"] {color:#fff}</td>
								<td>속성 선택자(value값으로 시작하는 요소를 선택)</td>
								<td>CSS3</td>
							</tr>
							<tr>
								<td>[attribute~=value]</td>
								<td>div[class~="white"] {color:#fff}</td>
								<td>속성 선택자(value값이 포함한 요소를 선택)</td>
								<td>CSS3</td>
							</tr>
							<tr>
								<td>[attribute$=value]</td>
								<td>div[class$="white"] {color:#fff}</td>
								<td>속성 선택자(value값으로 끝나는 요소를 선택)</td>
								<td>CSS3</td>
							</tr>
				      	</tbody>
				   	</table>
				   	<ul>
						<li>
							id 선택자
							<ul>
								<li>하나의 태그만 식별하기 위한 선택자입니다.</li>
								<li>하나의 태그에 하나만 사용 할 수 있습니다.</li>
							</ul>
						</li>
						<li>
							class 선택자
							<ul>
								<li>여러개의 태그를 식별하기 위한 선택자입니다.</li>
								<li>하나의 태그에 여러개를 사용 할 수 있습니다.</li>
								<li>“ . ”으로 표시합니다.</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="list">
				   	<h2>CSS Color</h2>
				   	<p>CSS 색상표현은 4가지 방법이 있습니다.</p>
				   	<ul>
						<li>
							RGB/RGBA
							<ul>
								<li>RGB : Red, Green, Blue의 조합으로 0부터 255의 숫자를 사용하여 표현.</li>
								<li>RGBA : RGB값에 투명도를 의미하는 알파값을 더하여 표현한 색상.</li>
							</ul>
						</li>
						<li>
							HSL/HSLA
							<ul>
								<li>HSL : HSL은 색조, 채도 및 밝기를 나타내며 원통형 좌표 표현을 나타냅니다.</li>
								<li>HSLA :HSL값에 투명도를 의미하는 알파값을 더하여 표현한 색상.</li>
								<li>“ . ”으로 표시합니다.</li>
							</ul>
						</li>
						<li>헥사코드 : 6진수 표기법, 빛의 3원색인 Red,Green,Blue의 조합으로 00부터 FF까지의 숫자를 이용합니다.</li>
						<li>키워드 : 색상의 이름(키워드)으로도 색상을 표현할 수 있다.</li>
						<li><a href="https://publ-reference.tistory.com/21?category=931834" style="color: #1155cc;text-decoration: underline;">색상 코드값 바로가기</a></li>
					</ul>
				</div>

				<div class="list">
				   	<h2>CSS 선언 방법</h2>
				   	<p>CSS 선언하는 방법은 3가지가 있습니다.</p>
				   	<ul>
						<li>외부 스타일 시트(External Style Sheet) : 외부 CSS 파일과 연결</li>
						<li>내부 스타일 시트(Internal Style Sheet) : head 태그 안에 정의</li>
						<li>인라인 스타일 시트(Inline Style Sheet) : 해당 태그 안에 정의</li>
					</ul>
				</div>

				<div class="list">
				   	<h2>Float으로 인한 영역 깨짐(height:0) 방지법</h2>
				   	<p>float을 사용하면 height값을 0으로 인식합니다.</p>
				   	<ul>
						<li>깨지는 영역에 똑같이 float을 사용합니다.(X)</li>
						<li>float의 성질을 차단하는 clear:both를 사용합니다.(보이지않는것은 못함)</li>
						<li>float을 사용한 부모박스한테 overflow: hidden을 사용합니다.(O)</li>
						<li>float을 사용한 부모태그한테 clearfix를 사용합니다.</li>
					</ul>
					<p>
						.clearfix {*zoom: 1;}<br>
                        .clearfix:before .clearfax:after {display: table; content: ''; line-height: 0;}<br>
                        .clearfix:after {clear: both;}
					</p>
				</div>

				<div class="list">
				   	<h2>절대주소 and 상대주소<br><a href="https://m.blog.naver.com/onlyloveciel/220061944505" style="color: #1155cc;text-decoration: underline;">바로가기</a></h2>
				   	<p>절대주소</p>
				   	<ul>
						<li>절대경로는 해당하는 파일의 웹사이트 해당하는 폴더의 절대적인 위치를 말합니다.</li>
						<li>http://가 포함되어 있는 절대경로를 경로명만 웹브라우저 주소줄에 입력해도 이미지가 나옵니다.</li>
					</ul>
					<br>
					<p>상대주소</p>
				   	<ul>
						<li>현재 페이지와 같은 폴더에 위치해 있는 파일을 설명합니다.</li>
						<li>현재 페이지의 images폴더 안에 포함되어 있는 이미지파일을 설명합니다.</li>
						<li>사이트의 루트에 포함되어 있는 이미지 파일을 설명합니다.</li>
						<li>../ 은 해당하는 문서의 한단계 위 폴더에서 이미지 폴더 안에 파일을 설명합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>이미지 표현 방법</h2>
				   	<p>웹 문서예시 이미지를 표현 할 수 있는 방법은 3가지가 있습니다.</p>
				   	<ul>
						<li><span class="tag">&lsaquo;img&rsaquo;</span>태그를 통해서 넣는 방법 : 이미지에 의미가 있을 때</li>
						<li>CSS background를 통해서 넣는 방법 : 이미지에 의미가 없을 때</li>
						<li>이미지 스프라이트 기법을 통해서 넣는 방법</li>
					</ul>
				</div>

				<div class="list">
					<h2>이미지 스프라이트</h2>
				   	<p>이미지 스프라이트(image sprite)랑 여러개의 이미지를 하나의 이미지로 합쳐서 한번에 다운받는 시스템입니다.</p>
				   	<ul>
						<li>여러번의 서버 요청을 한 번으로 줄일 수 있습니다.</li>
						<li>이미지 수정이나 관리가 간편합니다.</li>
						<li>웹 접근성을 준수하기 위해서는 IR효과를 설정해야 합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>IR 기법</h2>
				   	<p>IR 기법은 이미지 대체텍스트 제공을 위한 CSS기법입니다.</p>
				   	<ul>
						<li>여러번의 서버 요청을 한 번으로 줄일 수 있습니다.</li>
						<li>이미지 수정이나 관리가 간편합니다.</li>
						<li>웹 접근성을 준수하기 위해서는 IR효과를 설정해야 합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>position:relative를 사용해야 하는 경우</h2>
				   	<ul>
						<li>position:aboslute의 기준점이 필요할 때</li>
						<li>z-index를 사용해야 하는 경우 포지션 값이 없으면 reletive를 사용하여 z-index의 값을 인식시킬 수 있습니다.</li>
						<li>요소의 위치를 유지한채 left, top, right, bottom의 위치 값을 사용하고 싶을 때</li>
					</ul>
				</div>

				<div class="list">
					<h2>컨텐츠를 보이지 않게 하는 방법</h2>
				   	<ul>
						<li>display:none <==> display:block // 영역사라짐 // 애니메이션</li>
						<li>visibility:hidden <==> visibility: visible // 영역 유지 // 애니메이션</li>
						<li>opacity:0; <==> opacity: 1; // 영역 유지 // 애니메이션</li>
						<li>width:0; hight:0; overflow:hidden(IR효과)</li>
					</ul>
				</div>

				<br>
				<br>
				<br>

				<div class="list">
					<h2>CSS Description</h2>
				</div>

				<br>

				<div class="list">
					<h2>width</h2>
					<p>요소의 가로(넓이) 값을 정의합니다.</p>
				</div>

				<div class="list">
					<h2>height</h2>
					<p>요소의 세로(높이) 값을 정의합니다.</p>
				</div>

				<div class="list">
					<h2>background</h2>
					<p>요소의 배경(색)을 정의합니다.</p>
					<ul>
						<li>background-color : 백그라운드 색상을 설정합니다.</li>
						<li>background-image : 백그라운드 이미지를 설정합니다.</li>
						<li>background-position : 백그라운드 이미지 위치를 설정합니다.</li>
						<li>background-repeat : 백그라운드 이미지 반복 여부를 설정합니다.</li>
						<li>background-size : 백그라운드 사이즈를 설정합니다.</li>
						<li>background-attachment : 배경이미지의 고정 여부를 설정합니다.</li>
						<li>background-blend-mode : 배경을 혼합했을 때의 상태를 설정합니다.</li>
						<li>background-clip : 배경을 혼합했을 때의 상태를 설정합니다.</li>
						<li>background-origin : 백그라운드 이미지 영역 속성을 설정합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>background-color</h2>
					<p>백그라운드 색상을 정의합니다.</p>
					<ul>
						<li>background-color: #fff - 백그라운드 색을 설정합니다.</li>
						<li>background-color: transparent - 백그라운드 색을 투명하게 설정합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>background-image</h2>
					<p>백그라운드 이미지 속성을 정의합니다.</p>
					<ul>
						<li>background-image: none - 백그라운드 이미지 속성을 설정하지 않습니다.</li>
						<li>background-image: url("이미지 경로") - 백그라운드 이미지를 설정합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>background-position</h2>
					<p>백그라운드 이미지 위치를 정의합니다.</p>
					<ul>
						<li>background-position: left top</li>
						<li>background-position: left center</li>
						<li>background-position: left bottom</li>
						<li>background-position: right top</li>
						<li>background-position: right center</li>
						<li>background-position: right bottom</li>
						<li>background-position: center top</li>
						<li>background-position: center center</li>
						<li>background-position: center bottom</li>
						<li>background-position: 10px 40px</li>
						<li>background-position: 10% 5%</li>
						<li>background-position: 10% 5%, 10px 40px, center top</li>
					</ul>
				</div>

				<div class="list">
					<h2>background-repeat</h2>
					<p>백그라운드 이미지 반복 여부를 설정합니다.</p>
					<ul>
						<li>background-repeat : repeat(기본값) - 이미지를 X축,Y축으로 반복 설정합니다.</li>
						<li>background-repeat : repeat-x - 이미지를 X축으로 반복 설정합니다.</li>
						<li>background-repeat : repeat-y - 이미지를 Y축으로 반복 설정합니다.</li>
						<li>background-repeat : no-repeat - 이미지를 반복하지 않고, 하나만 나오게 설정합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>text-align</h2>
					<p>텍스트의 정렬 방식을 정의합니다.</p>
					<ul>
						<li>text-align : left = 텍스트의 정렬을 왼쪽</li>
						<li>text-align : right = 텍스트의 정렬을 오른쪽</li>
						<li>text-align : center = 텍스트의 정렬을 중앙</li>
						<li>text-align : justify = 텍스트의 정렬을 양쪽</li>
					</ul>
				</div>

				<div class="list">
					<h2>text-transform</h2>
					<p>텍스트를 대문자 or 소문자로 변경합니다.</p>
					<ul>
						<li>text-transform : none = 기본값으로, 속성을 적용하지 않습니다.</li>
						<li>text-transform : capitalize = 각 단어의 첫번째 글자만 대문자로 변경</li>
						<li>text-transform : uppercase = 모든 텍스트를 대문자로 변경</li>
						<li>text-transform : lowercase = 모든 텍스트를 소문자로 변경</li>
					</ul>
				</div>

				<div class="list">
					<h2>margin</h2>
					<p>박스 요소의 바깥쪽 여백을 설정합니다.</p>
					<ul>
						<li>margin-top: 10px - 요소의 위쪽 바깥쪽 여백을 설정합니다.</li>
						<li>margin-right: 11px - 요소의 오른쪽 바깥쪽 여백을 설정합니다.</li>
						<li>margin-bottom: 12px - 요소의 아래쪽 바깥쪽 여백을 설정합니다.</li>
						<li>margin-left: 13px - 요소의 왼쪽 바깥쪽 여백을 설정합니다.</li>
						<li>margin: 10px 11px 12px 13px - 위쪽10px/오른쪽11px,아래쪽12px/왼쪽13px (한번에 전부 쓸수있습니다)</li>
						<li>margin: 10px 11px 12px - 위쪽10px/오른쪽,왼쪽11px/아래쪽12px</li>
						<li>margin: 10px 11px - 위쪽,아래쪽10px/오른쪽,왼쪽11px</li>
						<li>margin: 10px - 위쪽,아래쪽,오른쪽,왼쪽 10px </li>
						<li>margin: auto - 기본값 자동값 </li>
						<li>margin: 0 auto- 블록구조를 가운데 정렬</li>
					</ul>
				</div>

				<div class="list">
					<h2>padding</h2>
					<p>박스 요소의 안쪽 여백을 설정합니다.</p>
					<ul>
						<li>padding-top: 10px - 요소의 위쪽 안쪽 여백을 설정합니다.</li>
						<li>padding-right: 11px - 요소의 오른쪽 안쪽 여백을 설정합니다.</li>
						<li>padding-bottom: 12px - 요소의 아래쪽 안쪽 여백을 설정합니다.</li>
						<li>padding-left: 13px - 요소의 왼쪽 안쪽 여백을 설정합니다.</li>
						<li>padding: 10px 11px 12px 13px - 위쪽10px/오른쪽11px,아래쪽12px/왼쪽13px (한번에 전부 쓸수있습니다)</li>
						<li>padding: 10px 11px 12px - 위쪽10px/오른쪽,왼쪽11px/아래쪽12px</li>
						<li>padding: 10px 11px - 위쪽,아래쪽10px/오른쪽,왼쪽11px</li>
						<li>padding: 10px - 위쪽,아래쪽,오른쪽,왼쪽 10px </li>
					</ul>
				</div>

				<div class="list">
					<h2>font-size</h2>
					<p>글자 사이즈 속성을 설정합니다.</p>
					<ul>
						<li style="font-size: medium":>font-size: medium - 기본값, 글자 사이즈를 중간 크기로 설정합니다.</li>
						<li style="font-size: x-small">font-size: x-small - 글자 사이즈를 매우 작게로 설정합니다.</li>
						<li style="font-size: small">font-size: small - 글자 사이즈를 작게로 설정합니다.</li>
						<li style="font-size: large">font-size: large - 글자 사이즈를 크게로 설정합니다.</li>
						<li style="font-size: x-large">font-size: x-large - 글자 사이즈를 매우 크게로 설정합니다.</li>
						<li style="font-size: xx-large">font-size: xx-large - 글자 사이즈를 xx-large 크기로 설정합니다.</li>
						<li style="font-size: smaller">font-size: smaller - 글자 사이즈를 부모 요소보다 작은 크기로 설정합니다.</li>
						<li style="font-size: larger">font-size: larger - 글자 사이즈를 부모 요소보다 큰 크기로 설정합니다.</li>
						<li style="font-size: 14px">font-size: 14px(length) - 글자 사이즈를 px, cm 등으로 고정 된 크기로 설정합니다.</li>
						<li style="font-size: 20%">font-size: % - 글자 사이즈를 부모 요소의 글꼴 크기에 대한 백분율로 설정합니다.</li>
						<li style="font-size: initial">font-size: initial - 이 속성을 기본값으로 설정합니다.</li>
						<li style="font-size: inherit">font-size: inherit - 부모 요소에서이 속성을 상속받습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>line-height</h2>
					<p>문장과 문장 사이의 간격을 설정합니다.</p>
					<ul>
						<li>line-height: normal - 기본값이며, 브라우저의 기본 속성을 따른다.</li>
						<li>line-height: 3(number) - 폰트 사이즈를 기준으로 설정한 숫자만큼 배율로 적용합니다.</li>
						<li>line-height: 10%(percentage) - 폰트 사이즈를 기준으로 설정한 퍼센트만큼 배율로 적용합니다.(퍼센트 대신 숫자를 쓰는 것을 추천)</li>
						<li>line-height: 18px(length) - 직접 수치를 할당할 수 있다.</li>
						<li>line-height: height - 한 줄일 때 중간으로 오는 효과 </li>
					</ul>
				</div>

				<div class="list">
					<h2>position</h2>
					<p>요소의 위치를 설정합니다.</p>
					<ul>
						<li>position : static(기본값)</li>
						<li>position : absolute - 요소의 위치를 절대값을 설정합니다.</li>
						<li>position : relative
							<ul>
								<li>position : absolute의 기준점이 필요할 때 사용합니다.</li>
								<li>요소의 위치를 유지한채로 left, top, right, bottom의 위치 값을 사용하고 싶을때 사용합니다.</li>
								<li>z-index를 사용하고 싶은데 포지션이 없으면 reative를 사용하여 z-index 값을 인식시킬 수 있습니다.</li>
							</ul>
						</li>
						<li>position : fixed - 요소의 위치를 고정으로 설정합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>border</h2>
					<p>테두리 속성을 설정합니다.</p>
					<ul>
						<li>border-width: 테두리 두께 속성을 설정합니다.</li>
						<li>border-style : 테두리 스타일 속성을 설정합니다.</li>
						<li>border-color : 테두리 색 속성을 설정합니다.</li>
						<li>border-image : 테두리 이미지 속성을 설정합니다.</li>
						<li>border-radius : 테두리 굴곡을 설정합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>border-width</h2>
					<p>지정된 요소의 테두리 두께를 지정하며, 상하좌우 모두 각각 지정도 가능하고 한꺼번에 지정도 가능합니다.</p>
					<ul>
						<li>border-top-width:</li>
						<li>border-right-width:</li>
						<li>border-bottom-width:</li>
						<li>border-left-width:</li>
						<li>border-width: 10px 11px 12px 13px;</li>
						<li>border-width: 10px 11px 12px;</li>
						<li>border-width: 10px 11px;</li>
						<li>border-width: 10px;</li>
						<li style="border-bottom-width:medium; border-style:solid; margin-bottom:3px;">border-width: medium(3px)</li>
						<li style="border-bottom-width:thin; border-style:solid; margin-bottom:3px;">border-width: thin(1px)</li>
						<li style="border-bottom-width:thick; border-style:solid; margin-bottom:3px;">border-width: thick(5px)</li>
					</ul>
				</div>

				<div class="list">
					<h2>border-style</h2>
					<p>지정된 요소의 테두리 스타일을 지정하며,상하좌우 모두 각각 지정도 가능하고 한꺼번에 지정도 가능하다.</p>
					<ul>
						<li>border-style : none : 테두리 없음</li>
						<li>border-style : hidden</li>
						<li style=">border-width:1px; border-style:dotted; margin-bottom:3px;">border-style : dotted</li>
						<li style=">border-width:1px; border-style:dashed; margin-bottom:3px;">border-style : dashed</li>
						<li style=">border-width:1px; border-style:solid; margin-bottom:3px;">border-style : solid</li>
						<li style=">border-width:5px; border-style:double; margin-bottom:3px;">border-style : double</li>
						<li style=">border-width:5px; border-style:groove; margin-bottom:3px;">border-style : groove</li>
						<li style=">border-width:5px; border-style:ridge; margin-bottom:3px;">border-style : ridge</li>
						<li style=">border-width:5px; border-style:inset; margin-bottom:3px;">border-style : inset</li>
						<li style=">border-width:5px; border-style:outset; margin-bottom:3px;">border-style : outset</li>
					</ul>
				</div>

				<div class="list">
					<h2>border-color</h2>
					<p>지정된 요소의 테두리 색상을 설정합니다.</p>
					<ul>
						<li>border-color : 테두리의 색상을 지정(1px)</li>
						<li>border-color : transparent (투명도)</li>
					</ul>
				</div>

				<div class="list">
					<h2>border-image</h2>
					<p>테두리 이미지를 설정합니다.</p>
					<ul>
						<li>border-image-source</li>
						<li>border-image-slice</li>
						<li>border-image-width</li>
						<li>border-image-ouset</li>
						<li>border-image-repeat</li>
					</ul>
				</div>

				<div class="list">
					<h2>border-radius</h2>
					<p>테두리 굴곡을 설정합니다.</p>
					<ul>
						<li>border-top-radius</li>
						<li>border-right-radius</li>
						<li>border-bottom-radius</li>
						<li>border-left-radius</li>
						<li style="border-radius: 1px 1px 0 0">border-radius: 1px 1px 0 0</li>
					</ul>
				</div>

				<div class="list">
					<h2>list-style</h2>
					<p>목록 스타일 속성을 설정합니다.</p>
					<ul>
						<li>list-style-image : 목록 마커의 이미지를 설정합니다.</li>
						<li>list-style-position	: 목록 마커의 위치를 설정합니다.</li>
						<li>list-style-type : 목록 마커의 유형을 설정합니다.</li>
						<li style="background: #fff5e4;">
							<ul>
								<li style="list-style-type : disc;">list-style-type : disc; </li>
								<li style="list-style-type : circle;">list-style-type : circle;</li>
								<li style="list-style-type : square;">list-style-type : square;</li>
								<li style="list-style-type : upper-alpha;">list-style-type : upper-alpha;</li>
								<li style="list-style-type : upper-latin;">list-style-type : upper-latin;</li>
								<li style="list-style-type : upper-roman;">list-style-type : upper-roman;</li>
								<li style="list-style-type : lower-alpha;">list-style-type : lower-alpha;</li>
								<li style="list-style-type : lower-latin;">list-style-type : lower-alpha;</li>
								<li style="list-style-type : lower-roman;">list-style-type : lower-roman;</li>
								<li style="list-style-type : decimal-leading-zero;">list-style-type : decimal-leading-zero;</li>
							</ul>
						</li>

					</ul>
				</div>

				<div class="list">
					<h2>letter-spacing</h2>
					<p>텍스트 내에서 문자 간의 간격의 좁고 넓음을 설정합니다.</p>
					<ul>
						<li style="letter-spacing:9px;"> normal : 기본값, 글자간 간격이 기본값으로 지정</li>
						<li>length : 직접 간격을 지정하며 음수값도 허용됨</li>
						<li>inherit : 지정 요소의 자간 속성을 부모(상위) 요소로부터 상속받음</li>
					</ul>
				</div>

				<div class="list">
					<h2>word-spacing</h2>
					<p>단어와 단어 간의 공간을 설정합니다.</p>
					<ul>
						<li style="word-spacing:9px;">normal: 기본값(default), 브라우저 기본 스타일로 나타냄</li>
						<li>length: px, cm, em 단위로 단어 간격을 직접 지정하며 음수도 허용</li>
						<li>inherit : 지정 요소의 단어 간격 속성을 부모(상위) 요소로부터 상속받음</li>
					</ul>
				</div>

				<div class="list">
					<h2>overflow</h2>
					<p>요소의 자식 요소가 부모 요소의 범위를 초과 할 때 어떻게 처리 할지를 결정 할 수 있는 속성</p>
					<ul>
						<li>overflow: visible : overflow 의 값을 visible 로 사용 할 경우 특정 요소가 박스를 넘어 가더라도, 그대로 보여줍니다.</li>
						<li>overflow: hidden : overflow 의 값을 hidden 으로 설정하면, 부모요소의 범위를 넘어가는 자식요소의 부분은 보이지 않도록 처리 합니다.</li>
						<li>overflow: scroll : overflow 의 값을 scroll 로 설정 하면, 부모요소의 범위를 넘어가는 자식요소의 부분은 보이지 않지만, 그 대신 사용자가 확인 할 수 있도록 스크롤바를 표시 해줍니다.</li>
						<li>overflow: auto : overflow 의 값을 auto 로 설정할 경우 부모요소의 범위를 넘어가는 자식요소의 부분이 있을 경우 해당 부분을 보이지 않도록 처리하고, 사용자가 해당 부분을 확인 할 수 있도록 스크롤바를 표시 합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>cursor</h2>
					<p>속성을 이용하면 해당 태그 위에 위치하는 마우스 커서의 모양을 바꿀 수 있습니다.</p>
					<ul>
						<li>all-scroll : 어떤 방향으로 어떤 것이 스크롤 될 수 있음을 나타냅니다.</li>
						<li>context-menu : 컨텍스트 메뉴를 사용할 수 있음을 나타냅니다.</li>
						<li>col-resize : 열의 가로 크기 조정 가능 여부를 나타냅니다.</li>
						<li>copy : 무언가가 복사 될 것임을 나타냅니다.</li>
						<li>default : 기본 커서</li>
						<li>e-resize : 커서는 상자의 가장자리가 오른쪽 (동쪽)으로 이동한다는 것을 나타냅니다.</li>
						<li>ew-resize : 양방향 크기 조정 커서를 나타냅니다.</li>
						<li>help : 도움말을 사용할 수 있음을 나타냅니다.</li>
						<li>move : 무언가가 움직일 것임을 가리킨다.</li>
						<li>n-resize : 상자의 모서리가 위로 (북쪽으로) 이동해야 함을 나타냅니다.</li>
						<li>ne-resize : 상자의 모서리가 위아래로 움직일 것임을 나타냅니다 </li>
						<li>nesw-resize : 양방향 크기 조정 커서를 나타냅니다.</li>
						<li>ns-resize : 양방향 크기 조정 커서를 나타냅니다.</li>
						<li>nwse-resize : 양방향 크기 조정 커서를 나타냅니다.</li>
						<li>no-drop : 드래그 된 항목을 여기에 드롭 할 수 없음을 나타냅니다</li>
						<li>none : 커서가 렌더링되지 않습니다.</li>
						<li>not-allowed : 요청 된 동작이 실행되지 않음을 나타냅니다.</li>
						<li>pointer : 포인터이며 링크를 나타냅니다.</li>
						<li>row-resize : 행의 크기를 수직으로 조정할 수 있음을 나타냅니다.</li>
						<li>s-resize :  상자의 가장자리가 아래로 (남쪽으로) 이동해야 함을 나타냅니다.</li>
						<li>se-resize : 상자의 가장자리가 오른쪽 아래로 이동한다는 것을 나타냅니다 (남쪽 / 동쪽).</li>
						<li>sw-resize : 상자의 가장자리가 아래로 이동하고 왼쪽 (남쪽 / 서쪽)으로 이동해야 함을 나타냅니다.</li>
						<li>vertical-text : 선택할 수있는 세로 텍스트를 나타냅니다.</li>
						<li>w-resize : 상자의 가장자리가 왼쪽 (서쪽)으로 이동한다는 것을 나타냅니다.</li>
						<li>wait : 프로그램이 사용 중임을 나타냅니다.</li>
						<li>initial : 속성을 기본값으로 설정합니다. 처음에 대해 읽어보십시오.</li>
					</ul>
				</div>

				<div class="list">
					<h2>text-overflow</h2>
					<p>박스 안에 내용이 넘칠때 텍스트를 어떻게 처리할지 지정하는 속성입니다.</p>
					<ul>
						<li>text-overflow: clip : 기본값, 텍스트를 자름</li>
						<li>text-overflow: ellipsis : 잘린 텍스트를 생략 부호  (...)으로 표시함 </li>
						<li>text-overflow: string : 잘린 텍스트를 지정한 문자열로 표시</li>
					</ul>
				</div>

				<div class="list">
					<h2>white-space</h2>
					<p>속성은 어떤 요소(element) 안의 공백(whitespace)이 어떻게 처리될지를 나타내는데 사용됩니다.</p>
					<ul>
						<li>white-space: normal : 연속된 공백이 하나로 병합됩니다. 소스 안의 줄바꿈 문자는 다른 공백 문자와 같이 취급됩니다. 줄 박스를 채우기 위해 필요에 따라 줄을 끊습니다.</li>
						<li>white-space: nowrap : normal 과 같이 공백 문자를 병합하지만, 텍스트 줄바꿈(text wrapping)을 하지 않습니다.</li>
						<li>white-space: pre : 연속된 공백이 보존됩니다. 줄은 오로지 소스의 줄바꿈 문자나 br 요소에서만 끊어집니다.</li>
						<li>white-space: pre-wrap : 연속된 공백이 보존됩니다. 줄은 줄바꿈 문자, br, 그리고 줄 박스를 채우기 위해 필요에 따라 끊어집니다.</li>
						<li>white-space: pre-line : 연속된 공백이 병합됩니다. 줄은 줄바꿈 문자, br, 그리고 줄 박스를 채우기 위해 필요에 따라 끊어집니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>::after</h2>
					<p>가상 요소(pseudo-element)는 선택된 요소(element)의 가상의 자녀 요소를 가르킵니다. 이는 주로 본문에 추가적인 내용을 덧붙이는 경우에 많이 쓰이는 content CSS 프로퍼티(property) 입니다. 이 요소는 인라인(inline)이 기본값입니다.</p>
				</div>

				<div class="list">
					<h2>::before</h2>
					<p>선택자는 각 선택된 요소의 내용 앞에 무언가를 삽입합니다.</p>
					<ul>
						<li>content: '무언가'</li>
					</ul>
				</div>

				<div class="list">
					<h2>box-sizing</h2>
					<p>요소의 폭과 높이를 계산하는 방법을 정의합니다. 요소의 너비와 높이를 계산하는 방법은 패딩과 테두리를 포함할지 여부를 정의합니다.</p>
					<ul>
						<li>content-box : idth 및 height 속성 (및 min / max 속성)에는 내용 만 포함됩니다. 테두리 및 패딩은 포함되어 있지 않습니다.</li>
						<li>border-box : width 및 height 속성 (및 min / max 속성)에는 내용, 채우기 및 테두리가 포함됩니다.</li>
						<li>initial : 이 속성을 기본값으로 설정합니다. </li>
						<li>inherit : 부모 요소에서이 속성을 상속받습니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>display</h2>
					<p>요소의 표시 비헤이비어(렌더링 상자 유형)를 지정합니다. HTML에서 기본 표시 속성 값은 HTML 사양 또는 브라우저 / 사용자 기본 스타일 시트에서 가져옵니다.</p>
					<ul>
						<li>none : 요소가 완전히 제거되었습니다.</li>
						<li>initial : 속성을 기본값으로 설정합니다.</li>
						<li>inherit : 상속 부모 요소에서이 속성을 상속받습니다. 상속에 대해 읽어보십시오.</li>
						<li>inline : 요소를 인라인 요소 (예 : span)로 표시합니다. 모든 높이 및 너비 속성은 아무 효과가 없습니다.</li>
						<li>block  : 요소를 &lt;p&gt;와 같은 블록 요소로 표시합니다. 새 줄에서 시작하여 전체 너비를 차지합니다.</li>
						<li>contents : 컨테이너를 사라지게하여 자식 요소 인 DOM 요소의 자식 요소를 DOM의 다음 레벨로 만듭니다.</li>
						<li>flex : 요소를 블록 레벨 플렉스 컨테이너로 표시합니다. 그리드 요소를 블록 레벨 그리드 컨테이너로 표시합니다.</li>
						<li>inline-block : 요소를 인라인 수준 블록 컨테이너로 표시합니다. 요소 자체는 인라인 요소로 형식화되지만 높이 및 너비 값을 적용 할 수 있습니다</li>
						<li>inline-flex : 요소를 인라인 레벨 flex 컨테이너로 표시합니다.</li>
						<li>inline-grid : 요소를 인라인 수준 그리드 컨테이너로 표시합니다.</li>
						<li>inline-table : 요소가 인라인 수준 테이블로 표시됩니다.</li>
						<li>list-item : 요소가 &lt;li&gt; 요소처럼 동작하도록합니다.</li>
						<li>run-in : 컨텍스트에 따라 요소를 블록 또는 인라인으로 표시합니다.</li>
						<li>table : 요소가 &lt;table&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-caption : 요소가 &lt;caption&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-column-group : 요소가 &lt;colgroup&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-header-group : 요소가 &lt;thead&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-footer-group : 요소가 &lt;tfoot&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-row-group : 요소가 &lt;tbody&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-cell : 요소가 &lt;td&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-column : 요소가 &lt;col&gt; 요소처럼 동작하도록합니다.</li>
						<li>table-row : 요소가 &lt;tr&gt; 요소처럼 동작하도록합니다.</li>
					</ul>
				</div>

				<div class="list">
					<h2>Font Awesome 자동접근성 설정하기</h2>
					<p>자동접근성 지원</p>
					<ul>
						<li>웹폰트에 따라 자동 접근성 기능을 지원하는 경우들이 있습니다. 예를 들어 Font Awesome의 경우 앞에서 설명한 바와 같이 수동으로 접근성 관련 아이콘 정보 등을 추가할 수도 있으나 font awesome cdn을 사용하고 자동 접근성을 설정하면 의미 있는 아이콘에 title 속성을 추가하면 자동으로 span 태그를 생성하고 화면에서는 숨기고 스크린리더만 인식 가능한 스크린리더 텍스트를 추가해주게 됩니다.
							<ul>
								<li>ex) &lt;dt&gt; &lt;i title="Time to destination by car" class="fa fa-car" aria-hidden="true"&gt;&lt;/i&gt;&lt;span class="sr-only"&gt;Time to destination by car&lt;/span&gt; &lt;/dt&gt;</li>
							</ul>
						</li>
					</ul>
				</div>


				<div class="list">
					<p>Css 콘텐츠 출력과 스크린리더 이슈</p>
					<ul>
						<li>스크린리더가 발전하고 브라우저에서도 접근성 관련 api 기능이 발전하면서 스크린리더에 따라 css로 만들어진 텍스트 콘텐츠들도 읽을 수 있게 되었습니다.
							<ul>
								<li>ex) &lt;style&gt; a.important:after { content: '클릭하지 마세요’ } &lt;/style&gt;</li>
							</ul>
						</li>
						<li>아이콘 폰트 클래스를 적용할 경우 특정 클래스의 경우 의미 없는 문자 코드가 css 콘텐츠에 포함되어 있어 스크린리더가 이러한 무의미한 텍스트를 읽게될수 있습니다. 아이콘에 대한 설명이 포함되어 있지 않은 이상 스크린리더 사용자에게 이러한 정보는 아무런 의미를 가지지 못하므로 aria-hidden=”true” 를 사용하여 이러한 의미 없는 요소들이 음성출력되지 않도록 해 주어야 합니다. 이것은 의미 없는 이미지에 alt=”” 속성을 적용하여 아예 이미지 자체가 음성출력되지 않도록 하는 것과 같은 원리입니다.
							<ul>
								<li>ex) &lt;style&gt; a.important:after { content: '클릭하지 마세요’ } &lt;/style&gt;</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="list">
					<h2>스크린리더 사용자를 위한 IR(Image Replacement)기법 정리</h2>
					<p>이미지를 볼 수 없는 사용자에게 대체된 텍스트를 제공하는 것을 IR(Image Replacement)라고 합니다.</p>
					<ul>
						<li>Text-indent를 활용한 IR기법
							<ul>
								<li>Text-indent를 활용한 IR 기법은 가장 손쉽게 사용할 수 있는 방법입니다. 간단한 사용 방법은 text-indent 속성 값에 현재 사용되고 있는 디스플레이의 해상도보다 작은 음의 정수 값을 주는 것입니다. 이를테면 ‘span{text-indent: -9999’}와 같이 사용할 수 있습니다.</li>
								<li>Text-indent 속성은 사용하기 간편하지만 단점이 있습니다. 만약 사용자의 단말기에 따라 이미지가 제대로 로드되지 않을 때 스크린리더 사용자가 아니라 하더라도 이미지를 설명하는 텍스트를 보고 콘텐츠의 내용을 확인해야 하지만 할 수 없다는 것입니다. 또한, 웹페이지에 text-indent 스타일 속성이 적용된 요소가 많을 때 컴퓨터가 웹페이지 로드 시 위치값을 그만큼 많이 계산해 하므로 성능에 저하를 불러올 수 있습니다.</li>
							</ul>
						</li>
						<li>CSS의 위치 속성과 overflow: hidden을 사용하는 방법
							<ul>
								<li>CSS의 위치를 지정하는 left/right와 position, 그리고 overflow: hidden을 사용하는 IR 기법은 원리상 text-indent와 유사합니다. 사용 방법은 텍스트가 있는 &lt;span&gt; 또는 &lt;div&gt; 등의 요소에 디스플레이 해상도 보다 훨씬 작은 음의 정수 값으로 위치를 부여한 다음, 높이와 너비를 1px 정도로 작게 설정합니다. 그다음 overflow: hidden과 position: absolute로 대체 텍스트를 화면에서 완전히 숨깁니다.</li>
							</ul>
						</li>
						<li>높이와 넓이를 0으로 설정하는 IR기법
							<ul>
								<li>이 방법은 대체 텍스트 글자가 들어가는 등의 요소의 높이와 너비를 0으로 지정하는 방법입니다. 먼저, 대체할 텍스트 요소에 BackGround 이미지를 설정한 다음 대체 텍스트가 포함되는 요소의 높이와 너비를 0으로 지정합니다.</li>
							</ul>
						</li>
						<li>z-index를 활용한 IR기법
							<ul>
								<li>z-index를 이용한 IR 기법 역시 크게 어렵지 않습니다. 이미지의 대체 텍스트에 z-index 속성 값을 음의 정수로 부여하는 방식입니다.</li>
								<li>z-index로 IR 기법을 사용했을 때의 특징은 만약 브라우저에서 CSS를 끄거나, 어떠한 이유로 웹 페이지에 적용된 CSS가 정상적으로 로드되지 않을 때 숨겨진 텍스트가 화면에 출력됩니다. 또한, position 속성을 사용하기 때문에 디바이스의 사양에 따라 성능에 영향을 줄 수 있습니다.</li>
							</ul>
						</li>
					</ul>
				</div>

			</div>
		</main>

	</div>
	
	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>
</body>
</html>

<? include_once('../footer.php'); ?>
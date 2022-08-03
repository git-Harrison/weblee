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
	<link rel="stylesheet" href="css/transform.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q33C7E9XM2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Q33C7E9XM2');
	</script>
</head>
<body class="sub css" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

	<? include_once('../header.php'); ?>
	
	<div class="wrap">

		<header>
			<div class="title">
				<h1>TRANSFORM</h1> <!-- 제목 -->
				<p>CSS TRANSFORM 속성 상세페이지</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="html">
			<div class="container">

				<div class="list">
					<h2>translate</h2>
					<table>
						<thead>
							<tr>
								<th>Porperty</th>
								<th>Sample</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>translate</td>
								<td>transform: translate(10px, 20px);</td>
								<td>선택한 요소의  X좌표, Y좌표 이동을 나타냅니다.</td>
							</tr>
							<tr>
								<td>translate3d</td>
								<td>transform: translate3d(10px, 20px, 30px);</td>
								<td>선택한 요소의  X좌표, Y좌표, Z좌표 이동을 나타냅니다.</td>
							</tr>
							<tr>
								<td>translateX</td>
								<td>transform: translateX(10px)</td>
								<td>선택한 요소의  X좌표 이동을 나타냅니다.</td>
							</tr>
							<tr>
								<td>translateY</td>
								<td>transform: translateY(10px)</td>
								<td>선택한 요소의  Y좌표 이동을 나타냅니다.</td>
							</tr>
							<tr>
								<td>translateZ</td>
								<td>transform: translateZ(10px)</td>
								<td>선택한 요소의  Z좌표 이동을 나타냅니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list transform">
					<div class="block tra1">
						<div class="translate1">translate1</div>
					</div>
					<div class="block tra1">
						<div class="translate2">translate2</div>
					</div>
					<div class="block tra1">
						<div class="translate3">translate3</div>
					</div>
					<div class="block tra1">
						<div class="translate4">translate4</div>
					</div>
					<div class="block tra1">
						<div class="translate5">translate5</div>
					</div>
				</div>
				<div class="list transform">
					<div class="block tra1">
						<div class="translate6">translate6</div>
					</div>
					<div class="block tra1">
						<div class="translate7">translate7</div>
					</div>
					<div class="block tra1">
						<div class="translate8">translate8</div>
					</div>
					<div class="block tra1">
						<div class="translate9">translate9</div>
					</div>
					<div class="block tra1">
						<div class="translate10">translate10</div>
					</div>
				</div>
				<div class="list transform">
					<div class="block tra1">
						<div class="translate11">translate11</div>
					</div>
					<div class="block tra1">
						<div class="translate12">translate12</div>
					</div>
					<div class="block tra1">
						<div class="translate13">translate13</div>
					</div>
					<div class="block tra1">
						<div class="translate14">translate14</div>
					</div>
					<div class="block tra1">
						<div class="translate15">translate15</div>
					</div>
				</div>

<pre class="prettyprint">
.block {width: 140px; height: 140px; line-height: 140px; font-size: 18px; color: #fff; text-align: center; cursor: pointer; float: left; margin: 40px; perspective: 500px; border: 1px solid #ccc;}
.block.tra1 > div {background: radial-gradient(ellipse farthest-corner at right center, #f8bfa4 0%, #f33b4e 100%); transition: all 0.3s ease;}
.block.tra1 > div:hover {transform: none;}
.translate1 {transform: translate(10px, 20px);}
.translate2 {transform: translate(20px, 20px);}
.translate3 {transform: translate(30px, 30px);}
.translate4 {transform: translate(40px, 40px);}
.translate5 {transform: translate(50px, 50px);}
.translate6 {transform: translateX(10px);}
.translate7 {transform: translateX(20px);}
.translate8 {transform: translateX(30px);}
.translate9 {transform: translateX(40px);}
.translate10 {transform: translateX(50px);}
.translate11 {transform: translateY(10px);}
.translate12 {transform: translateY(20px);}
.translate13 {transform: translateY(30px);}
.translate14 {transform: translateY(40px);}
.translate15 {transform: translateY(50px);}
</pre>
				<div class="list">
					<h2>scale</h2>
					<table>
						<thead>
							<tr>
								<th>Porperty</th>
								<th>Sample</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>scale</td>
								<td>transform: scale(2, 2);</td>
								<td>선택한 요소의  X축, Y축 확대를 나타냅니다.</td>
							</tr>
							<tr>
								<td>scale3d</td>
								<td>transform: scale3d(2, 2, 2);</td>
								<td>선택한 요소의  X축, Y축, Z축 확대를 나타냅니다.</td>
							</tr>
							<tr>
								<td>scaleX</td>
								<td>transform: scaleX(2);</td>
								<td>선택한 요소의  X축 확대를 나타냅니다.</td>
							</tr>
							<tr>
								<td>scaleY</td>
								<td>transform: scaleY(2);</td>
								<td>선택한 요소의  Y축 확대를 나타냅니다.</td>
							</tr>
							<tr>
								<td>scaleZ</td>
								<td>transform: scaleZ(2);</td>
								<td>선택한 요소의  Z축 확대를 나타냅니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list transform">
					<div class="block sca">
						<div class="scale1">scale1</div>
					</div>
					<div class="block sca">
						<div class="scale2">scale2</div>
					</div>
					<div class="block sca">
						<div class="scale3">scale3</div>
					</div>
					<div class="block sca">
						<div class="scale4">scale4</div>
					</div>
					<div class="block sca">
						<div class="scale5">scale5</div>
					</div>
				</div>

<pre class="prettyprint">
.block.sca > div {background: radial-gradient(#30cfd0, #330867) fixed; transition: all 0.3s ease; opacity: 0.6;}
.block.sca > div:hover {transform:none;}

.scale1 {transform: scale(1.1,1.1);}
.scale2 {transform: scale(1.2,1.2);}
.scale3 {transform: scale(1.3,1.3);}
.scale4 {transform: scale(1.4,1.4);}
.scale5 {transform: scale(1.5,1.5);}
</pre>

				<div class="list transform">
					<div class="block sca">
						<div class="scale6">scale6</div>
					</div>
					<div class="block sca">
						<div class="scale7">scale7</div>
					</div>
					<div class="block sca">
						<div class="scale8">scale8</div>
					</div>
					<div class="block sca">
						<div class="scale9">scale9</div>
					</div>
					<div class="block sca">
						<div class="scale10">scale10</div>
					</div>
				</div>

<pre class="prettyprint">
.scale6 {transform: scale(0.9,0.9);}
.scale7 {transform: scale(0.8,0.8);}
.scale8 {transform: scale(0.7,0.7);}
.scale9 {transform: scale(0.6,0.6);}
.scale10 {transform: scale(0.5,0.5);}
</pre>

				<div class="list transform">
					<div class="block sca">
						<div class="scale11">scale11</div>
					</div>
					<div class="block sca">
						<div class="scale12">scale12</div>
					</div>
					<div class="block sca">
						<div class="scale13">scale13</div>
					</div>
					<div class="block sca">
						<div class="scale14">scale14</div>
					</div>
					<div class="block sca">
						<div class="scale15">scale15</div>
					</div>
				</div>

<pre class="prettyprint">
.scale11 {transform: scaleX(1.1);}
.scale12 {transform: scaleX(1.2);}
.scale13 {transform: scaleX(1.3);}
.scale14 {transform: scaleX(1.4);}
.scale15 {transform: scaleX(1.5);}
</pre>

				<div class="list transform">
					<div class="block sca">
						<div class="scale16">scale16</div>
					</div>
					<div class="block sca">
						<div class="scale17">scale17</div>
					</div>
					<div class="block sca">
						<div class="scale18">scale18</div>
					</div>
					<div class="block sca">
						<div class="scale19">scale19</div>
					</div>
					<div class="block sca">
						<div class="scale20">scale20</div>
					</div>
				</div>

<pre class="prettyprint">
.scale16 {transform: scaleY(1.1);}
.scale17 {transform: scaleY(1.2);}
.scale18 {transform: scaleY(1.3);}
.scale19 {transform: scaleY(1.4);}
.scale20 {transform: scaleY(1.5);}
</pre>
					
				<div class="list">
					<h2>rotate</h2>
					<table>
						<thead>
							<tr>
								<th>Porperty</th>
								<th>Sample</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>rotate</td>
								<td>transform: rotate(10deg);</td>
								<td>선택한 요소의  회전을 나타냅니다.</td>
							</tr>
							<tr>
								<td>rotate3d</td>
								<td>transform: rotate3d(0, 1, 0, 10deg);</td>
								<td>선택한 요소의  3d회전을 나타냅니다.</td>
							</tr>
							<tr>
								<td>rotateX</td>
								<td>transform: rotateX(10deg);</td>
								<td>선택한 요소의  X축 회전을 나타냅니다.</td>
							</tr>
							<tr>
								<td>rotateY</td>
								<td>transform: rotateY(10deg);</td>
								<td>선택한 요소의  Y축 회전을 나타냅니다.</td>
							</tr>
							<tr>
								<td>rotateZ</td>
								<td>transform: rotateZ(10deg);</td>
								<td>선택한 요소의  Z축 회전을 나타냅니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list transform">
					<div class="block rot">
						<div class="rotate1">rotate1</div>
					</div>
					<div class="block rot">
						<div class="rotate2">rotate2</div>
					</div>
					<div class="block rot">
						<div class="rotate3">rotate3</div>
					</div>
					<div class="block rot">
						<div class="rotate4">rotate4</div>
					</div>
					<div class="block rot">
						<div class="rotate5">rotate5</div>
					</div>
				</div>

<pre class="prettyprint">
.rotate1 {transform: rotate(10deg);}
.rotate2 {transform: rotate(20deg);}
.rotate3 {transform: rotate(30deg);}
.rotate4 {transform: rotate(40deg);}
.rotate5 {transform: rotate(50deg);}
</pre>

				<div class="list transform">
					<div class="block rot">
						<div class="rotate6">rotate6</div>
					</div>
					<div class="block rot">
						<div class="rotate7">rotate7</div>
					</div>
					<div class="block rot">
						<div class="rotate8">rotate8</div>
					</div>
					<div class="block rot">
						<div class="rotate9">rotate9</div>
					</div>
					<div class="block rot">
						<div class="rotate10">rotate10</div>
					</div>
				</div>

<pre class="prettyprint">
.rotate6 {transform: rotateX(10deg);}
.rotate7 {transform: rotateX(20deg);}
.rotate8 {transform: rotateX(30deg);}
.rotate9 {transform: rotateX(40deg);}
.rotate10 {transform: rotateX(50deg);}
</pre>

				<div class="list transform">
					<div class="block rot">
						<div class="rotate11">rotate11</div>
					</div>
					<div class="block rot">
						<div class="rotate12">rotate12</div>
					</div>
					<div class="block rot">
						<div class="rotate13">rotate13</div>
					</div>
					<div class="block rot">
						<div class="rotate14">rotate14</div>
					</div>
					<div class="block rot">
						<div class="rotate15">rotate15</div>
					</div>
				</div>

<pre class="	prettyprint">
.rotate11 {transform: rotateY(10deg);}
.rotate12 {transform: rotateY(20deg);}
.rotate13 {transform: rotateY(30deg);}
.rotate14 {transform: rotateY(40deg);}
.rotate15 {transform: rotateY(50deg);}
</pre>

				<div class="list transform">
					<div class="block rot">
						<div class="rotate16">rotate16</div>
					</div>
					<div class="block rot">
						<div class="rotate17">rotate17</div>
					</div>
					<div class="block rot">
						<div class="rotate18">rotate18</div>
					</div>
					<div class="block rot">
						<div class="rotate19">rotate19</div>
					</div>
					<div class="block rot">
						<div class="rotate20">rotate20</div>
					</div>
				</div>

<pre class="prettyprint">
.rotate16 {transform: rotateZ(10deg);}
.rotate17 {transform: rotateZ(20deg);}
.rotate18 {transform: rotateZ(30deg);}
.rotate19 {transform: rotateZ(40deg);}
.rotate20 {transform: rotateZ(50deg);}
</pre>

				<div class="list transform">
					<div class="block rot">
						<div class="rotate21">rotate21</div>
					</div>
					<div class="block rot">
						<div class="rotate22">rotate22</div>
					</div>
					<div class="block rot">
						<div class="rotate23">rotate23</div>
					</div>
					<div class="block rot">
						<div class="rotate24">rotate24</div>
					</div>
					<div class="block rot">
						<div class="rotate25">rotate25</div>
					</div>
				</div>

<pre class="prettyprint">
.rotate21 {transform: rotate3d(0,1,1,10deg);}
.rotate22 {transform: rotate3d(0,1,1,30deg);}
.rotate23 {transform: rotate3d(0,1,1,50deg);}
.rotate24 {transform: rotate3d(0,1,1,70deg);}
.rotate25 {transform: rotate3d(0,1,1,90deg);}
</pre>
				
				<div class="list">
					<h2>skew</h2>
					<table>
						<thead>
							<tr>
								<th>Porperty</th>
								<th>Sample</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>skew</td>
								<td>transform: skew(10deg, 10deg);</td>
								<td>선택한 요소의  X축, Y축 기울기를 나타냅니다.</td>
							</tr>
							<tr>
								<td>skewX</td>
								<td>transform: skewX(10deg);</td>
								<td>선택한 요소의  X축 기울기를 나타냅니다.</td>
							</tr>
							<tr>
								<td>skewY</td>
								<td>transform: skewY(10deg);</td>
								<td>선택한 요소의  Y축 기울기를 나타냅니다.</td>
							</tr>
							<tr>
								<td>rotateZ</td>
								<td>transform: rotateZ(10deg);</td>
								<td>선택한 요소의  Z축 회전을 나타냅니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list transform">
					<div class="block ske">
						<div class="skew1">skew1</div>
					</div>
					<div class="block ske">
						<div class="skew2">skew2</div>
					</div>
					<div class="block ske">
						<div class="skew3">skew3</div>
					</div>
					<div class="block ske">
						<div class="skew4">skew4</div>
					</div>
					<div class="block ske">
						<div class="skew5">skew5</div>
					</div>
				</div>

<pre class="prettyprint">
.skew1 {transform: skew(10deg, 10deg);}
.skew2 {transform: skew(15deg, 15deg);}
.skew3 {transform: skew(20deg, 20deg);}
.skew4 {transform: skew(25deg, 25deg);}
.skew5 {transform: skew(30deg, 30deg);}
</pre>

				<div class="list transform">
					<div class="block ske">
						<div class="skew6">skew6</div>
					</div>
					<div class="block ske">
						<div class="skew7">skew7</div>
					</div>
					<div class="block ske">
						<div class="skew8">skew8</div>
					</div>
					<div class="block ske">
						<div class="skew9">skew9</div>
					</div>
					<div class="block ske">
						<div class="skew10">skew10</div>
					</div>
				</div>

<pre class="prettyprint">
.skew6 {transform: skewX(10deg);}
.skew7 {transform: skewX(20deg);}
.skew8 {transform: skewX(30deg);}
.skew9 {transform: skewX(40deg);}
.skew10 {transform: skewX(50deg);}	
</pre>

				<div class="list transform">
					<div class="block ske">
						<div class="skew11">skew11</div>
					</div>
					<div class="block ske">
						<div class="skew12">skew12</div>
					</div>
					<div class="block ske">
						<div class="skew13">skew13</div>
					</div>
					<div class="block ske">
						<div class="skew14">skew14</div>
					</div>
					<div class="block ske">
						<div class="skew15">skew15</div>
					</div>
				</div>

<pre class="prettyprint">
.skew11 {transform: skewY(10deg);}
.skew12 {transform: skewY(20deg);}
.skew13 {transform: skewY(30deg);}
.skew14 {transform: skewY(40deg);}
.skew15 {transform: skewY(50deg);}
</pre>
				
				<div class="list">
					<h2>transform-origin</h2>
					<table>
						<thead>
							<tr>
								<th>Porperty</th>
								<th>Sample</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>transform-origin</td>
								<td>transform-origin: 20% 30%;</td>
								<td>선택한 요소의 기준점 나타냅니다.</td>
							</tr>
							<tr>
								<td>transform-style</td>
								<td>transform-style : preservw-3d;</td>
								<td>선택한 요소의 스타일을 나타냅니다.</td>
							</tr>
							<tr>
								<td>perspective</td>
								<td>perspective : 500px;</td>
								<td>선택한 요소의 원근점 거리를 설정합니다.</td>
							</tr>
							<tr>
								<td>perspective-origin</td>
								<td>perspective-origin : 100px;</td>
								<td>선택한 요소의 원근점 방향을  설정합니다.</td>
							</tr>
							<tr>
								<td>backface-visibility</td>
								<td>backface-visibility : hiddden;</td>
								<td>선택한 요소의 3D 뒷면의 배경 유무를 설정합니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list transform">
					<div class="block ori">
						<div class="origin1">origin1</div>
					</div>
					<div class="block ori">
						<div class="origin2">origin2</div>
					</div>
					<div class="block ori">
						<div class="origin3">origin3</div>
					</div>
					<div class="block ori">
						<div class="origin4">origin4</div>
					</div>
					<div class="block ori">
						<div class="origin5">origin5</div>
					</div>
				</div>

<pre class="prettyprint">
.origin1 {transform: rotate(10deg); transform-origin: 0% 0%;}
.origin2 {transform: rotate(20deg); transform-origin: 0% 0%;}
.origin3 {transform: rotate(30deg); transform-origin: 0% 0%;}
.origin4 {transform: rotate(40deg); transform-origin: 0% 0%;}
.origin5 {transform: rotate(50deg); transform-origin: 0% 0%;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin6">origin6</div>
					</div>
					<div class="block ori">
						<div class="origin7">origin7</div>
					</div>
					<div class="block ori">
						<div class="origin8">origin8</div>
					</div>
					<div class="block ori">
						<div class="origin9">origin9</div>
					</div>
					<div class="block ori">
						<div class="origin10">origin10</div>
					</div>
				</div>

<pre class="prettyprint">
.origin6 {transform: rotate(10deg); transform-origin: 100% 100%;}
.origin7 {transform: rotate(20deg); transform-origin: 100% 100%;}
.origin8 {transform: rotate(30deg); transform-origin: 100% 100%;}
.origin9 {transform: rotate(40deg); transform-origin: 100% 100%;}
.origin10 {transform: rotate(50deg); transform-origin: 100% 100%;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin11">origin11</div>
					</div>
					<div class="block ori">
						<div class="origin12">origin12</div>
					</div>
					<div class="block ori">
						<div class="origin13">origin13</div>
					</div>
					<div class="block ori">
						<div class="origin14">origin14</div>
					</div>
					<div class="block ori">
						<div class="origin15">origin15</div>
					</div>
				</div>

<pre class="prettyprint">
.origin11 {transform: rotate(10deg); transform-origin: 100% 0;}
.origin12 {transform: rotate(20deg); transform-origin: 100% 0;}
.origin13 {transform: rotate(30deg); transform-origin: 100% 0;}
.origin14 {transform: rotate(40deg); transform-origin: 100% 0;}
.origin15 {transform: rotate(50deg); transform-origin: 100% 0;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin16">origin16</div>
					</div>
					<div class="block ori">
						<div class="origin17">origin17</div>
					</div>
					<div class="block ori">
						<div class="origin18">origin18</div>
					</div>
					<div class="block ori">
						<div class="origin19">origin19</div>
					</div>
					<div class="block ori">
						<div class="origin20">origin20</div>
					</div>
				</div>

<pre class="prettyprint">
.origin16 {transform: rotate(10deg); transform-origin: 0 100%;}
.origin17 {transform: rotate(20deg); transform-origin: 0 100%;}
.origin18 {transform: rotate(30deg); transform-origin: 0 100%;}
.origin19 {transform: rotate(40deg); transform-origin: 0 100%;}
.origin20 {transform: rotate(50deg); transform-origin: 0 100%;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin21">origin21</div>
					</div>
					<div class="block ori">
						<div class="origin22">origin22</div>
					</div>
					<div class="block ori">
						<div class="origin23">origin23</div>
					</div>
					<div class="block ori">
						<div class="origin24">origin24</div>
					</div>
					<div class="block ori">
						<div class="origin25">origin25</div>
					</div>
				</div>

<pre class="prettyprint">
.origin21 {transform: rotate3d(1,0,0,60deg); transform-origin: 20% 0%;}
.origin22 {transform: rotate3d(1,0,0,60deg); transform-origin: 20% 25%;}
.origin23 {transform: rotate3d(1,0,0,60deg); transform-origin: 20% 50%;}
.origin24 {transform: rotate3d(1,0,0,60deg); transform-origin: 20% 75%;}
.origin25 {transform: rotate3d(1,0,0,60deg); transform-origin: 20% 100%;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin26">origin26</div>
					</div>
					<div class="block ori">
						<div class="origin27">origin27</div>
					</div>
					<div class="block ori">
						<div class="origin28">origin28</div>
					</div>
					<div class="block ori">
						<div class="origin29">origin29</div>
					</div>
					<div class="block ori">
						<div class="origin30">origin30</div>
					</div>
				</div>

<pre class="prettyprint">
.origin26 {transform: rotate3d(1,0,0,-60deg); transform-origin: 20% 0%;}
.origin27 {transform: rotate3d(1,0,0,-60deg); transform-origin: 20% 25%;}
.origin28 {transform: rotate3d(1,0,0,-60deg); transform-origin: 20% 50%;}
.origin29 {transform: rotate3d(1,0,0,-60deg); transform-origin: 20% 75%;}
.origin30 {transform: rotate3d(1,0,0,-60deg); transform-origin: 20% 100%;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin31">origin31</div>
					</div>
					<div class="block ori">
						<div class="origin32">origin32</div>
					</div>
					<div class="block ori">
						<div class="origin33">origin33</div>
					</div>
					<div class="block ori">
						<div class="origin34">origin34</div>
					</div>
					<div class="block ori">
						<div class="origin35">origin35</div>
					</div>
				</div>

<pre class="prettyprint">
.origin31 {transform: rotate3d(1,0,0,10deg); transform-origin: 100% 100%;}
.origin32 {transform: rotate3d(1,0,0,20deg); transform-origin: 100% 100%;}
.origin33 {transform: rotate3d(1,0,0,30deg); transform-origin: 100% 100%;}
.origin34 {transform: rotate3d(1,0,0,40deg); transform-origin: 100% 100%;}
.origin35 {transform: rotate3d(1,0,0,50deg); transform-origin: 100% 100%;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin36">origin36</div>
					</div>
					<div class="block ori">
						<div class="origin37">origin37</div>
					</div>
					<div class="block ori">
						<div class="origin38">origin38</div>
					</div>
					<div class="block ori">
						<div class="origin39">origin39</div>
					</div>
					<div class="block ori">
						<div class="origin40">origin40</div>
					</div>
				</div>

<pre class="prettyprint">
.origin36 {transform: rotate3d(1,0,0,-10deg); transform-origin: 100% 100%;}
.origin37 {transform: rotate3d(1,0,0,-20deg); transform-origin: 100% 100%;}
.origin38 {transform: rotate3d(1,0,0,-30deg); transform-origin: 100% 100%;}
.origin39 {transform: rotate3d(1,0,0,-40deg); transform-origin: 100% 100%;}
.origin40 {transform: rotate3d(1,0,0,-50deg); transform-origin: 100% 100%;}
</pre>

				<div class="list transform">
					<div class="block ori">
						<div class="origin41">origin41</div>
					</div>
					<div class="block ori">
						<div class="origin42">origin42</div>
					</div>
					<div class="block ori">
						<div class="origin43">origin43</div>
					</div>
					<div class="block ori">
						<div class="origin44">origin44</div>
					</div>
					<div class="block ori">
						<div class="origin45">origin45</div>
					</div>
				</div>

<pre class="prettyprint">
.origin41 {transform: rotate3d(0,1,0,10deg); transform-origin:0% 0%; }
.origin42 {transform: rotate3d(0,1,0,20deg); transform-origin:0% 0%; }
.origin43 {transform: rotate3d(0,1,0,30deg); transform-origin:0% 0%; }
.origin44 {transform: rotate3d(0,1,0,40deg); transform-origin:0% 0%; }
.origin45 {transform: rotate3d(0,1,0,50deg); transform-origin:0% 0%; }
</pre>	

				<div class="list transform">
					<div class="block ori">
						<div class="origin46">origin46</div>
					</div>
					<div class="block ori">
						<div class="origin47">origin47</div>
					</div>
					<div class="block ori">
						<div class="origin48">origin48</div>
					</div>
					<div class="block ori">
						<div class="origin49">origin49</div>
					</div>
					<div class="block ori">
						<div class="origin50">origin50</div>
					</div>
				</div>

<pre class="prettyprint">
.origin46 {transform: rotate3d(0,1,0,-10deg); transform-origin:0% 0%; }
.origin47 {transform: rotate3d(0,1,0,-20deg); transform-origin:0% 0%; }
.origin48 {transform: rotate3d(0,1,0,-30deg); transform-origin:0% 0%; }
.origin49 {transform: rotate3d(0,1,0,-40deg); transform-origin:0% 0%; }
.origin50 {transform: rotate3d(0,1,0,-50deg); transform-origin:0% 0%; }
</pre>

			</div>
		</main>

	</div>

    <? include_once('../footer.php'); ?>

    <script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>

</body>
</html>
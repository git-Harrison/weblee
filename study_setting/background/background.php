<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta name="author" content="weblee">
	<meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>WebLee</title>

	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/common.css">
	<link rel="stylesheet" href="../assets/css/sub_default.css">
	<link rel="stylesheet" href="css/background.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q33C7E9XM2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Q33C7E9XM2');
	</script>

</head>
<body class="sub html">

	<? include_once('../header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>BACKGROUND</h1> <!-- 제목 -->
				<p>CSS background 속성 상세페이지</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="html">
			<div class="container">

				<div class="list">
					<h2>background</h2>
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
								<td>background</td>
								<td>background : #000 url(경로) no-repeat top / cover</td>
								<td>배경 속기형 작성법</td>
							</tr>
							<tr>
								<td>background-image</td>
								<td>background-image : url("경로");</td>
								<td>배경 이미지 설정</td>
							</tr>
							<tr>
								<td>background-repeat</td>
								<td>background-repeat : no-repeat</td>
								<td>배경 이미지 반복 여부를 설정</td>
							</tr>
							<tr>
								<td>background-attachment</td>
								<td>background-attachment : fixed</td>
								<td>배경 이미지 고정 여부 설정</td>
							</tr>
							<tr>
								<td>background-color</td>
								<td>background-color : #fff</td>
								<td>백그라운색 색 설정</td>
							</tr>
							<tr>
								<td>background-origin</td>
								<td>background-origin :  content-box;</td>
								<td>배경 이미지의 중심 위치를 설정</td>
							</tr>
							<tr>
								<td>background-size</td>
								<td>background-size :  cover</td>
								<td>배경 사이즈 설정</td>
							</tr>
							<tr>
								<td>background-clip</td>
								<td>background-clip :  content-box</td>
								<td>배경의 적용 범위 설정</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list">
					<h2>Background Gradients</h2>
					<p>background : linear-gradient(direction, color1, color2, ......)</p>

					<table>
						<thead>
							<tr>
								<th>Value</th>
								<th>Sample</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>linear-gradient</td>
								<td>background : linear-gradient( )</td>
								<td>선형 그라데이션 백그라운들 설정합니다.</td>
							</tr>
							<tr>
								<td>radial-gradient</td>
								<td>background : radial-gradient( )</td>
								<td>원형 그라데이션 백그라운들 설정합니다.</td>
							</tr>
							<tr>
								<td>repeating-linear-gradient</td>
								<td>background : linear-gradient( )</td>
								<td>반복 선형 그라데이션 백그라운들 설정합니다.</td>
							</tr>
							<tr>
								<td>repeating-radial-gradient</td>
								<td>background : radial-gradient( )</td>
								<td>반복 원형 그라데이션 백그라운들 설정합니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list background">
					<div class="block gra1">
						<div class="gradient1">gradient1</div>
					</div>
					<div class="block gra1">
						<div class="gradient2">gradient2</div>
					</div>
					<div class="block gra1">
						<div class="gradient3">gradient3</div>
					</div>
					<div class="block gra1">
						<div class="gradient4">gradient4</div>
					</div>
				</div>
<pre class="prettyprint">
.gradient1 {background: linear-gradient(to top, #fbc2eb, #a18cd1);}
.gradient2 {background: linear-gradient(to right, #fbc2eb, #a18cd1);}
.gradient3 {background: linear-gradient(to bottom, #fbc2eb, #a18cd1);}
.gradient4 {background: linear-gradient(to left, #fbc2eb, #a18cd1);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient5">gradient5</div>
					</div>
					<div class="block gra1">
						<div class="gradient6">gradient6</div>
					</div>
					<div class="block gra1">
						<div class="gradient7">gradient7</div>
					</div>
					<div class="block gra1">
						<div class="gradient8">gradient8</div>
					</div>
				</div>
<pre class="prettyprint">
.gradient13 {background: linear-gradient(0deg, #fbc2eb, #a18cd1);}
.gradient14 {background: linear-gradient(40deg, #fbc2eb, #a18cd1);}
.gradient15 {background: linear-gradient(80deg, #fbc2eb, #a18cd1);}
.gradient16 {background: linear-gradient(120deg, #fbc2eb, #a18cd1);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient9">gradient9</div>
					</div>
					<div class="block gra1">
						<div class="gradient10">gradient10</div>
					</div>
					<div class="block gra1">
						<div class="gradient11">gradient11</div>
					</div>
					<div class="block gra1">
						<div class="gradient12">gradient12</div>
					</div>
				</div>
<pre class="prettyprint">
.gradient9 {background: -webkit-linear-gradient(left top, #fbc2eb, #a18cd1);}
.gradient10 {background: -webkit-linear-gradient(right top, #fbc2eb, #a18cd1);}
.gradient11 {background: -webkit-linear-gradient(left bottom, #fbc2eb, #a18cd1);}
.gradient12 {background: -webkit-linear-gradient(right bottom, #fbc2eb, #a18cd1);}
</pre>
	

				<div class="list background">
					<div class="block gra1">
						<div class="gradient13">gradient13</div>
					</div>
					<div class="block gra1">
						<div class="gradient14">gradient14</div>
					</div>
					<div class="block gra1">
						<div class="gradient15">gradient15</div>
					</div>
					<div class="block gra1">
						<div class="gradient16">gradient16</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient9 {background: -webkit-linear-gradient(left top, #fbc2eb, #a18cd1);}
.gradient10 {background: -webkit-linear-gradient(right top, #fbc2eb, #a18cd1);}
.gradient11 {background: -webkit-linear-gradient(left bottom, #fbc2eb, #a18cd1);}
.gradient12 {background: -webkit-linear-gradient(right bottom, #fbc2eb, #a18cd1);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient17">gradient17</div>
					</div>
					<div class="block gra1">
						<div class="gradient18">gradient18</div>
					</div>
					<div class="block gra1">
						<div class="gradient19">gradient19</div>
					</div>
					<div class="block gra1">
						<div class="gradient20">gradient20</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient17 {background: linear-gradient(140deg, #007adf, #00ecbc);}
.gradient18 {background: linear-gradient(140deg, #007adf, #00ecbc, #e14fad);}
.gradient19 {background: linear-gradient(140deg, #007adf, #00ecbc, #e14fad, #b334ef);}
.gradient20 {background: linear-gradient(140deg, #007adf, #00ecbc, #e14fad, #b334ef, #ff4e50, #ff9a44);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient21">gradient21</div>
					</div>
					<div class="block gra1">
						<div class="gradient22">gradient22</div>
					</div>
					<div class="block gra1">
						<div class="gradient23">gradient23</div>
					</div>
					<div class="block gra1">
						<div class="gradient24">gradient24</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient21 {background: linear-gradient(140deg, #007adf, #00ecbc, #e14fad 20%, #b334ef, #ff4e50, #ff9a44);}
.gradient22 {background: linear-gradient(140deg, #007adf, #00ecbc, #e14fad 40%, #b334ef, #ff4e50, #ff9a44);}
.gradient23 {background: linear-gradient(140deg, #007adf, #00ecbc, #e14fad 60%, #b334ef, #ff4e50, #ff9a44);}
.gradient24 {background: linear-gradient(140deg, #007adf, #00ecbc, #e14fad 80%, #b334ef, #ff4e50, #ff9a44);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient25">gradient25</div>
					</div>
					<div class="block gra1">
						<div class="gradient26">gradient26</div>
					</div>
					<div class="block gra1">
						<div class="gradient27">gradient27</div>
					</div>
					<div class="block gra1">
						<div class="gradient28">gradient28</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient25 {background: radial-gradient(#fc6076, #ff9a44);}
.gradient26 {background: radial-gradient(#fc6076, #ff9a44, #00ecbc);}
.gradient27 {background: radial-gradient(#fc6076, #ff9a44, #00ecbc, #b334ef);}
.gradient28 {background: radial-gradient(#fc6076, #ff9a44, #00ecbc, #b334ef, #ff4e50);}
</pre>


				<div class="list background">
					<div class="block gra2">
						<div class="gradient29">gradient29</div>
					</div>
					<div class="block gra2">
						<div class="gradient30">gradient30</div>
					</div>
					<div class="block gra2">
						<div class="gradient31">gradient31</div>
					</div>
					<div class="block gra2">
						<div class="gradient32">gradient32</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient29 {background: radial-gradient(#fc6076, #ff9a44 20%, #00ecbc, #b334ef, #ff4e50);}
.gradient30 {background: radial-gradient(#fc6076, #ff9a44 40%, #00ecbc, #b334ef, #ff4e50);}
.gradient31 {background: radial-gradient(#fc6076, #ff9a44 60%, #00ecbc, #b334ef, #ff4e50);}
.gradient32 {background: radial-gradient(#fc6076, #ff9a44 80%, #00ecbc, #b334ef, #ff4e50);}
</pre>


				<div class="list background on">
					<div class="block gra2">
						<div class="gradient33">gradient33</div>
					</div>
					<div class="block gra2">
						<div class="gradient34">gradient34</div>
					</div>
					<div class="block gra2">
						<div class="gradient35">gradient35</div>
					</div>
					<div class="block gra2">
						<div class="gradient36">gradient36</div>
					</div>
					<div class="block gra2">
						<div class="gradient37">gradient37</div>
					</div>
					<div class="block gra2">
						<div class="gradient38">gradient38</div>
					</div>
					<div class="block gra2">
						<div class="gradient39">gradient39</div>
					</div>
					<div class="block gra2">
						<div class="gradient40">gradient40</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient33 {background: radial-gradient(ellipse farthest-corner at center top, #f8bfa4 0%, #f33b3e 100%);}
.gradient34 {background: radial-gradient(ellipse farthest-corner at left top, #f8bfa4 0%, #f33b3e 100%);}
.gradient35 {background: radial-gradient(ellipse farthest-corner at right top, #f8bfa4 0%, #f33b3e 100%);}
.gradient36 {background: radial-gradient(ellipse farthest-corner at bottom left, #f8bfa4 0%, #f33b3e 100%);}
.gradient37 {background: radial-gradient(ellipse farthest-corner at bottom center, #f8bfa4 0%, #f33b3e 100%);}
.gradient38 {background: radial-gradient(ellipse farthest-corner at bottom right, #f8bfa4 0%, #f33b3e 100%);}
.gradient39 {background: radial-gradient(ellipse farthest-corner at left center, #f8bfa4 0%, #f33b3e 100%);}
.gradient40 {background: radial-gradient(ellipse farthest-corner at right center, #f8bfa4 0%, #f33b3e 100%);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient41">gradient41</div>
					</div>
					<div class="block gra1">
						<div class="gradient42">gradient42</div>
					</div>
					<div class="block gra1">
						<div class="gradient43">gradient43</div>
					</div>
					<div class="block gra1">
						<div class="gradient44">gradient44</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient41 {background: linear-gradient(0deg #d61058 50%, #49943 50%);}
.gradient42 {background: linear-gradient(30deg #d61058 50%, #49943 50%);}
.gradient43 {background: linear-gradient(90deg #d61058 50%, #49943 50%);}
.gradient44 {background: linear-gradient(180deg #d61058 50%, #49943 50%);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient45">gradient45</div>
					</div>
					<div class="block gra1">
						<div class="gradient46">gradient46</div>
					</div>
					<div class="block gra1">
						<div class="gradient47">gradient47</div>
					</div>
					<div class="block gra1">
						<div class="gradient48">gradient48</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient45 {background: repeating-linear-gradient(-45deg, #66a6ff 5px, #66a6ff 30px, #89f7f3 5px, #89f7f3 45px);}
.gradient46 {background: repeating-linear-gradient(-45deg, #66a6ff 10px, #66a6ff 30px, #89f7f3 5px, #89f7f3 45px);}
.gradient47 {background: repeating-linear-gradient(-45deg, #66a6ff 15px, #66a6ff 30px, #89f7f3 5px, #89f7f3 45px);}
.gradient48 {background: repeating-linear-gradient(-45deg, #66a6ff 25px, #66a6ff 30px, #89f7f3 5px, #89f7f3 45px);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient49">gradient49</div>
					</div>
					<div class="block gra1">
						<div class="gradient50">gradient50</div>
					</div>
					<div class="block gra1">
						<div class="gradient51">gradient51</div>
					</div>
					<div class="block gra1">
						<div class="gradient52">gradient52</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient49 {background: repeating-linear-gradient(-45deg, #66a6ff 5px, #66a6ff 30px, #89f7f3 35px, #89f7f3 45px);}
.gradient50 {background: repeating-linear-gradient(-45deg, #66a6ff 10px, #66a6ff 30px, #89f7f3 40px, #89f7f3 45px);}
.gradient51 {background: repeating-linear-gradient(-45deg, #66a6ff 15px, #66a6ff 30px, #89f7f3 45px, #89f7f3 45px);}
.gradient52 {background: repeating-linear-gradient(-45deg, #66a6ff 25px, #66a6ff 30px, #89f7f3 50px, #89f7f3 45px);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient53">gradient53</div>
					</div>
					<div class="block gra1">
						<div class="gradient54">gradient54</div>
					</div>
					<div class="block gra1">
						<div class="gradient55">gradient55</div>
					</div>
					<div class="block gra1">
						<div class="gradient56">gradient56</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient53 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 5px, #fbc2eb 10px);}
.gradient54 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 5px, #fbc2eb 15px);}
.gradient55 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 5px, #fbc2eb 20px);}
.gradient56 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 5px, #fbc2eb 25px);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient57">gradient57</div>
					</div>
					<div class="block gra1">
						<div class="gradient58">gradient58</div>
					</div>
					<div class="block gra1">
						<div class="gradient59">gradient59</div>
					</div>
					<div class="block gra1">
						<div class="gradient60">gradient60</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient57 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 10px, #fbc2eb 10px);}
.gradient58 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 15px, #fbc2eb 15px);}
.gradient59 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 20px, #fbc2eb 20px);}
.gradient60 {background: repeating-radial-gradient(#a18cd1, #a18cd1 5px, #fbc2eb 25px, #fbc2eb 25px);}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient61">gradient61</div>
					</div>
					<div class="block gra1">
						<div class="gradient62">gradient62</div>
					</div>
					<div class="block gra1">
						<div class="gradient63">gradient63</div>
					</div>
					<div class="block gra1">
						<div class="gradient64">gradient64</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient61 {background: linear-gradient(180deg, #30cfd0, #330867) fixed;}
.gradient62 {background: linear-gradient(180deg, #30cfd0, #330867) fixed;}
.gradient63 {background: linear-gradient(180deg, #30cfd0, #330867) fixed;}
.gradient64 {background: linear-gradient(180deg, #30cfd0, #330867) fixed;}
</pre>


				<div class="list background">
					<div class="block gra1">
						<div class="gradient65">gradient65</div>
					</div>
					<div class="block gra1">
						<div class="gradient66">gradient66</div>
					</div>
					<div class="block gra1">
						<div class="gradient67">gradient67</div>
					</div>
					<div class="block gra1">
						<div class="gradient68">gradient68</div>
					</div>
				</div>
<pre class="pre-show prettyprint linenums">
.gradient65 {background: radial-gradient(#30cfd0, #330867) fixed;}
.gradient66 {background: radial-gradient(#30cfd0, #330867) fixed;}
.gradient67 {background: radial-gradient(#30cfd0, #330867) fixed;}
.gradient68 {background: radial-gradient(#30cfd0, #330867) fixed;}
</pre>



			</div>
		</main>

	</div>

</body>
</html>

<? include_once('../footer.php'); ?>
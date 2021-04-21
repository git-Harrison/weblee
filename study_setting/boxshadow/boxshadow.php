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
	<link rel="stylesheet" href="css/boxshadow.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q33C7E9XM2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Q33C7E9XM2');
	</script>
</head>
<body class="sub css">

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
					<p>box-shadow : {h-shadow} {v-shadow} {blur} {spread} {color} {inest} / none;</p>
				</div>

				<div class="list">
					<h2>translate</h2>
					<table>
						<thead>
							<tr>
								<th>Porperty</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>h-shadow</td>
								<td>그림자의 수평(X)축 거리를 나타냅니다.</td>
							</tr>
							<tr>
								<td>v-shadow</td>
								<td>그림자의 수평(Y)축 거리를 나타냅니다.</td>
							</tr>
							<tr>
								<td>blur</td>
								<td>그림자의 흐림정도를 나타냅니다.</td>
							</tr>
							<tr>
								<td>spread</td>
								<td>그림자의 거리 나타냅니다.</td>
							</tr>
							<tr>
								<td>color</td>
								<td>그림자의 색을 나타냅니다.</td>
							</tr>
							<tr>
								<td>inest</td>
								<td>그림자의 효과를 내부로 나타냅니다.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="list boxshadow">
					<div class="block sha1">
						<div class="shadow01">shadow01</div>
					</div>
					<div class="block sha1">
						<div class="shadow02">shadow02</div>
					</div>
					<div class="block sha1">
						<div class="shadow03">shadow03</div>
					</div>
					<div class="block sha1">
						<div class="shadow04">shadow04</div>
					</div>
					<div class="block sha1">
						<div class="shadow05">shadow05</div>
					</div>
					<div class="block sha1">
						<div class="shadow06">shadow06</div>
					</div>
					<div class="block sha1">
						<div class="shadow07">shadow07</div>
					</div>
					<div class="block sha1">
						<div class="shadow08">shadow08</div>
					</div>
					<div class="block sha1">
						<div class="shadow09">shadow09</div>
					</div>
					<div class="block sha1">
						<div class="shadow10">shadow10</div>
					</div>
				</div>

<pre class="prettyprint">
.shadow01 {box-shadow: 0px 0px 5px rgba(0,0,0,0.8);}
.shadow02 {box-shadow: 2px 2px 5px rgba(0,0,0,0.8);}
.shadow03 {box-shadow: 4px 4px 5px rgba(0,0,0,0.8);}
.shadow04 {box-shadow: 6px 6px 5px rgba(0,0,0,0.8);}
.shadow05 {box-shadow: 8px 8px 5px rgba(0,0,0,0.8);}
.shadow06 {box-shadow: 10px 10px 5px rgba(0,0,0,0.8);}
.shadow07 {box-shadow: 12px 12px 5px rgba(0,0,0,0.8);}
.shadow08 {box-shadow: 14px 14px 5px rgba(0,0,0,0.8);}
.shadow09 {box-shadow: 16px 16px 5px rgba(0,0,0,0.8);}
.shadow10 {
animation-name: shadow10;
animation-duration: 1s;
animation-iteration-count: 100;
animation-timing-function: ease-in-out;
}
@keyframes shadow10 {
0% {box-shadow: 0px 0px 5px rgba(0,0,0,0.8);}
50% {box-shadow: 18px 18px 5px rgba(0,0,0,0.8);}
100% {box-shadow: 0px 0px 5px rgba(0,0,0,0.8);}
}
</pre>
	
				<div class="list boxshadow">
					<div class="block sha2">
						<div class="shadow11">shadow11</div>
					</div>
					<div class="block sha2">
						<div class="shadow12">shadow12</div>
					</div>
					<div class="block sha2">
						<div class="shadow13">shadow13</div>
					</div>
					<div class="block sha2">
						<div class="shadow14">shadow14</div>
					</div>
					<div class="block sha2">
						<div class="shadow15">shadow15</div>
					</div>
					<div class="block sha2">
						<div class="shadow16">shadow16</div>
					</div>
					<div class="block sha2">
						<div class="shadow17">shadow17</div>
					</div>
					<div class="block sha2">
						<div class="shadow18">shadow18</div>
					</div>
					<div class="block sha2">
						<div class="shadow19">shadow19</div>
					</div>
					<div class="block sha2">
						<div class="shadow20">shadow20</div>
					</div>
				</div>

<pre class="prettyprint">
.shadow11 {box-shadow: 4px 4px 0px rgba(0,0,0,0.8);}
.shadow12 {box-shadow: 4px 4px 3px rgba(0,0,0,0.8);}
.shadow13 {box-shadow: 4px 4px 6px rgba(0,0,0,0.8);}
.shadow14 {box-shadow: 4px 4px 9px rgba(0,0,0,0.8);}
.shadow15 {box-shadow: 4px 4px 12px rgba(0,0,0,0.8);}
.shadow16 {box-shadow: 4px 4px 15px rgba(0,0,0,0.8);}
.shadow17 {box-shadow: 4px 4px 18px rgba(0,0,0,0.8);}
.shadow18 {box-shadow: 4px 4px 21px rgba(0,0,0,0.8);}
.shadow19 {box-shadow: 4px 4px 24px rgba(0,0,0,0.8);}
.shadow20 {
animation-name: shadow20;
animation-duration: 1s;
animation-iteration-count: 100;
animation-timing-function: ease-in-out;
}
@keyframes shadow20 {
0% {box-shadow: 4px 4px 0px rgba(0,0,0,0.8);}
50% {box-shadow: 4px 4px 27px rgba(0,0,0,0.8);}
100% {box-shadow: 4px 4px 0px rgba(0,0,0,0.8);}
}
</pre>
				<div class="list boxshadow">
					<div class="block sha3">
						<div class="shadow21">shadow21</div>
					</div>
					<div class="block sha3">
						<div class="shadow22">shadow22</div>
					</div>
					<div class="block sha3">
						<div class="shadow23">shadow23</div>
					</div>
					<div class="block sha3">
						<div class="shadow24">shadow24</div>
					</div>
					<div class="block sha3">
						<div class="shadow25">shadow25</div>
					</div>
					<div class="block sha3">
						<div class="shadow26">shadow26</div>
					</div>
					<div class="block sha3">
						<div class="shadow27">shadow27</div>
					</div>
					<div class="block sha3">
						<div class="shadow28">shadow28</div>
					</div>
					<div class="block sha3">
						<div class="shadow29">shadow29</div>
					</div>
					<div class="block sha3">
						<div class="shadow30">shadow30</div>
					</div>
				</div>

<pre class="prettyprint">
.block.sha2 {background-color: #ffccbc;}
.block.sha2 > div {transition: all 0.3s ease;}
.block.sha2 > div:hover {box-shadow: none;}
.shadow21 {box-shadow: 10px 10px 0px 5px rgba(0,0,0,0.8);}
.shadow22 {box-shadow: 12px 12px 0px 5px rgba(0,0,0,0.8);}
.shadow23 {box-shadow: 14px 14px 0px 5px rgba(0,0,0,0.8);}
.shadow24 {box-shadow: 16px 16px 0px 5px rgba(0,0,0,0.8);}
.shadow25 {box-shadow: 18px 18px 0px 5px rgba(0,0,0,0.8);}
.shadow26 {box-shadow: -10px -10px 0px 5px rgba(0,0,0,0.8);}
.shadow27 {box-shadow: -12px -12px 0px 5px rgba(0,0,0,0.8);}
.shadow28 {box-shadow: -14px -14px 0px 5px rgba(0,0,0,0.8);}
.shadow29 {box-shadow: -16px -16px 0px 5px rgba(0,0,0,0.8);}
.shadow30 {box-shadow: -18px -18px 0px 5px rgba(0,0,0,0.8);}
</pre>
				<div class="list boxshadow">
					<div class="block sha4">
						<div class="shadow31">shadow31</div>
					</div>
					<div class="block sha4">
						<div class="shadow32">shadow32</div>
					</div>
					<div class="block sha4">
						<div class="shadow33">shadow33</div>
					</div>
					<div class="block sha4">
						<div class="shadow34">shadow34</div>
					</div>
					<div class="block sha4">
						<div class="shadow35">shadow35</div>
					</div>
					<div class="block sha4">
						<div class="shadow36">shadow36</div>
					</div>
					<div class="block sha4">
						<div class="shadow37">shadow37</div>
					</div>
					<div class="block sha4">
						<div class="shadow38">shadow38</div>
					</div>
					<div class="block sha4">
						<div class="shadow39">shadow39</div>
					</div>
					<div class="block sha4">
						<div class="shadow40">shadow40</div>
					</div>
				</div>

<pre class="prettyprint">
.block.sha3 {background-color: #8c9eff;}
.shadow31 {box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.8)}
.shadow32 {box-shadow: 0px 0px 0px 3px rgba(0,0,0,0.8)}
.shadow33 {box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.8)}
.shadow34 {box-shadow: 0px 0px 0px 7px rgba(0,0,0,0.8)}
.shadow35 {box-shadow: 0px 0px 0px 9px rgba(0,0,0,0.8)}
.shadow36 {box-shadow: 0px 0px 0px 11px rgba(0,0,0,0.8)}
.shadow37 {box-shadow: 0px 0px 0px 13px rgba(0,0,0,0.8)}
.shadow38 {box-shadow: 0px 0px 0px 15px rgba(0,0,0,0.8)}
.shadow39 {box-shadow: 0px 0px 0px 17px rgba(0,0,0,0.8)}
.shadow40 {box-shadow: 0px 0px 0px 19px rgba(0,0,0,0.8)}
</pre>

				<div class="list boxshadow">
					<div class="block sha5">
						<div class="shadow41">shadow41</div>
					</div>
					<div class="block sha5">
						<div class="shadow42">shadow42</div>
					</div>
					<div class="block sha5">
						<div class="shadow43">shadow43</div>
					</div>
					<div class="block sha5">
						<div class="shadow44">shadow44</div>
					</div>
					<div class="block sha5">
						<div class="shadow45">shadow45</div>
					</div>
					<div class="block sha5">
						<div class="shadow46">shadow46</div>
					</div>
					<div class="block sha5">
						<div class="shadow47">shadow47</div>
					</div>
					<div class="block sha5">
						<div class="shadow48">shadow48</div>
					</div>
					<div class="block sha5">
						<div class="shadow49">shadow49</div>
					</div>
					<div class="block sha5">
						<div class="shadow50">shadow50</div>
					</div>
				</div>

<pre class="prettyprint">
.block.sha4 {background-color: #b2ebf2;}
.shadow41 {box-shadow: 0px 0px 3px 1px rgba(0,0,0,0.8)}
.shadow42 {box-shadow: 0px 0px 3px 3px rgba(0,0,0,0.8)}
.shadow43 {box-shadow: 0px 0px 3px 5px rgba(0,0,0,0.8)}
.shadow44 {box-shadow: 0px 0px 3px 7px rgba(0,0,0,0.8)}
.shadow45 {box-shadow: 0px 0px 3px 9px rgba(0,0,0,0.8)}
.shadow46 {box-shadow: 0px 0px 3px 11px rgba(0,0,0,0.8)}
.shadow47 {box-shadow: 0px 0px 3px 13px rgba(0,0,0,0.8)}
.shadow48 {box-shadow: 0px 0px 3px 15px rgba(0,0,0,0.8)}
.shadow49 {box-shadow: 0px 0px 3px 17px rgba(0,0,0,0.8)}
.shadow50 {box-shadow: 0px 0px 3px 19px rgba(0,0,0,0.8)}
</pre>

				<div class="list boxshadow">
					<div class="block sha6">
						<div class="shadow51">shadow51</div>
					</div>
					<div class="block sha6">
						<div class="shadow52">shadow52</div>
					</div>
					<div class="block sha6">
						<div class="shadow53">shadow53</div>
					</div>
					<div class="block sha6">
						<div class="shadow54">shadow54</div>
					</div>
					<div class="block sha6">
						<div class="shadow55">shadow55</div>
					</div>
					<div class="block sha6">
						<div class="shadow56">shadow56</div>
					</div>
					<div class="block sha6">
						<div class="shadow57">shadow57</div>
					</div>
					<div class="block sha6">
						<div class="shadow58">shadow58</div>
					</div>
					<div class="block sha6">
						<div class="shadow59">shadow59</div>
					</div>
					<div class="block sha6">
						<div class="shadow60">shadow60</div>
					</div>
				</div>

<pre class="prettyprint">
.block.sha5 {background-color: #ff1744;}
.shadow51 {box-shadow: 0px 0px 5px -3px rgba(0,0,0,0.8)}
.shadow52 {box-shadow: 0px 2px 5px -3px rgba(0,0,0,0.8)}
.shadow53 {box-shadow: 0px 4px 5px -3px rgba(0,0,0,0.8)}
.shadow54 {box-shadow: 0px 6px 5px -3px rgba(0,0,0,0.8)}
.shadow55 {box-shadow: 0px 8px 5px -3px rgba(0,0,0,0.8)}
.shadow56 {box-shadow: 0px 10px 5px -3px rgba(0,0,0,0.8)}
.shadow57 {box-shadow: 0px 12px 5px -3px rgba(0,0,0,0.8)}
.shadow58 {box-shadow: 0px 14px 5px -3px rgba(0,0,0,0.8)}
.shadow59 {box-shadow: 0px 16px 5px -3px rgba(0,0,0,0.8)}
.shadow60 {box-shadow: 0px 18px 5px -3px rgba(0,0,0,0.8)}
</pre>

				<div class="list boxshadow">
					<div class="block sha7">
						<div class="shadow61">shadow61</div>
					</div>
					<div class="block sha7">
						<div class="shadow62">shadow62</div>
					</div>
					<div class="block sha7">
						<div class="shadow63">shadow63</div>
					</div>
					<div class="block sha7">
						<div class="shadow64">shadow64</div>
					</div>
					<div class="block sha7">
						<div class="shadow65">shadow65</div>
					</div>
					<div class="block sha7">
						<div class="shadow66">shadow66</div>
					</div>
					<div class="block sha7">
						<div class="shadow67">shadow67</div>
					</div>
					<div class="block sha7">
						<div class="shadow68">shadow68</div>
					</div>
					<div class="block sha7">
						<div class="shadow69">shadow69</div>
					</div>
					<div class="block sha7">
						<div class="shadow70">shadow70</div>
					</div>
				</div>

<pre class="prettyprint">
.block.sha6 {background-color: #bcaaa4;}
.shadow61 {box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.8) inset}
.shadow62 {box-shadow: 0px 0px 6px 2px rgba(0,0,0,0.8) inset}
.shadow63 {box-shadow: 0px 0px 7px 3px rgba(0,0,0,0.8) inset}
.shadow64 {box-shadow: 0px 0px 8px 4px rgba(0,0,0,0.8) inset}
.shadow65 {box-shadow: 0px 0px 9px 5px rgba(0,0,0,0.8) inset}
.shadow66 {box-shadow: 0px 0px 10px 6px rgba(0,0,0,0.8) inset}
.shadow67 {box-shadow: 0px 0px 11px 7px rgba(0,0,0,0.8) inset}
.shadow68 {box-shadow: 0px 0px 12px 8px rgba(0,0,0,0.8) inset}
.shadow69 {box-shadow: 0px 0px 13px 9px rgba(0,0,0,0.8) inset}
.shadow70 {box-shadow: 0px 0px 14px 10px rgba(0,0,0,0.8) inset}
</pre>

				<div class="list boxshadow">
					<div class="block sha8">
						<div class="sample01">sample01</div>
					</div>
					<div class="block sha8">
						<div class="sample02">sample02</div>
					</div>
					<div class="block sha8">
						<div class="sample03">sample03</div>
					</div>
					<div class="block sha8">
						<div class="sample04">sample04</div>
					</div>
					<div class="block sha8">
						<div class="sample05">sample05</div>
					</div>
					<div class="block sha8">
						<div class="sample06">sample06</div>
					</div>
					<div class="block sha8">
						<div class="sample07">sample07</div>
					</div>
					<div class="block sha8">
						<div class="sample08">sample08</div>
					</div>
					<div class="block sha8">
						<div class="sample09">sample09</div>
					</div>
					<div class="block sha8">
						<div class="sample10">sample10</div>
					</div>
				</div>

<pre class="prettyprint">
.block.sha8 {background:#f57c00;}
.block.sha8 > div {transition: all 0.3s ease-in-out;}
.block.sha8:hover .sample01 {box-shadow: 140px 0 0 0 rgba(0,0,0,0.8) inset;}
.block.sha8:hover .sample02 {box-shadow: -140px 0 0 0 rgba(0,0,0,0.8) inset;}
.block.sha8:hover .sample03 {box-shadow: 0 140px 0 0 rgba(0,0,0,0.8) inset;}
.block.sha8:hover .sample04 {box-shadow: 0 -140px 0 0 rgba(0,0,0,0.8) inset;}
.block.sha8:hover .sample05 {box-shadow: 0 0 0 15px rgba(0,0,0,0.8) inset;}
.block.sha8:hover .sample06 {box-shadow: 0 0 15px 0 rgba(0,0,0,0.8) inset;}
.block.sha8:hover .sample07 {
	box-shadow: 
	140px 0 0 0 rgba(0,0,0,0.8) inset,
	-140px 0 0 0 rgba(0,0,0,0.8) inset;
}
.block.sha8:hover .sample08 {
	box-shadow: 
	0 140px 0 0 rgba(0,0,0,0.8) inset,
	0 -140px 0 0 rgba(0,0,0,0.8) inset;
}
.block.sha8:hover .sample09 {
	box-shadow: 
	0 0 0 15px rgba(0,0,0,0.8) inset,
	0 0 0 70px rgba(0,0,0,0.8) inset;
}
.block.sha8:hover .sample10 {
	box-shadow: 
	0 0 0 10px rgba(0,0,0,0.1) inset,
	0 0 0 20px rgba(0,0,0,0.1) inset,
	0 0 0 30px rgba(0,0,0,0.1) inset,
	0 0 0 40px rgba(0,0,0,0.1) inset,
	0 0 0 50px rgba(0,0,0,0.1) inset,
	0 0 0 60px rgba(0,0,0,0.1) inset,
	0 0 0 70px rgba(0,0,0,0.1) inset;
}
</pre>
				<br><br>

				<div class="list codepen">

					<h2>Shadow Effect1</h2>
					<p data-height="400" data-theme-id="0" data-slug-hash="qYwPYy" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="Shadow Effect1" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/qYwPYy/">Shadow Effect1</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

					<br><br>
					<h2>Circle Hover Effect</h2>
					<p><p data-height="600" data-theme-id="0" data-slug-hash="jxoBrp" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="Box-shadow Circle" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/jxoBrp/">Box-shadow Circle</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script></p>
					
					<br><br>
					<h2>IMG Hover Effect1</h2>
					<p><p data-height="600" data-theme-id="0" data-slug-hash="BxeRpb" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="Hover Effect-opacity" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/BxeRpb/">Hover Effect-opacity</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script></p>

					<br><br>
					<h2>IMG Hover Effect2</h2>
					<p><p data-height="600" data-theme-id="0" data-slug-hash="eraEzX" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="IMG Hover Effect2" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/eraEzX/">IMG Hover Effect2</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script></p>

					<br><br>
					<h2>IMG Hover Effect3</h2>
					<p><p data-height="600" data-theme-id="0" data-slug-hash="KRLvXr" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="Hover Effect-Bottom" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/KRLvXr/">Hover Effect-Bottom</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script></p>

					<br><br>
					<h2>IMG Hover Effect4</h2>
					<p><p data-height="600" data-theme-id="0" data-slug-hash="qYGXya" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="Hover Effect-scale" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/qYGXya/">Hover Effect-scale</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script></p>

					<br><br>
					<h2>IMG Hover Effect5</h2>
						<p><p data-height="600" data-theme-id="0" data-slug-hash="MGdEoy" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="Hover Effect-translatey" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/MGdEoy/">Hover Effect-translatey</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script></p>
					
					<br><br>
					<h2>IMG Hover Effect6</h2>
					<p><p data-height="600" data-theme-id="0" data-slug-hash="XqweBg" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="Hover Effect-Rotate" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/XqweBg/">Hover Effect-Rotate</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script></p>

					<br><br>
					<h2>IMG Hover Effect7</h2>	
					<p data-height="600" data-theme-id="0" data-slug-hash="ZRzZOJ" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="ZRzZOJ" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/ZRzZOJ/">ZRzZOJ</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
					
					<br><br>
					<h2>IMG Hover Effect8</h2>	
					<p data-height="600" data-theme-id="0" data-slug-hash="aKOxQL" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="image hover3" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/aKOxQL/">image hover3</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>

					<br><br>
					<h2>IMG Hover Effect9</h2>
					<p data-height="600" data-theme-id="0" data-slug-hash="jKPRGO" data-default-tab="result" data-user="wognsl305" data-embed-version="2" data-pen-title="image hover2" class="codepen">See the Pen <a href="https://codepen.io/wognsl305/pen/jKPRGO/">image hover2</a> by wognsl305 (<a href="https://codepen.io/wognsl305">@wognsl305</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
				</div>


			</div>
		</main>

	</div>
	
	<? include_once('../footer.php'); ?>

    <script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>

</body>
</html>
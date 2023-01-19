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
<body class="sub css" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<? include_once('../header.php'); ?>

<div class="wrap">

    <header>
        <div class="title">
            <h1>CSS</h1> <!-- 제목 -->
            <p>reset CSS</p> <!-- 부제목 -->
        </div>
    </header>

    <main class="html">
        <div class="container">

            <div class="list">
                <h2>RESET CSS</h2>
                <p>현재 AdorableCSS에서 제공하는 Reset CSS는 다음과 같습니다.</p>
            </div>

<pre class="flex">
    <code><span class="pre_class">*</span> {
    <span class="css">margin</span>: <span class="css_detail">0;</span>
    <span class="css">padding</span>: <span class="css_detail">0;</span>
    <span class="css">box-sizing</span>: <span class="css_detail">border-box;</span>
    <span class="css">font</span>: <span class="css_detail">inherit;</span>
    <span class="css">color</span>: <span class="css_detail">inherit;</span>
    <span class="css">flex-shrink</span>: <span class="css_detail">0;</span>
}
    </code>
    <div class="flex_tag css">CSS</div>
</pre>

            <div class="list bar">
                <p>
                    모든 태그에 적용된 서식에 margin과 padding을 제거하는 방식으로 시작된 이 CSS Reset이라 방법은 브라우저의 기본요소의 디자인을 모두 없애자는 것입니다.
                    이렇게 모두 0으로 만드는 방법을 통해서 브라우저들의 서식을 하나로 통일을 하려고 했습니다.
                    당시 브라우저에서 * {...} Selector를 이용하여 CSS를 초기화를 하는 부분에는 성능과 출력의 이슈가 있어서 조금씩 정교하게 CSS를 만들어가면서 여러가지 버전의 Reset이 만들어졌는데 그중 에릭마이어의 CSS Reset이 가장 유명한 CSS가 되었습니다. 10년도 넘은 지금도 CSS Reset를 검색하면 최상위로 나타나는 자료이며 아직도 쓰이고 있습니다.
                </p>
            </div>

            <div class="list">
                <h2>Modern CSS Reset</h2>
                <p>프레임워크 기반의 개발방식과 시멘틱 태그의 중요성이 상대적으로 낮아진 요즘 normalize.css에 있는 &lt;sup&gt; &lt;sub&gt; &lt;details&gt; &lt;summary&gt; 등 쓰이지 않는 태그들을 위해서 크로스브라우징을 해줄 필요가 있을까요? 라는 생각으로 최소한의 CSS Reset만 사용하면서 box-sizing: border-box, table { border-collapse: collapse; } 와 같은 기본보다 좋은 스펙들을 default로 만들어주는 형태의 최소한의 CSS Reset 형태를 추구하고 있는 것 같습니다.</p>
            </div>

            <div class="list bar">
                <p>minireset.css
                    <br>
                    <a href="https://github.com/jgthms/minireset.css" target="_blank">https://github.com/jgthms/minireset.css</a>
                </p>
            </div>

<pre class="flex">
<code><span class="code_ps">/*! minireset.css v0.0.6 | MIT License | github.com/jgthms/minireset.css */</span>
<span class="pre_class">blockquote, body, dd, dl, dt, fieldset, figure, h1, h2, h3, h4, h5, h6, hr, html, iframe, legend, li, ol, p, pre, textarea, ul</span> {
    <span class="css">margin</span>: <span class="css_detail">0;</span>
    <span class="css">padding</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">h1, h2, h3, h4, h5, h6</span> {
    <span class="css">font-size</span>: <span class="css_detail">100%;</span>
    <span class="css">font-weight</span>: <span class="css_detail">400;</span>
}
<span class="pre_class">ul</span> {
    <span class="css">list-style</span>: <span class="css_detail">none;</span>
}
<span class="pre_class">button, input, select</span> {
    <span class="css">margin</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">html</span> {
    <span class="css">box-sizing</span>: <span class="css_detail">border-box;</span>
}
<span class="pre_class">*, :after, :before</span> {
    <span class="css">box-sizing</span>: <span class="css_detail">inherit;</span>
}
<span class="pre_class">img, video</span> {
    <span class="css">height</span>: <span class="css_detail">auto;</span>
    <span class="css">max-width</span>: <span class="css_detail">100%;</span>
}
<span class="pre_class">border</span> {
    <span class="css">box-sizing</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">table</span> {
    <span class="css">border-collapse</span>: <span class="css_detail">collapse;</span>
    <span class="css">border-spacing</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">td, th</span> {
    <span class="css">padding</span>: <span class="css_detail">0;</span>
}
    </code>
    <div class="flex_tag css">CSS</div>
</pre>

            <div class="list" style="margin-bottom: 12px;">
                <h2>실전에서는 어떻게 쓰고 있나?</h2>
                <p>각 회사 홈페이지 대문을 기준으로 가져왔습니다. 이게 이 회사에서 공통적으로 쓰고 있는 그런거 아닙니다. 그냥 공통점이나 어떠한 흐름이 있을지 파악을 해보고자 가져온 자료이며 실제로 앞서 소개드린 오픈소스와 크게 더 나은 것은 같은 부분은 없고 대동소이한 형태를 이루고 있습니다.</p>
            </div>
            <div class="list bar">
                <p>결론부터 말하자면 minireset 과 유사한 형태로 Normalize보다는 Reset이지만 일부만 사용하고 있는 형태이며 대부분 자기들의 CSS이며 라이브러리를 쓰는 곳은 인프런 정도가 minireset을 쓰고 있는 것을 확인했습니다.</p>
            </div>

            <div class="list" style="margin-bottom: 12px; margin-top: 40px;">
                <h2>Apple.com</h2>
            </div>
<pre class="flex">
<code>
<span class="pre_class">html</span> {
    <span class="css">-ms-text-size-adjust</span>: <span class="css_detail">100%;</span>
    <span class="css">-webkit-text-size-adjust</span>: <span class="css_detail">100%;</span>
}
<span class="pre_class">abbr, blockquote, body, button, dd, dl, dt, fieldset, figure, form, h1, h2, h3, h4, h5, h6, hgroup, input, legend, li, ol, p, pre, ul</span> {
    <span class="css">margin</span>: <span class="css_detail">0;</span>
    <span class="css">padding</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">address, caption, code, figcaption, pre, th</span> {
    <span class="css">font-size</span>: <span class="css_detail">1em;</span>
    <span class="css">font-weight</span>: <span class="css_detail">400;</span>
    <span class="css">font-style</span>: <span class="css_detail">normal;</span>
}
<span class="pre_class">fieldset, iframe</span> {
    <span class="css">border</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">caption, th</span> {
    <span class="css">text-align</span>: <span class="css_detail">left;</span>
}
<span class="pre_class">table</span> {
    <span class="css">border-collapse</span>: <span class="css_detail">collapse;</span>
    <span class="css">border-spacing</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">details, main, summary</span> {
    <span class="css">display</span>: <span class="css_detail">block;</span>
}
<span class="pre_class">audio, canvas, progress, video</span> {
    <span class="css">vertical-align</span>: <span class="css_detail">initial;</span>
}
<span class="pre_class">button</span> {
    <span class="css">background</span>: <span class="css_detail">none;</span>
    <span class="css">border</span>: <span class="css_detail">0;</span>
    <span class="css">box-sizing</span>: <span class="css_detail">initial;</span>
    <span class="css">color</span>: <span class="css_detail">inherit;</span>
    <span class="css">cursor</span>: <span class="css_detail">pointer;</span>
    <span class="css">font</span>: <span class="css_detail">inherit;</span>
    <span class="css">line-height</span>: <span class="css_detail">inherit;</span>
    <span class="css">overflow</span>: <span class="css_detail">visible;</span>
    <span class="css">vertical-align</span>: <span class="css_detail">inherit;</span>
}
<span class="pre_class">button:disabled</span> {
    <span class="css">cursor</span>: <span class="css_detail">default;</span>
}
<span class="pre_class">:focus</span> {
    <span class="css">outline</span>: <span class="css_detail">4px solid rgba(0, 125, 250, .6);</span>
    <span class="css">outline-offset</span>: <span class="css_detail">1px;</span>
}
<span class="pre_class">:focus[data-focus-method=mouse]:not(input):not(textarea):not(select), :focus[data-focus-method=touch]:not(input):not(textarea):not(select)</span> {
    <span class="css">outline</span>: <span class="css_detail">none;</span>
}
<span class="pre_class">::-moz-focus-inner</span> {
    <span class="css">border</span>: <span class="css_detail">0;</span>
    <span class="css">padding</span>: <span class="css_detail">0;</span>
}
    </code>
    <div class="flex_tag css">CSS</div>
</pre>

            <div class="list" style="margin-bottom: 12px; margin-top: 40px;">
                <h2>Google.com</h2>
            </div>
<pre class="flex">
<code>
<span class="pre_class">html, body, h1, input, select</span> {
    <span class="css">font-family</span>: <span class="css_detail">'Apple SD Gothic Neo', arial, sans-serif;</span>
    <span class="css">-webkit-text-size-adjust</span>: <span class="css_detail">100%;</span>
}
<span class="pre_class">body, h1</span> {
    <span class="css">font-size</span>: <span class="css_detail">14px;</span>
}
<span class="pre_class">h1</span> {
    <span class="css">font-weight</span>: <span class="css_detail">normal;</span>
    <span class="css">margin</span>: <span class="css_detail">0;</span>
    <span class="css">padding</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">h3</span> {
    <span class="css">font-weight</span>: <span class="css_detail">normal;</span>
    <span class="css">margin</span>: <span class="css_detail">0;</span>
    <span class="css">padding</span>: <span class="css_detail">0;</span>
    <span class="css">font-size</span>: <span class="css_detail">20px;</span>
    <span class="css">line-height</span>: <span class="css_detail">1.3;</span>
}
<span class="pre_class">body </span> {
    <span class="css">margin</span>: <span class="css_detail">0;</span>
    <span class="css">background</span>: <span class="css_detail">#fff;</span>
    <span class="css">color</span>: <span class="css_detail">#202124;</span>
}
<span class="pre_class">a</span> {
    <span class="css">color</span>: <span class="css_detail">#1a0dab;</span>
    <span class="css">text-decoration</span>: <span class="css_detail">#none;</span>
    <span class="css">-webkit-tap-highlight-color</span>: <span class="css_detail">rgba(0, 0, 0, .10);</span>
}
<span class="pre_class">a:visited</span> {
    <span class="css">color</span>: <span class="css_detail">#609;</span>
}
<span class="pre_class">a:hover</span> {
    <span class="css">text-decoration</span>: <span class="css_detail">underline;</span>
}
<span class="pre_class">cite, cite a:link, cite a:visited</span> {
    <span class="css">color</span>: <span class="css_detail">#202124;</span>
    <span class="css">font-style</span>: <span class="css_detail">normal;</span>
}
<span class="pre_class">button</span> {
    <span class="css">margin</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">ol li</span> {
    <span class="css">list-style</span>: <span class="css_detail">none;</span>
}
<span class="pre_class">ol, ul, li</span> {
    <span class="css">margin</span>: <span class="css_detail">0;</span>
    <span class="css">padding</span>: <span class="css_detail">0;</span>
}
<span class="pre_class">input </span> {
    <span class="css">font-size</span>: <span class="css_detail">14px;</span>
}
<span class="pre_class">em</span> {
    <span class="css">font-weight</span>: <span class="css_detail">bold;</span>
    <span class="css">font-style</span>: <span class="css_detail">normal;</span>
}
    </code>
    <div class="flex_tag css">CSS</div>
</pre>
        </div>
    </main>

</div>

<? include_once('../footer.php'); ?>

<script src="../assets/js/jquery-3.4.1.js"></script>
<script src="../assets/js/common.js"></script>

</body>
</html>
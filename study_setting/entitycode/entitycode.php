<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
    <meta name="author" content="weblee">
    <meta name="keywords" content="웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp,EntityCode">
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

<style>
    tr > td:first-child {
        font-size: 28px;
    }
</style>


<? include_once('../header.php'); ?>

<div class="wrap">

    <header>
        <div class="title">
            <h1>엔티티 코드 (Entity Code)</h1> <!-- 제목 -->
            <p>엔티티 코드 레퍼런스(Entity Code reference)</p> <!-- 부제목 -->
        </div>
    </header>

    <main class="html">
        <div class="container">

            <div class="list">
                <h2>엔티티 코드 (Entity Code)</h2>
                <p>
                    <span>엔티티 코드란 Html 문서에서 특수 문자를 입력하기 위해 사용하는 코드 입니다.</span><br>
                    <span>요즘은 UTF-8을 주로 이용하기 때문에 특수문자가 깨지지 않지만 W3C는 엔티티 코드가 아닌 특수 문자는 오류로 인식하기 때문에 특수 문자는 엔티티 코드로 작성하는 것이 좋습니다.</span> <a href="https://entitycode.com/" target="_blank">( Entity Code 바로가기 )</a>
                </p>
            </div>

            <div class="list">
                <h2>사용 빈도수가 높은 엔티티 코드 정리</h2>
                <table>
                    <thead>
                        <tr>
                            <th>엔티티 코드</th>
                            <th>문자식 표현(Entity Code) </th>
                            <th>숫자식 표현(Entity Number)</th>
                            <th>설명 (Description)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&copy;</td>
                            <td><xmp>&copy;</xmp></td>
                            <td><xmp>&#169;</xmp></td>
                            <td>Copyright</td>
                        </tr>
                        <tr>
                            <td>&#124;</td>
                            <td></td>
                            <td><xmp>&#124;</xmp></td>
                            <td>Vertical Bar</td>
                        </tr>
                        <tr>
                            <td>&middot;</td>
                            <td><xmp>&middot;</xmp></td>
                            <td><xmp>&#183;</xmp></td>
                            <td>Medium List Dot</td>
                        </tr>
                        <tr>
                            <td>&uarr;</td>
                            <td><xmp>&uarr;</xmp></td>
                            <td><xmp>&#8593;</xmp></td>
                            <td>Up Arrow</td>
                        </tr>
                        <tr>
                            <td>&euro;</td>
                            <td><xmp>&euro;</xmp></td>
                            <td><xmp>&#8364;</xmp></td>
                            <td>Euro Symbol</td>
                        </tr>
                        <tr>
                            <td>&sup2;</td>
                            <td><xmp>&sup2;</xmp></td>
                            <td><xmp>&#178;</xmp></td>
                            <td>Superscript 2</td>
                        </tr>
                        <tr>
                            <td>&frac12;</td>
                            <td><xmp>&frac12;</xmp></td>
                            <td><xmp>&#189;</xmp></td>
                            <td>Fraction ½</td>
                        </tr>
                        <tr>
                            <td>&hearts;</td>
                            <td><xmp>&hearts;</xmp></td>
                            <td><xmp>&#9829;</xmp></td>
                            <td>Heart</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><xmp>&nbsp;</xmp></td>
                            <td><xmp>&#160;</xmp></td>
                            <td>Inserts A Non-Breaking Blank Space</td>
                        </tr>
                        <tr>
                            <td>&amp;</td>
                            <td><xmp>&amp;</xmp></td>
                            <td><xmp>&#38;</xmp></td>
                            <td>Ampersand</td>
                        </tr>
                        <tr>
                            <td>&quot;</td>
                            <td><xmp>&quot;</xmp></td>
                            <td><xmp>&#34;</xmp></td>
                            <td>Quotation Mark</td>
                        </tr>
                        <tr>
                            <td>&copy;</td>
                            <td><xmp>&copy;</xmp></td>
                            <td><xmp>&#169;</xmp></td>
                            <td>Copyright Symbol</td>
                        </tr>
                        <tr>
                            <td>&reg;</td>
                            <td><xmp>&reg;</xmp></td>
                            <td><xmp>&#174;</xmp></td>
                            <td>Registered Symbol</td>
                        </tr>
                        <tr>
                            <td>&trade;</td>
                            <td><xmp>&trade;</xmp></td>
                            <td><xmp>&#153;</xmp></td>
                            <td>Trademark Symbol</td>
                        </tr>
                        <tr>
                            <td>&ldquo;</td>
                            <td><xmp>&ldquo;</xmp></td>
                            <td><xmp>&#147;</xmp></td>
                            <td>Opening Double Quotes</td>
                        </tr>
                        <tr>
                            <td>&rdquo;</td>
                            <td><xmp>&rdquo;</xmp></td>
                            <td><xmp>&#148;</xmp></td>
                            <td>Closing Double Quotes</td>
                        </tr>
                        <tr>
                            <td>&lsquo;</td>
                            <td><xmp>&lsquo;</xmp></td>
                            <td><xmp>&#145;</xmp></td>
                            <td>Opening Single Quote Mark</td>
                        </tr>
                        <tr>
                            <td>&rsquo;</td>
                            <td><xmp>&rsquo;</xmp></td>
                            <td><xmp>&#146;</xmp></td>
                            <td>Closing Single Quote Mark</td>
                        </tr>
                        <tr>
                            <td>&laquo;</td>
                            <td><xmp>&laquo;</xmp></td>
                            <td><xmp>&#171;</xmp></td>
                            <td>Angle Quotation Mark (Left)</td>
                        </tr>
                        <tr>
                            <td>&raquo;</td>
                            <td><xmp>&raquo;</xmp></td>
                            <td><xmp>&#187;</xmp></td>
                            <td>Angle Quotation Mark (Right)</td>
                        </tr>
                        <tr>
                            <td>&lsaquo;</td>
                            <td><xmp>&lsaquo;</xmp></td>
                            <td><xmp>&#8249;</xmp></td>
                            <td>Single Left Angle Quotation</td>
                        </tr>
                        <tr>
                            <td>&rsaquo;</td>
                            <td><xmp>&rsaquo;</xmp></td>
                            <td><xmp>&#8250;</xmp></td>
                            <td>Single Right Angle Quotation</td>
                        </tr>
                        <tr>
                            <td>&sect;</td>
                            <td><xmp>&sect;</xmp></td>
                            <td><xmp>&#167;</xmp></td>
                            <td>Section Symbol</td>
                        </tr>
                        <tr>
                            <td>&para;</td>
                            <td><xmp>&para;</xmp></td>
                            <td><xmp>&#182;</xmp></td>
                            <td>Paragraph Symbol</td>
                        </tr>
                        <tr>
                            <td>&bull;</td>
                            <td><xmp>&bull;</xmp></td>
                            <td><xmp>&#149;</xmp></td>
                            <td>Big List Dot</td>
                        </tr>
                        <tr>
                            <td>&middot;</td>
                            <td><xmp>&middot;</xmp></td>
                            <td><xmp>&#183;</xmp></td>
                            <td>Medium List Dot</td>
                        </tr>
                        <tr>
                            <td>&hellip;</td>
                            <td><xmp>&hellip;</xmp></td>
                            <td><xmp>&#8230;</xmp></td>
                            <td>Horizontal Ellipsis</td>
                        </tr>
                        <tr>
                            <td>&#124;</td>
                            <td><xmp></xmp></td>
                            <td><xmp>&#124;</xmp></td>
                            <td>Vertical Bar</td>
                        </tr>
                        <tr>
                            <td>&brvbar;</td>
                            <td><xmp>&brvbar;</xmp></td>
                            <td><xmp>&#166;</xmp></td>
                            <td>Broken Vertical Bar</td>
                        </tr>
                        <tr>
                            <td>&ndash;</td>
                            <td><xmp>&ndash;</xmp></td>
                            <td><xmp>&#150;</xmp></td>
                            <td>En-Dash</td>
                        </tr>
                        <tr>
                            <td>&mdash;</td>
                            <td><xmp>&mdash;</xmp></td>
                            <td><xmp>&#151;</xmp></td>
                            <td>Em-Dash</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h2>통화</h2>
                <table>
                    <thead>
                        <tr>
                            <th>엔티티 코드</th>
                            <th>문자식 표현(Entity Code) </th>
                            <th>숫자식 표현(Entity Number)</th>
                            <th>설명 (Description)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&curren;</td>
                            <td><xmp>&curren;</xmp></td>
                            <td><xmp>&#164;</xmp></td>
                            <td>Generic Currency Symbol</td>
                        </tr>
                        <tr>
                            <td>&#36;</td>
                            <td><xmp></xmp></td>
                            <td><xmp>&#36;</xmp></td>
                            <td>Dollar Symbol</td>
                        </tr>
                        <tr>
                            <td>&cent;</td>
                            <td><xmp>&cent;</xmp></td>
                            <td><xmp>&#162;</xmp></td>
                            <td>Cent Symbol</td>
                        </tr>
                        <tr>
                            <td>&pound;</td>
                            <td><xmp>&pound;</xmp></td>
                            <td><xmp>&#163;</xmp></td>
                            <td>Pound</td>
                        </tr>
                        <tr>
                            <td>&yen;</td>
                            <td><xmp>&yen;</xmp></td>
                            <td><xmp>&#165;</xmp></td>
                            <td>Yen</td>
                        </tr>
                        <tr>
                            <td>&euro;</td>
                            <td><xmp>&euro;</xmp></td>
                            <td><xmp>&#8364;</xmp></td>
                            <td>Euro Symbol</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h2>수학</h2>
                <table>
                    <thead>
                        <tr>
                            <th>엔티티 코드</th>
                            <th>문자식 표현(Entity Code) </th>
                            <th>숫자식 표현(Entity Number)</th>
                            <th>설명 (Description)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&lt;</td>
                            <td><xmp>&lt;</xmp></td>
                            <td><xmp>&#60;</xmp></td>
                            <td>Less Than</td>
                        </tr>
                        <tr>
                            <td>&gt;</td>
                            <td><xmp>&gt;</xmp></td>
                            <td><xmp>&#62;</xmp></td>
                            <td>Greater Than</td>
                        </tr>
                        <tr>
                            <td>&le;</td>
                            <td><xmp>&le;</xmp></td>
                            <td><xmp>&#8804;</xmp></td>
                            <td>Less Than Or Equal To</td>
                        </tr>
                        <tr>
                            <td>&ge;</td>
                            <td><xmp>&ge;</xmp></td>
                            <td><xmp>&#8805;</xmp></td>
                            <td>Greater Than Or Equal To</td>
                        </tr>
                        <tr>
                            <td>&times;</td>
                            <td><xmp>&times;</xmp></td>
                            <td><xmp>&#215;</xmp></td>
                            <td>Multiplication Symbol</td>
                        </tr>
                        <tr>
                            <td>&divide;</td>
                            <td><xmp>&divide;</xmp></td>
                            <td><xmp>&#247;</xmp></td>
                            <td>Division Symbol</td>
                        </tr>
                        <tr>
                            <td>&minus;</td>
                            <td><xmp>&minus;</xmp></td>
                            <td><xmp>&#8722;</xmp></td>
                            <td>Minus Symbol</td>
                        </tr>
                        <tr>
                            <td>&plusmn;</td>
                            <td><xmp>&plusmn;</xmp></td>
                            <td><xmp>&#177;</xmp></td>
                            <td>Plus/Minus Symbol</td>
                        </tr>
                        <tr>
                            <td>&ne;</td>
                            <td><xmp>&ne;</xmp></td>
                            <td><xmp>&#8800;</xmp></td>
                            <td>Not Equal</td>
                        </tr>
                        <tr>
                            <td>&sup1;</td>
                            <td><xmp>&sup1;</xmp></td>
                            <td><xmp>&#185;</xmp></td>
                            <td>Superscript 1</td>
                        </tr>
                        <tr>
                            <td>&sup2;</td>
                            <td><xmp>&sup2;</xmp></td>
                            <td><xmp>&#178;</xmp></td>
                            <td>Superscript 2</td>
                        </tr>
                        <tr>
                            <td>&sup3;</td>
                            <td><xmp>&sup3;</xmp></td>
                            <td><xmp>&#179;</xmp></td>
                            <td>Superscript 3</td>
                        </tr>
                        <tr>
                            <td>&frac12;</td>
                            <td><xmp>&frac12;</xmp></td>
                            <td><xmp>&#189;</xmp></td>
                            <td>Fraction ½</td>
                        </tr>
                        <tr>
                            <td>&frac14;</td>
                            <td><xmp>&frac14;</xmp></td>
                            <td><xmp>&#188;</xmp></td>
                            <td>Fraction ¼</td>
                        </tr>
                        <tr>
                            <td>&frac34;</td>
                            <td><xmp>&frac34;</xmp></td>
                            <td><xmp>&#190;</xmp></td>
                            <td>Fraction ¾</td>
                        </tr>
                        <tr>
                            <td>&permil;</td>
                            <td><xmp>&permil;</xmp></td>
                            <td><xmp>&#8240;</xmp></td>
                            <td>Per Mille</td>
                        </tr>
                        <tr>
                            <td>&deg;</td>
                            <td><xmp>&deg;</xmp></td>
                            <td><xmp>&#176;</xmp></td>
                            <td>Degree Symbol</td>
                        </tr>
                        <tr>
                            <td>&radic;</td>
                            <td><xmp>&radic;</xmp></td>
                            <td><xmp>&#8730;</xmp></td>
                            <td>Square Root</td>
                        </tr>
                        <tr>
                            <td>&infin;</td>
                            <td><xmp>&infin;</xmp></td>
                            <td><xmp>&#8734;</xmp></td>
                            <td>Infinity</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h2>방향</h2>
                <table>
                    <thead>
                        <tr>
                            <th>엔티티 코드</th>
                            <th>문자식 표현(Entity Code) </th>
                            <th>숫자식 표현(Entity Number)</th>
                            <th>설명 (Description)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&larr;</td>
                            <td><xmp>&larr;</xmp></td>
                            <td><xmp>&#8592;</xmp></td>
                            <td>Left Arrow</td>
                        </tr>
                        <tr>
                            <td>&uarr;</td>
                            <td><xmp>&uarr;</xmp></td>
                            <td><xmp>&#8593;</xmp></td>
                            <td>Up Arrow</td>
                        </tr>
                        <tr>
                            <td>&rarr;</td>
                            <td><xmp>&rarr;</xmp></td>
                            <td><xmp>&#8594;</xmp></td>
                            <td>Right Arrow</td>
                        </tr>
                        <tr>
                            <td>&darr;</td>
                            <td><xmp>&darr;</xmp></td>
                            <td><xmp>&#8595;</xmp></td>
                            <td>Down Arrow</td>
                        </tr>
                        <tr>
                            <td>&harr;</td>
                            <td><xmp>&harr;</xmp></td>
                            <td><xmp>&#8596;</xmp></td>
                            <td>Left Right Arrow</td>
                        </tr>
                        <tr>
                            <td>&crarr;</td>
                            <td><xmp>&crarr;</xmp></td>
                            <td><xmp>&#8629;</xmp></td>
                            <td>Carriage Return Arrow</td>
                        </tr>
                        <tr>
                            <td>&lceil;</td>
                            <td><xmp>&lceil;</xmp></td>
                            <td><xmp>&#8968;</xmp></td>
                            <td>Left Ceiling</td>
                        </tr>
                        <tr>
                            <td>&rceil;</td>
                            <td><xmp>&rceil;</xmp></td>
                            <td><xmp>&#8969;</xmp></td>
                            <td>Right Ceiling</td>
                        </tr>
                        <tr>
                            <td>&lfloor;</td>
                            <td><xmp>&lfloor;</xmp></td>
                            <td><xmp>&#8970;</xmp></td>
                            <td>Left Floor</td>
                        </tr>
                        <tr>
                            <td>&rfloor;</td>
                            <td><xmp>&rfloor;</xmp></td>
                            <td><xmp>&#8971;</xmp></td>
                            <td>Right Floor</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h2>기타</h2>
                <table>
                    <thead>
                        <tr>
                            <th>엔티티 코드</th>
                            <th>문자식 표현(Entity Code) </th>
                            <th>숫자식 표현(Entity Number)</th>
                            <th>설명 (Description)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>&spades;</td>
                            <td><xmp>&spades;</xmp></td>
                            <td><xmp>&#9824;</xmp></td>
                            <td>Spade</td>
                        </tr>
                        <tr>
                            <td>&clubs;</td>
                            <td><xmp>&clubs;</xmp></td>
                            <td><xmp>&#9827;</xmp></td>
                            <td>Club</td>
                        </tr>
                        <tr>
                            <td>&hearts;</td>
                            <td><xmp>&hearts;</xmp></td>
                            <td><xmp>&#9829;</xmp></td>
                            <td>Heart</td>
                        </tr>
                        <tr>
                            <td>&diams;</td>
                            <td><xmp>&diams;</xmp></td>
                            <td><xmp>&#9830;</xmp></td>
                            <td>Diamond</td>
                        </tr>
                        <tr>
                            <td>&loz;</td>
                            <td><xmp>&loz;</xmp></td>
                            <td><xmp>&#9674;</xmp></td>
                            <td>Lozenge</td>
                        </tr>
                        <tr>
                            <td>&dagger;</td>
                            <td><xmp>&dagger;</xmp></td>
                            <td><xmp>&#8224;</xmp></td>
                            <td>Dagger</td>
                        </tr>
                        <tr>
                            <td>&Dagger;</td>
                            <td><xmp>&Dagger;</xmp></td>
                            <td><xmp>&#8225;</xmp></td>
                            <td>Double Dagger</td>
                        </tr>
                        <tr>
                            <td>&iexcl;</td>
                            <td><xmp>&iexcl;</xmp></td>
                            <td><xmp>&#161;</xmp></td>
                            <td>Inverted Exclamation Mark</td>
                        </tr>
                        <tr>
                            <td>&iquest;</td>
                            <td><xmp>&iquest;</xmp></td>
                            <td><xmp>&#191;</xmp></td>
                            <td>Inverted Question Mark</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</div>

<? include_once('../footer.php'); ?>

<script src="../assets/js/jquery-3.4.1.js"></script>
<script src="../assets/js/common.js"></script>

</body>
</html>
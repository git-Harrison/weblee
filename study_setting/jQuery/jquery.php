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
<body class="sub script" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<? include_once('../header.php'); ?>

<div class="wrap">

    <header>
        <div class="title">
            <h1>jQuery</h1> <!-- 제목 -->
            <p>jQuery Reference v1.0</p> <!-- 부제목 -->
        </div>
    </header>

    <main class="html">
        <div class="container">

            <div class="list">
                <h2>제이쿼리(jQuery)</h2>
                <p>
                    제이쿼리는 자바스크립트 라이브러리를 이용해 만든 언어입니다.
                    <br>
                    라이브러리는 자주 사용하는 코드를 재사용 및 효율성있게 사용 할 수 있도록 만들어진 다양한 함수의 집합을 의미합니다.
                    <br>
                    제이쿼리는 HTML에 포함되어 있는 클라이언트 사이트 스크립트 언어를 단순화하도록 설계된 웹 브라우저 호환성을 가진 자바스크립트 라이브러리입니다.
                </p>
            </div>

            <div class="list">
                <h2>제이쿼리 장점</h2>
                <p>
                    제이쿼리는 자바스크립트 라이브러리를 이용해 만든 언어입니다.
                    <br>
                    라이브러리는 자주 사용하는 코드를 재사용 및 효율성있게 사용 할 수 있도록 만들어진 다양한 함수의 집합을 의미합니다.
                </p>
                <ul>
                    <li>제이쿼리 CSS를 쉽게 적용할 수 있습니다.</li>
                    <li>제이쿼리 크로스브라우징을 지원합니다.</li>
                    <li>제이쿼리 플러그인이 풍부합니다.</li>
                    <li>제이쿼리는 코드를 적게, 효율적으로 작성할 수 있습니다.</li>
                    <li>제이쿼리는 좋은 확장성이과 Ajax기능을 구현합니다.</li>
                </ul>
            </div>

            <div class="list">
                <h2>제이쿼리 사용방법</h2>
            </div>
<pre class="flex">
<code><span>jQuery(document).ready(function(){</span>

<span>});</span>
</code>
<div class="flex_tag">jQuery</div>
</pre>
<pre class="flex">
<code><span>$(document).ready(function(){</span>

<span>});</span>
</code>
<div class="flex_tag">jQuery</div>
</pre>
<pre class="flex">
<code><span>$(function(){</span>

<span>});</span>
</code>
<div class="flex_tag">jQuery</div>
</pre>

            <div class="list">
                <h2>선택자</h2>
            </div>

            <div class="list">
                <h3>선택자</h3>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>예시</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>태그 선택자</td>
                            <td>$("div")</td>
                            <td>기본 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>클래스 선택자</td>
                            <td>$(".class")</td>
                            <td>클래스 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>아이디 선택자</td>
                            <td>$("#id")</td>
                            <td>아이디 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>그룹 선택자</td>
                            <td>$("p, .class, #id")</td>
                            <td>여러가지 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>전체 선택자</td>
                            <td>$("*")</td>
                            <td>전체 태그를 선택합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>계층 선택자</h3>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>예시</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>자손 선택자</td>
                            <td>$("div li")</td>
                            <td>자식(하위) 태그 모두 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>child 선택자</td>
                            <td>$("div > p")</td>
                            <td>자식(하위) 태그만 선택합니다.(자손은 포함안됨)</td>
                        </tr>
                        <tr>
                            <td>sibling 선택자</td>
                            <td>$("div + p")</td>
                            <td>자식 태그 다음 형제 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>siblings 선택자</td>
                            <td>$("div ~ li")</td>
                            <td>자식 태그 다음 모든 형제태그를 선택합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>속성 선택자</h3>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>예시</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>[name="value"]</td>
                            <td>$("li a[href='#page']")</td>
                            <td>속성 중에 #page와 일치하는 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>[name^="value"]</td>
                            <td>$("li a[href^='http']")</td>
                            <td>속성 중에 http로 시작하는 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>[name$="value"]</td>
                            <td>$("li a[href$='.com']")</td>
                            <td>속성 중에 .com로 끝나는 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>[name*="value"]</td>
                            <td>$("li a[href*='web']")</td>
                            <td>속성 중에 "web"가 포함되어 있는 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>[name!="value"]</td>
                            <td>$("li a[href!='naver.com']")</td>
                            <td>속성 중에 naver.com와 일치하지 않는 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td>[name="value"][name="value"]</td>
                            <td>$("li a[href][class]")</td>
                            <td>속성 중에 href 속성과 class 속성이 있는 태그를 선택합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>기본 필터 선택자</h3>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>:animated</code></td>
                            <td>show, hide, slideDown, slideUp등의 애니메이션 태그를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:eq(index)</code></td>
                            <td>선택된 태그들의 인덱스 번호를 통해 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:gt(index)</code></td>
                            <td>선택된 집합에서 인덱스보다 큰 인덱스를 가지고 있는 태그들을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:lt(index)</code></td>
                            <td>선택된 집합에서 인덱스보다 작은 인덱스를 가지고 있는 태그들을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:header</code></td>
                            <td>제목 요소(h1~h6) 태그들을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:first</code></td>
                            <td>선택된 요소 중에서 첫 번째 요소를 찾아 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:last</code></td>
                            <td>선택된 요소 중에서 마지막 번째 요소를 찾아 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:odd</code></td>
                            <td>선택된 요소 중에서 홀수 번째 요소를 찾아 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:even</code></td>
                            <td>선택된 요소 중에서 짝수 번째 요소를 찾아 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:not()</code></td>
                            <td>현재 선택한 요소의 반대 요소를 선택합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>내용 필터 선택자</h3>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>:contains()</code></td>
                            <td>()안의 텍스트와 일치하는 문자열이 요소의 내용 중에 있을 때 그 요소를 반환합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:empty</code></td>
                            <td>요소에 텍스트 없을 때 선택됩니다.</td>
                        </tr>
                        <tr>
                            <td><code>:has()</code></td>
                            <td>요소 내부에서 찾고 싶은 태그를 후손 요소까지 살펴본 후 요소가 있으면 반환합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:parent</code></td>
                            <td>empty와 반대로 요소에 텍스트가 존재할 때에 선택됩니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>보임 필터 선택자</h3>
                <p>콘텐츠 영역을 보이지 않게 하는 방법</p>
                <ul>
                    <li>display : none ~ display : block (영역X) (애니메이션X)</li>
                    <li>visibility : hidden ~ visibility : visible (영역O (애니메이션X))</li>
                    <li>opacity : 0 ~ opacity : 1 (영역O) (애니메이션O)</li>
                    <li>width:0; height:0; overflow:hidden;</li>
                    <li>form 요소 주에 type="hidden</li>
                    <li>부모 요소가 보이지 않거나 숨겨져 있을 때</li>
                </ul>
                <p>visibility : hidden이나 opacity : 0은 위치가 제거되지 않았기 때문에 :hidden 선택자에게 선택되지 않습니다.</p>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>:hidden</code></td>
                            <td>보이지 않는 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:visible</code></td>
                            <td>보이는 요소를 선택합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>자식 필터 선택자</h3>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>:first-child</code></td>
                            <td>첫 번째 자식 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:last-child</code></td>
                            <td>마지막 번째 자식 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:nth-child(index)</code></td>
                            <td>index번째에 있는 자식 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:nth-child(even)</code></td>
                            <td>짝수번째에 있는 자식 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:nth-child(odd)</code></td>
                            <td>홀수번째에 있는 자식 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:nth-child(2n)</code></td>
                            <td>2배수 번째에 있는 자식 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:nth-child(2n+1)</code></td>
                            <td>2배수+1 번째에 있는 자식 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:only-child</code></td>
                            <td>자식 요소가 오직 하나인 요소를 선택합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>폼 필터 선택자</h3>
                <table>
                    <thead>
                        <tr>
                            <th>종류</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>:input</code></td>
                            <td>모든 입력 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:file</code></td>
                            <td>파일 업로드 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:hidden</code></td>
                            <td>숨겨진 입력 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:image</code></td>
                            <td>이미지 입력 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:password</code></td>
                            <td>암호 입력 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:radio</code></td>
                            <td>라디오 버튼 입력 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:reset</code></td>
                            <td>리셋 입력 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:submit</code></td>
                            <td>데이터 보내기 입력 양식을 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>:text</code></td>
                            <td>텍스트 박스 양식을 선택합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>선택자</h3>
           </div>
<pre class="flex"><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="ko"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Document&lt;/title&gt;

    &lt;script src="assets/js/jquery-1.11.0.min.js"&gt;&lt;/script&gt;
    &lt;script&gt;
        $(document).ready(function(){
            //태그 선택자
            $("h1").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //클래스 선택자
            $(".list8").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //아이디 선택자
            $("#list2").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //그룹 선택자
            $("#list2, .list8").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //전체 선택자
            $("*").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //자손 선택자
            $(".list li").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //child 선택자
            $(".list &gt; li").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //sibling 선택자
            $(".list3 + li").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //siblings 선택자
            $(".list3 ~ li").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //속성 선택자[name="value"]
            $("li[class='list4']").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //속성 선택자[name^="value"]
            $("li[class^='list4']").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //속성 선택자[name$="value"]
            $("li[class$='list4']").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //속성 선택자[name*="value"]
            $("li[class*='list4']").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //속성 선택자[name!="value"]
            $("li[class!='list4']").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //속성 선택자[name=="value"]
            $("li a[href] [title]").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :eq(index)
            $("li:eq(3)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :lt(index)
            $("li:lt(3)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :gt(index)
            $("li:gt(3)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :first
            $("li:first(3)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :last
            $("li:last(3)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :odd
            $("li:odd(3)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :even
            $("li:even(3)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //기본 필터 선택자 :not
            $("li:not(:eq(4))").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //내용 필터 선택자 : contains
            $("li:contains('list4')").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //내용 필터 선택자 : empty
            $("li:empty('list4')").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //내용 필터 선택자 : parent
            $("li:parent('list4')").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            //내용 필터 선택자 : has()
            $("li:has('li')").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //보임 필터 선택자 : hidden
            $("li:hidden").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //보임 필터 선택자 : visible
            $("li:visible").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});

            //자식 필터 선택자 :
            $("li:first-child").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:first").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:last-child").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:last").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:nth-child(4)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:nth-child(even)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:nth-child(odd)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:nth-child(4n)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
            $("li:nth-child(4n+2)").css({"backgroundColor":"#bbdefb" , "border":"2px dashed #303f9f"});
        });

   &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;jQuery&lt;/h1&gt;
    &lt;div id="sample"&gt;
        &lt;ul id="list1" class="list"&gt;
            &lt;li class="list1"&gt;&lt;a href="#list2"&gt;list1&lt;/a&gt;&lt;/li&gt;
            &lt;li class="list2"&gt;&lt;a href="http://naver.com"&gt;list2&lt;/a&gt;&lt;/li&gt;
            &lt;li class="list3"&gt;&lt;a href="http://www.daum.net"&gt;list3&lt;/a&gt;&lt;/li&gt;
            &lt;li class="list4"&gt;&lt;a href="http://weblee.kr" title="사이트"&gt;list4&lt;/a&gt;&lt;/li&gt;
            &lt;li class="list5"&gt;list5&lt;/li&gt;
            &lt;li class="list6"&gt;list6&lt;/li&gt;
            &lt;li class="list7"&gt;list7&lt;/li&gt;
            &lt;li class="list8"&gt;list8&lt;/li&gt;
            &lt;li class="list9"&gt;list9&lt;/li&gt;
            &lt;li class="list10"&gt;list10&lt;/li&gt;
        &lt;/ul&gt;
        &lt;ul id="list2" class="list"&gt;
            &lt;li class="list1"&gt;list1&lt;/li&gt;
            &lt;li class="list2"&gt;list2&lt;/li&gt;
            &lt;li class="list3"&gt;list3&lt;/li&gt;
            &lt;li class="list4"&gt;list4&lt;/li&gt;
            &lt;li class="list5"&gt;&lt;/li&gt;
            &lt;li class="list6"&gt;list6&lt;/li&gt;
            &lt;li class="list7"&gt;list7&lt;/li&gt;
            &lt;li class="list8"&gt;list8&lt;/li&gt;
            &lt;li class="list9"&gt;list9&lt;/li&gt;
            &lt;li class="list10"&gt;list10&lt;/li&gt;
        &lt;ul&gt;
            &lt;li&gt;list10-1&lt;/li&gt;
            &lt;li style="width:0; height:0; overflow:hidden;"&gt;list10-2&lt;/li&gt;
            &lt;li style="opacity:0;"&gt;list10-3&lt;/li&gt;
            &lt;li style="visibility:hidden;"&gt;list10-4&lt;/li&gt;
            &lt;li style="display:none;"&gt;list10-5&lt;/li&gt;
            &lt;li&gt;list10-6&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
<div class="flex_tag">jQuery</div>
</pre>
            
            <div class="list">
                <h2>탐색</h2>
                <p>제이쿼리의 선택자를 기준으로 선택한 요소 중 원하는 요소를 다시 한번 더 선택할 수 있는 탐색과 관련된 제이쿼리 메서드입니다.</p>
            </div>

            <div class="list">
                <h3>트리구조 탐색</h3>
                <table>
                    <thead>
                        <tr>
                            <th>메서드</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>.children()</code></td>
                            <td>선택한 요소의 모든 자식 요소를 선택합니다.(자손요소 포함안됨)</td>
                        </tr>
                        <tr>
                            <td><code>.find()</code></td>
                            <td>선택한 요소의 자손 요소 중 조건에 맞는 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.next()</code></td>
                            <td>선택한 요소의 다음 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.nextAll()</code></td>
                            <td>선택한 요소의 다음 모든 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.parent()</code></td>
                            <td>선택한 요소의 부모 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.parents()</code></td>
                            <td>선택한 요소의 모든 부모 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.prev()</code></td>
                            <td>선택한 요소의 이전 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.prevAll()</code></td>
                            <td>선택한 요소의 이전 모든 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.closest()</code></td>
                            <td>선택한 요소를 포함하면서 가장 가까운 상위 요소를 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.nextUntil()</code></td>
                            <td>다음에 위치한 요소를 조건에 맞을 때까지 찾습니다.</td>
                        </tr>
                        <tr>
                            <td><code>.parentsUntil()</code></td>
                            <td>조건이 참이 될 때까지 부모 요소를 찾습니다.</td>
                        </tr>
                        <tr>
                            <td><code>.prevUntil()</code></td>
                            <td>이전에 위치한 요소를 조건에 맞을 때까지 찾습니다.</td>
                        </tr>
                        <tr>
                            <td><code>.siblings()</code></td>
                            <td>형제 요소를 모두 찾습니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>필터링</h3>
                <table>
                    <thead>
                        <tr>
                            <th>메서드</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>.eq()</code></td>
                            <td>인덱스 번호에 해당하는 요소를 찾습니다.</td>
                        </tr>
                        <tr>
                            <td><code>.filter()</code></td>
                            <td>선택된 요소 집합에서 선택자를 추가하거나 함수를 사용해서 원하는 결과를 추출해냅니다.</td>
                        </tr>
                        <tr>
                            <td><code>.first()</code></td>
                            <td>선택된 요소 집합에서 첫번째 자식 요소를 찾습니다.</td>
                        </tr>
                        <tr>
                            <td><code>.has()</code></td>
                            <td>선택된 요소들이 자신의 자식 요소에서 주어진 선택자가 있는지를 확인하여 범위를 축소합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.is()</code></td>
                            <td>문서 객체의 특징을 판별합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.last()</code></td>
                            <td>선택된 노드 집합에서 마지막 자식 요소를 찾습니다.</td>
                        </tr>
                        <tr>
                            <td><code>.map()</code></td>
                            <td>대상이 되는 요소 집합의 배열을 새롭게 변경합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.not()</code></td>
                            <td>조건에 맞지 않은 것들만 찾아서 선택합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.slice()</code></td>
                            <td>선택된 집합을 조건의 범위로 재선택해줍니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h2>속성</h2>
            </div>

            <div class="list">
                <h3>Attributes</h3>
                <table>
                    <thead>
                        <tr>
                            <th>메서드</th>
                            <th>설명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>.attr()</code></td>
                            <td>새로운 속성을 생성하거나 기존의 속성을 변경할 때 사용합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.prop()</code></td>
                            <td>선택한 요소에 속성을 반환, 생성, 변환 할 때 상요합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.removeAttr()</code></td>
                            <td>선택한 요소에서 기존의 속성을 삭제합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.removeProp()</code></td>
                            <td>선택한 요소에서 기존의 속성을 삭제합니다.</td>
                        </tr>
                        <tr>
                            <td><code>.val()</code></td>
                            <td>입력 요소에 있는 속성 값을 불러오거나 변경 할 때 사용합니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="list">
                <h3>.attr</h3>
                <p>attr() 메서드는 요소의 속성 값을 설정하거나 반환합니다.</p>
            </div>
            
        </div>
    </main>

</div>

<? include_once('../footer.php'); ?>

<script src="../assets/js/jquery-3.4.1.js"></script>
<script src="../assets/js/common.js"></script>
</body>
</html>


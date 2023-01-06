<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>카카오</title>

    <link rel="stylesheet" href="./css/kakao.css">
</head>
<body class="themed">

    <!-- 상단 -->
    <header>
        <div class="container">
            <div class="header">
                <div class="hd_box hd_l">
                    <img src="../images/kakao_logo.png" alt="logo">
                </div>
                <div class="hd_box hd_c">
                    <ul class="hd_nav">
                        <li class="hd_nav_list">
                            <a href="">카카오</a>
                        </li>
                        <li class="hd_nav_list">
                            <a href="">뉴스</a>
                        </li>
                        <li class="hd_nav_list">
                            <a href="">기술과 서비스</a>
                        </li>
                        <li class="hd_nav_list">
                            <a href="">약속과 책임</a>
                        </li>
                    </ul>
                </div>
                <div class="hd_box hd_r">
                    <label for="check" class="mode">
                        <input id="check" class="check" type="checkbox" style="display: none">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M4.069 13h-4.069v-2h4.069c-.041.328-.069.661-.069 1s.028.672.069 1zm3.034-7.312l-2.881-2.881-1.414 1.414 2.881 2.881c.411-.529.885-1.003 1.414-1.414zm11.209 1.414l2.881-2.881-1.414-1.414-2.881 2.881c.528.411 1.002.886 1.414 1.414zm-6.312-3.102c.339 0 .672.028 1 .069v-4.069h-2v4.069c.328-.041.661-.069 1-.069zm0 16c-.339 0-.672-.028-1-.069v4.069h2v-4.069c-.328.041-.661.069-1 .069zm7.931-9c.041.328.069.661.069 1s-.028.672-.069 1h4.069v-2h-4.069zm-3.033 7.312l2.88 2.88 1.415-1.414-2.88-2.88c-.412.528-.886 1.002-1.415 1.414zm-11.21-1.415l-2.88 2.88 1.414 1.414 2.88-2.88c-.528-.411-1.003-.885-1.414-1.414zm6.312-10.897c-3.314 0-6 2.686-6 6s2.686 6 6 6 6-2.686 6-6-2.686-6-6-6z"></path></svg>
                    </label>
                </div>
            </div>
        </div>
    </header>
    <!-- //상단 -->

    <!-- 메인 -->
    <main>
        <div class="container">
            <div class="main">
                <div class="half_box">
                    <div class="half">
                        <div class="big_cont sticky">
                            <a href="">
                                <strong>카카오, 2022년 2분기 연결 매출 1조8,223억 원, 영업이익 1,710억 원</strong>
                                <img src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/news/6b439b19018200001.png?type=thumb&opt=C630x472" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="half">
                        <div class="small_cont">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        const $checkbox = document.querySelector('.check');

        const isUserColorTheme = localStorage.getItem('color-theme');
        const isOsColorTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

        const getUserTheme = () => isUserColorTheme ? isUserColorTheme : isOsColorTheme;

        window.onload = function() {
            if (getUserTheme === 'dark') {
                localStorage.setItem('color-theme', 'dark');
                document.documentElement.setAttribute('color-theme', 'dark');
                $checkbox.setAttribute('checked', true)
            } else {
                localStorage.setItem('color-theme', 'light');
                document.documentElement.setAttribute('color-theme', 'light');
            }
        }

        $checkbox.addEventListener('click', e=> {
            if (e.target.checked) {
                localStorage.setItem('color-theme', 'light');
                document.documentElement.setAttribute('color-theme', 'dark');
            } else {
                localStorage.setItem('color-theme', 'light');
                document.documentElement.setAttribute('color-theme', 'light');
            }
        });
    </script>

</body>
</html>
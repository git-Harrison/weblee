<link rel="stylesheet" href="assets/css/header.css">

<?php
    $user_name = $_SESSION['id'];
?>

<header>
    <div class="top_container">
        <div class="header">
            <ul class="header_sns">
                <li>
                    <a href="https://www.instagram.com/h_campfisher/" target="_black" title="인스타그램" class="instagram">
                    	<img src="https://i.pinimg.com/564x/5c/03/89/5c03895d71d4e59e5058604964fe5120.jpg" alt="인스타그램아이콘">
                    	<span>Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="" title="페이스북" class="facebook">
                    	<img src="https://i.pinimg.com/564x/b3/26/b5/b326b5f8d23cd1e0f18df4c9265416f7.jpg" alt="페이스북아이콘">
                    	<span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="" title="유튜브" class="youtube">
                    	<img src="https://i.pinimg.com/564x/31/23/9a/31239a2f70e4f8e4e3263fafb00ace1c.jpg" alt="유튜브아이콘">
                    	<span>YouTube</span>
                    </a>
                </li>
            </ul>
            <ul class="header_menu">

                <?php 

                    if (!$_SESSION['id']) {
                        echo "<li><a href='login.php' title='로그인'>로그인</a></li>";
                        echo "<li><a href='sinup.php' title='회원가입'>회원가입</a></li>";
                    }else {
                        echo "<li><a href='logout.php' title='아이디'>$user_name 님</a></li>";
                        echo "<li><a href='logout.php' title='로그아웃'>로그아웃</a></li>"; 
                    }
                ?>

                <li>
                    <a href="" title="주문조회">주문조회</a>
                </li>
                <li>
                    <a href="" title="마이쇼핑">마이쇼핑</a>
                </li>
                <li>
                    <a href="" title="커뮤니티">커뮤니티</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<nav>
    <div class="top_container">
        <div class="nav">
            <div class="nav_left">
                <a href="index.php" title="쇼핑몰로고">
                    <img src="assets/images/logo.png" class="logo_img" alt="로고이미지">
                </a>
                <a id="pc_menu" class="icon-wrap">
                    <div id="pc_menu_icon" class="icon"></div>
                </a>
            </div>
            <div class="nav_center">
            	<div class="m_nav_row">
                    <ul>
                        <li class="camp">
                            <a href="" title="텐트">텐트</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="리빙쉘텐트">리빙쉘텐트</a>
                            		<a href="" title="돔텐트">돔텐트</a>
                            		<a href="" title="팝업텐트">팝업텐트</a>
                                    <a href="" title="알파인텐트">알파인텐트</a>
                                    <a href="" title="차박텐트">차박텐트</a>
                                    <a href="" title="소품">소품</a>
                            	</div>
                            </div>
                        </li>
                        <li class="camp">
                            <a href="" title="타프">타프</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="렉사타프">렉사타프</a>
                            		<a href="" title="헥사타프">헥사타프</a>
                            		<a href="" title="소품">소품</a>
                            	</div>
                            </div>
                        </li>
                        <li class="camp">
                            <a href="" title="테이블">테이블</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="접이식테이블">접이식테이블</a>
                            		<a href="" title="조립식테이블">조립식테이블</a>
                                    <a href="" title="소품">소품</a>
                            	</div>
                            </div>
                        </li>
                        <li class="camp">
                            <a href="" title="체어">체어</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="접이식체어">접이식체어</a>
                            		<a href="" title="조립식체어">조립식체어</a>
                            		<a href="" title="경량체어">경량체어</a>
                            		<a href="" title="릴렉스체어">릴렉스체어</a>
                                    <a href="" title="소품">소품</a>
                            	</div>
                            </div>
                        </li>
                        <li class="camp">
                            <a href="" title="식기">식기</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="코펠">코펠</a>
                            		<a href="" title="프라이팬">프라이팬</a>
                                    <a href="" title="컵/머그컵">컵/머그컵</a>
                                    <a href="" title="소품">소품</a>
                            	</div>
                            </div>
                        </li>
                        <li class="camp">
                            <a href="" title="화로/버너">화로/버너</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="버너/스토브">버너/스토브</a>
                            		<a href="" title="화로대">화로대</a>
                            		<a href="" title="소품">소품</a>
                            	</div>
                            </div>
                        </li>
                        <li>
                            <a href="" title="브랜드">로드</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="원투낚시">원투낚시</a>
                            		<a href="" title="루어낚시">루어낚시</a>
                            		<a href="" title="찌낚시">찌낚시</a>
                            	</div>
                            </div>
                        </li>
                        <li>
                            <a href="" title="릴">릴</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="원투낚시">원투낚시</a>
                                    <a href="" title="루어낚시">루어낚시</a>
                                    <a href="" title="찌낚시">찌낚시</a>
                            	</div>
                            </div>
                        </li>
                        <li>
                            <a href="" title="채비">채비</a>
                            <div class="sub_nav">
                            	<div>
                            		<a href="" title="원투낚시">원투낚시</a>
                                    <a href="" title="루어낚시">루어낚시</a>
                                    <a href="" title="찌낚시">찌낚시</a>
                            	</div>
                            </div>
                        </li>
                        <li>
                            <a href="" title="소품">소품</a>
                            <div class="sub_nav">
                                <div>
                                    <a href="" title="서프">테클</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav_right">
                <a href="" title="검색">
                    <img src="https://jp.stylekorean.com/mobile/shop/nav/images/top_search_icon2.png" alt="검색아이콘" style="width: 28px;">
                </a>
                <a href="" title="장바구니">
                    <img src="https://i.pinimg.com/564x/a4/ec/69/a4ec69fec5ac49e216382bd7ba935e0a.jpg" alt="장바구니아이콘">
                    <span class="cart_count">10</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="category_wrap">
	<div class="nav_all_category">
		<div class="m_cg_top">
            <?php 

                if (!$_SESSION['id']) {
                    echo "<div class='no_login'><div>'로그아웃' 상태입니다.</div><div>스타일코리안에 가입하여 더 많은 혜택을 누리세요.</div><div><a href='login.php'>로그인</a><a href='sinup.php'>회원가입</a></div></div>";
                }else {
                    echo "<div class='user_body'><div><span> $user_name </span> 님, 즐거운 쇼핑 되세요.</div><div><a>마이페이지</a><a>배송중인 상품</a></div></div>";
                }
            ?>
		</div>
		<div class="m_cg_menu">
			<ul>
				<li>
					<a href="">
						<img src="https://i.pinimg.com/564x/a4/ec/69/a4ec69fec5ac49e216382bd7ba935e0a.jpg" alt="장바구니이미지">
						<span>장바구니</span>
						<span class="cart_count m_cg">10</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="http://www.ode.co.kr/design/odeshop/smartskin2017/custom_img/hamIcon02.png" alt="위시리스트이미지">
						<span>내가찜한상품</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="http://www.ode.co.kr/design/odeshop/smartskin2017/custom_img/hamIcon03.png" alt="주문조회이미지">
						<span>주문조회</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="http://www.ode.co.kr/design/odeshop/smartskin2017/custom_img/hamIcon04.png" alt="1:1문의이미지">
						<span>1:1문의</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="pc_category">
			<div class="cg_tab"></div>
			<div class="cg_tab"></div>
		</div>
		<div class="m_cg_menu sns">
			<ul>
				<li>
					<a href="https://www.instagram.com/h_campfisher/" target="_blank">
						<img src="https://i.pinimg.com/564x/5c/03/89/5c03895d71d4e59e5058604964fe5120.jpg" alt="인스타그램아이콘">
						<span>Instagram</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://i.pinimg.com/564x/b3/26/b5/b326b5f8d23cd1e0f18df4c9265416f7.jpg" alt="페이스북아이콘">
						<span>Facebook</span>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://i.pinimg.com/564x/31/23/9a/31239a2f70e4f8e4e3263fafb00ace1c.jpg" alt="유튜브아이콘">
						<span>YouTube</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="m_footer">
			<div>
				<button onclick="location.href='logout.php'">로그아웃</button>
				<button>고객센터</button>
			</div>
			<p>ⓒ All right reserved.</p>
		</div>
	</div>
	<div class="category_bg"></div>
</div>

<div id="mobile_menu" class="icon-wrap">
    <div id="mobile_menu_icon" class="icon"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        // 햄버거 메뉴 클릭
        $('#pc_menu').click(function(){
            $(this).toggleClass('active')
            $('#pc_menu_icon').toggleClass("active");
            $('nav').toggleClass('on');

            if ($(this).hasClass('active')) {
                $('.category_wrap, .category_bg').addClass('active');
            }else {
                $('.category_wrap, .category_bg').removeClass('active');
            }
        });

        $('#mobile_menu').click(function(){
            $(this).toggleClass('active')
            $('#mobile_menu_icon').toggleClass("active");
            $('nav').toggleClass('on');
            $('body').toggleClass('hidden');

            if ($(this).hasClass('active')) {
                $('.category_wrap, .category_bg').addClass('active');
            }else {
                $('.category_wrap, .category_bg').removeClass('active');
            }
        });

        // 카테고리 백그라운드 클릭
        $('.category_bg').click(function(){
            $(this).removeClass('active');
            $('#pc_menu, #pc_menu_icon, .category_wrap').removeClass('active');
        });

        // 스크롤 이벤트
        $(window).scroll(function(){ 
            var height = $(document).scrollTop();
            var width = $(document).width();

            if(height > 250){ 
                $('header, nav').addClass('fixed');

                if ($('nav').find('.fixed')) {
                    if (width <= 768) {
                        $('.nav_all_category').addClass('top');
                    }else {
                        $('.nav_all_category').removeClass('top');
                    }

                    $('.category_wrap').addClass('fixed');
                }
            }else if(height < 130){ 
                $('header, nav, .category_wrap').removeClass('fixed'); 
            } 
        });

    }); 
</script>
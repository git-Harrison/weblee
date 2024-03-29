
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<meta property="og:image" content="assets/images/banner1.jpg">
	<meta name="author" content="weblee">
	<meta name="keywords" content="캠핑,캠낚,캠피셔,오토캠핑,카라반,웹 퍼블리셔,퍼블리셔,웹 표준,웹 접근성,크로스브라우징,프런트엔드,Front-end,leehun,web developer,publisher,html5,css3,markup,javascript,jquery,php,jsp">
	<title>campfisher</title>
	
	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="https://weblee.kr/study_setting/assets/images/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
	<link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
	<link rel="stylesheet" href="assets/css/main.css">
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q33C7E9XM2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Q33C7E9XM2');
	</script>

</head>
<body oncontextmenu="return false">
	
	<? include_once('header.php'); ?>

	<div class="main">

		<div class="banner">
			<div class="slider_banner">
				<img src="assets/images/banner1.jpg" class="pc_banner" alt="배너이미지">
				<img src="assets/images/m_banner1.jpg" class="m_banner" alt="배너이미지">
			</div>
			<div class="slider_banner">
				<img src="assets/images/banner2.jpg" class="pc_banner" alt="배너이미지">
				<img src="assets/images/m_banner2.jpg" class="m_banner" alt="배너이미지">
			</div>
			<div class="slider_banner">
				<img src="assets/images/banner3.jpg" class="pc_banner" alt="배너이미지">
				<img src="assets/images/m_banner3.jpg" class="m_banner" alt="배너이미지">
			</div>
		</div>
		
		<section>
			<div class="container">
				<div class="sec_title">
					<h1>이달의 신제품</h1>
					<p>최근 입고된 상품입니다.</p>
				</div>

				<div class="item_slide">
					<ul class="item_wrap">
						<li class="item camp">
							<a href="">
								<div class="color_option">
									<span></span>
									<span></span>
								</div>
								<div class="item_image">
									<img src="assets/images/new1.png" alt="신상품이미지">
								</div>
								<div class="item_name">새턴쉘터라이트</div>
								<div class="item_price">796,000원</div>
							</a>
						</li>
						<li class="item camp">
							<a href="">
								<div class="item_image">
									<img src="assets/images/new2.png" alt="신상품이미지">
								</div>
								<div class="item_name">폴딩벤치(21)</div>
								<div class="item_price">56,000원</div>
							</a>
						</li>
						<li class="item camp">
							<a href="">
								<div class="item_image">
									<img src="assets/images/new3.png" alt="신상품이미지">
								</div>
								<div class="item_name">롱릴렉스체어(21)</div>
								<div class="item_price">입고예정(7월말)</div>
							</a>
						</li>
						<li class="item camp">
							<a href="">
								<div class="item_image">
									<img src="assets/images/new4.png" alt="신상품이미지">
								</div>
								<div class="item_name">아이언BBQ팬</div>
								<div class="item_price">입고예정(8월)</div>
							</a>
						</li>
						<li class="item camp">
							<a href="">
								<div class="item_image">
									<img src="assets/images/new5.png" alt="신상품이미지">
								</div>
								<div class="item_name">텀블러591ml</div>
								<div class="item_price">17,600원</div>
							</a>
						</li>
						<li class="item camp">
							<a href="">
								<div class="item_image">
									<img src="assets/images/new6.png" alt="신상품이미지">
								</div>
								<div class="item_name">텀블러887ml</div>
								<div class="item_price">23,200원</div>
							</a>
						</li>
						<li class="item camp">
							<a href="">
								<div class="item_image">
									<img src="assets/images/new7.png" alt="신상품이미지">
								</div>
								<div class="item_name">텀블러354ml</div>
								<div class="item_price">16,000원</div>
							</a>
						</li>
					</ul>
				</div>

				<div class="more_btn">
					<a href="">더보기</a>
				</div>

			</div>
		</section>

		<section>
			<div class="container">
				<div class="event_banner">
					<a href="">
						<img src="assets/images/event_banner1.jpg" class="pc_banner" alt="배너이미지">
						<img src="assets/images/m_event_banner1.jpg" class="m_banner" alt="배너이미지">
					</a>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="sec_title long">
					<h1>주간 판매 베스트 상품</h1>
					<p>고객분들께 사랑을 가장 많이 받은 제품입니다.</p>
				</div>
				<div class="sec_item">
					<ul class="best_item_wrap">
						<li class="best_item camp">
							<a href="" class="best_item_img">
								<img src="assets/images/best1.png" alt="베스트상품이미지">
							</a>
							<div class="best_item_text">
								<div class="best_item_name">
									<a href="">새턴쉘터라이트</a>
								</div>
								<div class="best_item_price">796,000원</div>
								<div class="best_content">블랙 이너텐트로 리뉴얼 되어 햇빛 차광력이 뛰어나며 기존 미라클패밀리텐트에서 실내공간 30% 확장시킨 프라임디럭스텐트 입니다.</div>
							</div>
						</li>
						<li class="best_item camp">
							<a href="" class="best_item_img">
								<img src="assets/images/best2.png" alt="베스트상품이미지">
							</a>
							<div class="best_item_text">
								<div class="best_item_name">
									<a href="">새턴2룸텐트(20)</a>
								</div>
								<div class="best_item_price">793,000원</div>
								<div class="best_content">빠른 설치와 철수가 가능하며 넓은 리빙공간을 제공하여 공간활용성이 높은 터널형 텐트입니다.</div>
							</div>
						</li>
						<li class="best_item camp">
							<a href="" class="best_item_img">
								<img src="assets/images/best3.png" alt="베스트상품이미지">
							</a>
							<div class="best_item_text">
								<div class="best_item_name">
									<a href="">새턴패밀리텐트</a>
								</div>
								<div class="best_item_price">495,000원</div>
								<div class="best_content">터널형 텐트의 장점인 빠른 설치와 철수가 가능하며, 4인 가족이 사용하기에 충분한 넓은 리빙공간을 제공합니다.</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

        <section>
            <div class="container">
                <div class="sec_title">
                    <h1>Instagram</h1>
                </div>

                <div id="instagram"></div>

                <div class="more_btn">
                    <a href="https://www.instagram.com/h_campfisher/" target="_blank">더보기</a>
                </div>

            </div>
        </section>

	</div>

    <div style="position: fixed; bottom: 0; left: 0; ">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3684998563812597"
                crossorigin="anonymous"></script>
    </div>


	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
	<script>

		$(document).ready(function(){

			$('.banner').bxSlider({
				mode: 'fade',
				speed: 500,
				pause: 2000,
				auto: true,
				autoHover: false,
				controls: false,
				autoControls: true,
				stopAutoOnClick: true,
				pager: false,
			});


			$('.item_slide ul').slick({
				infinite: true,
				slidesToShow: 5,
				slidesToScroll: 5,
				autoplay : true,
				autoplaySpeed : 1400,
				draggable : true,
				pauseOnHover : true,
				speed : 400,

				responsive: [ // 반응형 웹 구현 옵션
					{  
						breakpoint: 1280, //화면 사이즈 960px
						settings: {
							slidesToShow: 4,
							slidesToScroll: 4
						} 
					},
					{ 
						breakpoint: 900, //화면 사이즈 768px
						settings: {	
							slidesToShow: 3,
							slidesToScroll: 3,
							dots: true,
							arrows : false
						} 
					},
					{ 
						breakpoint: 600, //화면 사이즈 768px
						settings: {	
							slidesToShow: 2,
							slidesToScroll: 2,
							dots: true,
							arrows : false
						} 
					}
				]
			});
		});

	</script>

    <script>

        var token = "IGQVJXR3BUdVR1Q0MzTTlxckpPalp0OWRXaWo3NGhUTEtKR05FNXpQTUZAfSTNpVUJsYTk3MWNkUm9HeEVnTTltZAVNzWE0tX19CVUd5R3RuXzdjUXk5aE5rUV9PMlpjRnNPVE9McDFYU2ZAORC1Bc0tKRQZDZD";

        /*
            발급된 토큰은 장기 실행 액세스 토큰으로 60일간 사용이 가능합니다.
            https://developers.facebook.com/docs/instagram-basic-display-api/guides/long-lived-access-tokens

            발급된 토큰은 만료일(60일)이내에 refresh_access_token혹은, 페이스북 개발자 센터내의 토큰 재발급을 통해 연장을 해주어야합니다.
            https://developers.facebook.com/docs/instagram-basic-display-api/reference/refresh_access_token
        */

        $.ajax({
            type: "GET",
            dataType: "jsonp",
            cache: false,
            url: "https://graph.instagram.com/me/media?access_token=" + token + "&fields=id,caption,media_type,media_url,thumbnail_url,permalink",
            success: function(response) {
                console.log(response);
                if (response.data != undefined && response.data.length > 0) {
                    for(i = 0; i < 10; i++){
                        if(response.data[i]){
                            var item = response.data[i];
                            var image_url = "";
                            var post = "";

                            if(item.media_type === "VIDEO"){
                                image_url = item.thumbnail_url;
                            }else{
                                image_url = item.media_url;
                            }

                            post += '<div class="instagram_item instagram_item'+i+'">';
                            post += '<a href="'+ item.permalink +'" target="_blank" rel="noopener noreferrer" style="background-image: url(' + image_url + ');">';
                            post += '<p>'+ item.caption +'</p>';
                            post += '</a>';
                            post += '</div>';

                            $('#instagram').append(post);
                        }else{
                            // if no curent item
                            show_fallback('#insta-item-'+i)
                        }
                    }
                }else{
                    // if api error
                    show_fallback('.instagram-item')
                }
            },
            error :function(){
                // if http error
                show_fallback('.instagram-item')
            }

        });

        function show_fallback(el){
            $(el).addClass('loaded fallback');
        }

    </script>
</body>
</html>


<!-- 폰트 -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">

<!-- 스타일시트 -->
<link rel="stylesheet" href="src/components/css/common.css">
<link rel="stylesheet" href="src/components/css/admin_nav.css">



<!-- 상단 네비 -->
<nav>
	<h1 class="nav_header"><a href="admin.php">소픽스토어센터</a></h1>
	<div class="nav_bar">
		<ul>
			<li><span>dlwogns7662</span> 님</li>
			<li><a href="">로그아웃</a></li>
		</ul>
	</div>
</nav>
<!-- //상단 네비 -->



<!-- 사이드 네비 -->
<div class="side_nav">
	<div class="top">
		<div class="logo">
			<img src="src/components/images/sopick_logo.png" alt="sopick_logo">
		</div>
		<div class="sopick_name">SOPICK</div>
	</div>
	<div class="list_wrap">
		<ul class="menu">
			<li class="nav_list">
				<div>상품관리</div>
				<ul>
					<!-- 카테고리 추가 시 <li> 태그 추가 -->
					<li>
						<a href="order.php">주문내역 엑셀 다운로드</a>
					</li>
				</ul>
			</li>
			<li class="nav_list">
				<div>정산관리</div>
				<ul>
					<!-- 카테고리 추가 시 <li> 태그 추가 -->
					<li>
						<a href="calculate.php">정산내역 엑셀 다운로드</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- //사이드 네비 -->



<!-- 스크립트 -->
<script src="src/components/js/jquery-3.4.1.js"></script>
<script src="src/components/js/admin.js"></script>
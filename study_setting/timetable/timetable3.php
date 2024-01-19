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
<body class="sub timetable" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

	<? include_once('../header.php'); ?>

	<div class="wrap">

		<header>
			<div class="title">
				<h1>스터디 공유 시간표</h1>
				<p>비대면 수업</p>
			</div>
		</header>

<!--        <h4><span class="homework">숙제</span> <span>공부</span><span>CSS</span></h4>-->

		<main class="timetable">
			<div class="container">

				<div class="list bold">
					<h2>7월</h2>

					<table>
						<thead>
							<tr>
								<th class="none">일요일</th>
								<th>월요일</th>
								<th>화요일</th>
								<th>수요일</th>
								<th>목요일</th>
								<th>금요일</th>
								<th class="none">토요일</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="none"></td>
								<td class="none"></td>
								<td class="none"></td>
								<td class="none"></td>
                                <td class="none"></td>
								<td>
									<h3>1</h3>
								</td>
								<td class="none">
									<h3>2</h3>
								</td>
							</tr>
							<tr>
								<td class="none">
									<h3>3</h3>
								</td>
								<td>
									<h3>4</h3>
								</td>
								<td>
									<h3>5</h3>

								</td>
								<td>
									<h3>6</h3>
								</td>
								<td>
									<h3>7</h3>
								</td>
								<td>
									<h3>8</h3>
								</td>
								<td class="none">
									<h3>9</h3>
								</td>
							</tr>
							<tr>
								<td class="none">
									<h3>10</h3>
								</td>
								<td>
									<h3>11</h3>
								</td>
								<td>
									<h3>12</h3>
								</td>
								<td>
									<h3>13</h3>
								</td>
								<td>
									<h3>14</h3>
								</td>
								<td>
									<h3>15</h3>
								</td>
								<td class="none">
									<h3>16</h3>
								</td>
							</tr>
							<tr>
								<td class="none">
									<h3>17</h3>
								</td>
								<td>
									<h3>18</h3>
								</td>
								<td>
									<h3>19</h3>
								</td>
								<td>
									<h3>20</h3>
								</td>
								<td>
									<h3>21</h3>
								</td>
								<td>
									<h3>22</h3>
								</td>

								<td class="none">
									<h3>23</h3>
								</td>
							</tr>
							<tr>
								<td class="none">
									<h3>24</h3>
								</td>
								<td>
									<h3>25</h3>
								</td>
								<td>
									<h3>26</h3>
                                    <h4><span class="homework">숙제</span> <span>공부</span><span>HTML</span></h4>
                                    <ul>
                                        <li>HTML5에서 사용 하는 태그</li>
                                        <li>block & inline 구조별 태그</li>
                                    </ul>
								</td>
								<td>
									<h3>27</h3>
                                    <ul>
                                        <li><a href="http://www.weblee.kr/study_setting/markup/mk_list/test.html">답안지</a></li>
                                    </ul>
								</td>
								<td>
									<h3>28</h3>
                                    <ul>
                                        <li><a href="http://www.weblee.kr/study_setting/markup/mk_list/test.html">답안지</a></li>
                                    </ul>
								</td>
								<td>
									<h3>29</h3>
								</td>
								<td class="none"></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</main>

        <div class="homework_btn">숙제 제출하기</div>
        
        <div class="homework_form">
            <form id="homework_form" action="./homework_form.php" method="post">
                <h3>숙제 제목</h3>
                <input type="text" name="hw_title">
                <h3>숙제 내용</h3>
                <textarea name="hw_content" cols="30" rows="20"></textarea>
                <input type="submit" value="제출" class="submit_btn">
            </form>
        </div>
        <div class="form_bg"></div>

	</div>

	<? include_once('../footer.php'); ?>

	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/common.js"></script>
    <script src="../assets/js/timetable.js"></script>
</body>
</html>


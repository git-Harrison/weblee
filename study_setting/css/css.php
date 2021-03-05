<? include_once('../header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
	<title>WebLee</title>
	
	<!-- 파비콘 -->
	<link rel=" shortcut icon" href="../../assets/images/favicon.png">

	<!-- 폰트 -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;900&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/common.css">
	<link rel="stylesheet" href="../assets/css/sub_default.css">

</head>
<body class="sub css">

	<div class="wrap">

		<header>
			<div class="title">
				<h1>CSS</h1> <!-- 제목 -->
				<p>CSS 레퍼런스(reference)</p> <!-- 부제목 -->
			</div>
		</header>

		<main class="html">
			<div class="container">

				<div class="list">
				   	<h2>태그(Tag)</h2>
				   	<p>요소를 선택하여 속성을 줄 수 있습니다.</p>
				</div>

				<div class="list">
				   	<h2>CSS Selector</h2>
				   	<p>요소를 선택하여 속성을 줄 수 있습니다.</p>
				   	<table>
				      	<thead>
							<tr>
								<th>Tag</th>
								<th>Type</th>
								<th>Description</th>
								<th>Version</th>
							</tr>
				    	</thead>
				      	<tbody>
				         	<tr>
				            	<td>.</td>
				            	<td>.class {color:#fff;}</td>
				            	<td>클래스 선택자</td>
				            	<td>CSS1</td>
				        	</tr>
				        	<tr>
				            	<td>#</td>
				            	<td>#id {color:#fff;}</td>
				            	<td>아이디 선택자</td>
				            	<td>CSS1</td>
				        	</tr>
				      	</tbody>
				   	</table>
				   	<ul>
						<li>
							id 선택자
							<ul>
								<li>하나의 태그만 식별하기 위한 선택자입니다.</li>
								<li>하나의 태그에 하나만 사용 할 수 있습니다.</li>
							</ul>
						</li>
						<li>
							class 선택자
							<ul>
								<li>여러개의 태그를 식별하기 위한 선택자입니다.</li>
								<li>하나의 태그에 여러개를 사용 할 수 있습니다.</li>
								<li>“ . ”으로 표시합니다.</li>
							</ul>
						</li>
					</ul>
				</div>

			</div>
		</main>

	</div>

</body>
</html>
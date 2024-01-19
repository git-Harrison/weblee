<?php

//$dbHost = 'localhost';
//$dbUser = 'weblee';
//$dbPass  = 'leejaehun94!';
//$dbName  = 'weblee';
//$dbChar = "utf8";
//
//$pdo = new PDO("mysql:host={$dbHost};dbname={$dbName};charset={$dbChar}", $dbUser, $dbPass);
//
//$stmt = $pdo->prepare("SELECT * FROM eun WHERE id = :id");
//$stmt->bindValue(":id", "1");
//$stmt->execute();
//$row = $stmt->fetch();
//
//print_r($row);

?>

<div class="nav_icon_wrap">
	<div id="nav_icon">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="home_btn">
		<a href="https://weblee.kr/study_setting/index.php">
			<img src="../assets/images/logo.png" alt="로고이미지">
		</a>
	</div>
</div>

<div id="nav" class="nav">

	<div class="nav_logo">
		<img src="../assets/images/logo.png" alt="로고이미지">
	</div>
	
	<div class="container">
		<?	
			$filename =  basename($_SERVER['PHP_SELF']);

			if (file_exists($filename)) {

			    echo "<div class='update'>페이지 최종 수정일 : " . date ("Y년 m월  d일  H시 i분 ", filemtime($filename));
			    echo "</div>";
			}
		?> 
		<ul>
			<li>
				<a href="https://weblee.kr/study_setting/index.php">MAIN</a>
			</li>
			<li>
				<a href="https://weblee.kr/" target="_blank">WEBLEE</a>
			</li>
			<li>
				<a href="" target="_blank">CODPEN</a>
			</li>
			<li>
				<a href="https://publ-reference.tistory.com" target="_blank">TISTORY</a>
			</li>
			<li>
				<a href="https://github.com/wognsl305/weblee" target="_blank">GITHUB</a>
			</li>
		</ul>
	</div>
</div>

<script src="assets/js/test.js"></script>

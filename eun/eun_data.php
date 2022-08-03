<html>
	<meta charset="UTF-8">

<?php
 

	$host = 'localhost';
	$user = 'weblee';
	$pw = 'leejaehun94!';
	$dbName = 'weblee';
	$mysqli = new mysqli($host, $user, $pw, $dbName);
	
	$feel = $_POST['feel'];
	$food = $_POST['food'];
	$today = $_POST['today'];

	// $sql = mysqli_query($mysqli, "SELECT EXISTS (SELECT * from eun WHERE food='".$_POST['food']."') as success");
	// $usernamecount = $sql->fetch_array();

	// if($usernamecount['success']!=1) {
	// 	echo ("<script>alert('은아가 아니네요?? 웹툰이나 보러 꺼지세요'); location.href='https://comic.naver.com/index';</script>");
	// }else {
	// 	$result = mysqli_query($mysqli, "INSERT INTO eun(food) VALUES('".$food."')") or die ("알수없는 오류");
	// }

	if($_POST['today'] == ""){
		echo ("<script>alert('필수 항목을 채워주세요.'); location.href='eunhun.php';</script>");
	} else {
		$sql = mysqli_query($mysqli, "SELECT EXISTS (SELECT * from eun WHERE id='".$_POST['id']."') as success");

		$feel = $_POST['feel'];
		$food = $_POST['food'];
		$today = $_POST['today'];
		$sendtime = date("Y-m-d",time());
		$result = mysqli_query($mysqli, "INSERT INTO eun(feel,food,today,sendtime) VALUES('".$feel."','".$food."','".$today."','".$sendtime."')") or die ("알수없는 오류");

		echo ("<script>alert('전송완료.'); location.href='eunhun.php';</script>");
	}


	 
?>



</html>
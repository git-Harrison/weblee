<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		include_once('db.php');

		$id = $_POST['id'];
		$pw = $_POST['pw'];

		$check = "SELECT * FROM member WHERE id='$id'";

		$result = $mysqli->query($check);

		if ($result->num_rows==1) {
			$row = $result->fetch_array(MYSQLI_ASSOC);
			if (password_verify($pw, $row['pw'])) {
				$_SESSION['id'] = $id;
				$_SESSION['name'] = $row['name'];
				if (isset($_SESSION['id'])) {
					header('Location: index.php');
				}else {
					echo "세션 저장 실패";
				}
			}else {
				echo ("<script>alert('비밀번호가 일치하지 않습니다.'); location.href='login.php';</script>");
			}
		}else {
			echo ("<script>alert('존재하지 않는 아이디 입니다.'); location.href='login.php';</script>");
		}
	?>

</body>
</html>
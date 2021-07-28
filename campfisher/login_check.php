<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>campfisher</title>
</head>
<body>
	<?php

		include_once('db.php');

		session_start();

		$id=$_POST['id'];
		$password=sha1($_POST['pw']);
		$name=$_POST['name'];

		$check_id = "SELECT * from member where id='$id'";

		$result=$mysqli->query($check_id);

		if ($result->num_rows==1) {
			$row=$result->fetch_array(MYSQLI_ASSOC);
			if ($row['pw']==$password) {
				$_SESSION['id']=$id;
				if (isset($_SESSION['id'])) {
					header ('Location: index.php');
					exit();
				}else {
					header ('Location: login.php');
					echo "<script>alert('아이디 또는 비밀번호가 맞지 않습니다.');</script>";
				}
			}else {
				echo "<script>alert('아이디 또는 비밀번호가 맞지 않습니다.');</script>";
				echo "<script>location.href='login.php'</script>";
			}
		}

	?>
</body>
</html>
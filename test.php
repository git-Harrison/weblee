<html>
	<meta charset="UTF-8">

<?php
	include "db.php";

	if($_POST["id"] == "" || $_POST["pw"] == "" || $_POST["name"] == "" || $_POST['email'] == "" || $_POST['sex'] == ""){
		echo ("<script>alert('필수 항목을 작성해주세요.'); location.href='sinup.php';</script>");
	} else {
		if($_POST['pw']!=$_POST['repw']){
			echo '<script> alert("패스워드가 일치하지 않습니다."); history.back(); </script>';
		} else {
			$sql = mysqli_query($mysqli, "SELECT EXISTS (SELECT * from member WHERE id='".$_POST['id']."') as success");
			$usernamecount = $sql->fetch_array();

			if($usernamecount['success']==1) {
				echo ("<script>alert('중복된 아이디입니다!'); history.back();</script>");
			} else {
				$id = $_POST['id'];
				$password_hash = password_hash($_POST['pw'], PASSWORD_DEFAULT);
				$name = $_POST['name'];
				$email = $_POST['email'];
				$sex = $_POST['sex'];
				$sinupdate = date("Y-m-d", time());
				$result = mysqli_query($mysqli, "INSERT INTO member(id,pw,name,email,sex,sinupdate) VALUES('".$id."','".$password_hash."','".$name."','".$email."','".$sex."','".$sinupdate."')") or die ("알수없는 오류");

				echo ("<script>alert('회원가입이 되었습니다!'); location.href='login.php';</script>");
			}
		}
	}
?>


</html>
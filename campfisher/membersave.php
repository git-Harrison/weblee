<html>
	<meta charset="UTF-8">

<?php
 
	include_once('db.php');

	//회원가입
	$id=$_POST['id'];
	$password=($_POST['pw']);
	$name=$_POST['name'];
	$email =$_POST['email'];

	//로그인
	// $id_log=$_POST['id_log'];
	// $password_log=($_POST['pw_log']);


	if ($id == NULL || $id == NULL) {
		echo('<script>alert("빈칸을 채워주세요")</script>');
		echo "<script>location.href='sinup.php'</script>"; 
	}

	$check_id = "SELECT * from member where id='$id'";


	$sql = "insert into member (id, pw, name, email)";            
	$sql = $sql. "values('$id','$password','$name','$email')";  

	if($mysqli->query($sql)){
		echo "<script>alert('회원가입 완료');</script>";                                                  
		echo "<script>location.href='login.php'</script>";                    
	}else{                                                                              
		echo "<script>alert('중복된 아이디 입니다');</script>";
		echo "<script>location.href='sinup.php'</script>";                                                      
	}

	mysqli_close($mysqli);
	 
	 
?>



</html>
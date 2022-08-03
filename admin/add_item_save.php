<html>
<meta charset="UTF-8">

<?php

include_once('db.php');

    if($_POST['it_name'] == ""){
        echo ("<script>alert('필수 항목을 채워주세요.'); location.href='eunhun.php';</script>");
    } else {
        $sql = mysqli_query($mysqli, "SELECT EXISTS (SELECT * from hichoi WHERE id='".$_POST['it_name']."') as success");

        $it_name = $_POST['it_name'];
        $update_time = date("Y-m-d",time());
        $result = mysqli_query($mysqli, "INSERT INTO hichoi (it_name,update_time) VALUES('".$it_name."',now())") or die ("알수없는 오류");

        echo ("<script>alert('전송완료.'); location.href='eunhun.php';</script>");
    }


?>

</html>
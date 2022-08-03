<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

include_once('db.php');

$date = date("Y-m-d H:i:s");


$sql = "INSERT INTO homework(hw_title, hw_content, update_time) VALUES('".$_POST['hw_title']."', '".$_POST['hw_content']."', '".$date."');";

$result = mysqli_query($mysqli, $sql);

if ($result === false) {
    echo mysqli_error($mysqli);
} else {
    echo ("<script>alert('제출 완료!'); location.href='https://weblee.kr/study_setting/timetable/timetable3.php';</script>");
}


?>


</body>
</html>


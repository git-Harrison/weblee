<?php
session_cache_expire(120);

session_start();

if (!isset($_SESSION['id'])) {
    echo("<script>alert('Who are you? Login please'); location.href='eun.php';</script>");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>블랙빈메모리스트</title>

    <!-- 파비콘 -->
    <link rel=" shortcut icon" href="https://weblee.kr/eun/eun1.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="eun.css">
</head>
<body>
<?php include_once('header.php') ?>

<?php
$host = 'localhost';
$user = 'weblee';
$pw = 'dlwogns7662!';
$dbName = 'weblee';
$mysqli = new mysqli($host, $user, $pw, $dbName);
?>

<?php include_once('header.php') ?>

<style>
    th {
        padding: 8px;
        font-size: 14px;
    }
    td {
        font-size: 12px;
        padding: 8px;
        text-align: center;
    }
    tr {
        background-color: #ffffffb8;
        border-bottom: 1px solid #1a1a1a;
    }
    a.list {
        display: none !important;
    }
    #title {
        margin-bottom: 0;
    }
</style>

<h1 id="title">BlackBeen List</h1>
<table>
    <thead>
    <tr>
        <th>기분</th>
        <th>음식</th>
        <th>하고싶은말</th>
        <th>날짜</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $sql = 'select * from eun order by id desc';
    $result = $mysqli->query($sql);
    while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['feel']; ?></td>
            <td><?php echo $row['food']; ?></td>
            <td><?php echo $row['today']; ?></td>
            <td><?php echo $row['sendtime']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>


</body>
</html>

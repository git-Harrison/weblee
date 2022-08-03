<? include_once('db.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="src/components/css/admin.css">
</head>
<body>

<?php include_once('admin_nav.php'); ?>

<div class="wrap">

    <div class="container">

        <div class="content">
            <h1 class="main_title">상품등록</h1>
            <p class="main_title_sub">블로그페이의 배송준비 이상의 주문상태(취소 제외)의 주문을 리스트 합니다.</p>
        </div>

        <div class="content option_form">
            <div class="cont item_option_form">
                <form method="post" action="add_item_save.php">
                    <ul>
                        <li>
                            <h3>상품명</h3>
                            <input type="text" placeholder="상품명" name="it_name" value="">
                        </li>
                        <li>
                            <h3>입고가</h3>
                            <input type="number" min="0" max="999999" placeholder="입고가" name="it_price" value="">
                        </li>
                        <li>
                            <h3>소비자가</h3>
                            <input type="number" min="0" max="999999" placeholder="소비자가" name="it_cust_price" value="">
                        </li>
                        <li>
                            <h3>최저가</h3>
                            <input type="number" min="0" max="999999" placeholder="최저가" name="it_lowest_price" value="">
                        </li>
                    </ul>

                    <input type=submit value="등록하기">

                </form>
            </div>
            <button></button>
        </div>

    </div>

</div>


</body>
</html>
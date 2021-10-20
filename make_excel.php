<?php
include_once('./_common.php');

$sql = "SELECT distinct a.mb_id FROM g5_member a left JOIN g5_shop_order b ON a.mb_id=b.mb_id WHERE b.od_status IN ('입금', '배송','완료','준비') AND a.mb_datetime > '2015-01-01 00:00:00' AND b.od_country='KH'";
$row = sql_fetch($sql);
$od_rs = sql_query($sql);


header("Content-type: application/vnd.ms-excel");
header("Content-type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename = 캄보디아엑셀.xls");
header("Content-Description: PHP4 Generated Data");

?> 
<style> 
    h2 {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    th, td {
        text-align: center;
        border-bottom: 0.6px solid #eee;
    }
</style>
<table>
    <h2>캐나다</h2>
    <thead>
    <tr>
        <th scope="col">아이디</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $row = sql_fetch_array($od_rs); $i++){?>
        <tr id="table_bg" class="bg1cancel">
            <td class="td_chk"><?=$row['mb_id']?></td>
        </tr>
    <? } ?>
    </tbody>
</table>
 
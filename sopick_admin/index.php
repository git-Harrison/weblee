<?php
include_once('./_common.php');
?>
bbb

<?php 
exit;
/*
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename = invoice.xls" );
header( "Content-Description: PHP4 Generated Data" );

$sql =  "select * from s2_shop_order where no_excel_download = 0";
$result = sql_query($sql);
while($data = mysql_fetch_array($result)){
    $hjk .= $data['od_id'].", ";
}
echo $hjk;
*/

/*
$char = "A";
for ($i = 0; $i < 10; $i++) {
    echo $char."<br>";
    $char++;
}
exit;
*/

/*
// 신규주문 액셀다운로드
echo s2_excel_download("Orderlist_new");

exit;
*/

/////////////////////////////////////////////////////////////


/*
//. 토근값
echo blogpay_getToken();
*/

/*
//. 등록된 상품 정보
$products = blogpay_getItems();
foreach($products as $product){
    echo $product['goodName']."<br><br>";
}
*/

/*
//. 신규 등록 상품 저장
echo blogpay_getItems(1);
*/

/*
//. 상품 상세정보
$product = blogpay_getItem('202195913');
echo $product['adminMemo'];
*/

/*
//. 등록 상품 업데이트
echo blogpay_getItems_update();
*/

/*
//. 신규 주문 정보
$orders = blogpay_getOrder('new');
foreach($orders['orderList'] as $order){
    echo $order['orderNum']."<br><br>";
}
*/

/*
//. 신규 주문 처리
echo blogpay_getOrder_set();
*/

/*
//. 주문 상세정보
$order = blogpay_getOrder_req('21051012-f90ffFf1x2V');
echo "주문번호 : ".$order['info']['orderNum']."<br>";
echo "주문자 명 : ".$order['info']['orderName']."<br>";
foreach($order['product'] as $product){
    echo "상품번호 : ".$product['goodNum']."<br>";
    echo "선택옵션 : ".$product['noValue']."<br>";
    echo "상품개수 : ".$product['orderQty']."<br>";
}
*/

/*
// 신규주문 액셀다운로드
echo s2_excel_download("Orderlist_new");
*/

/*
// 주문 정산 액셀다운로드
echo s2_excel_download("settlement");
*/






















/*
//. 주문 상태를 변경한다
$url = 'https://'.$id.'.shop.blogpay.co.kr/Api/orderUpdate';
$param = [
    'token' => $token,
    'mode' => 'updateState',
    'orderNum' => '21051409-f91ecP72P8N',
    'prevStateCk' => 4,
    'nextStateCk' => 8,
    'siteid' => $id
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);
if($response['result']['resCode']==1){
    echo "정상 상태 변경 되었습니다.<br>";
}
*/

/*
//. 송장번호를 변경한다
$url = 'https://'.$id.'.shop.blogpay.co.kr/Api/orderUpdate';
$param = [
    'token' => $token,
    'mode' => 'shipUpdate',
    'orderNum' => '21051409-f91ecP72P8N',
    'shipNum' => '2222222222',
    'shipCode' => 2
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);
if($response['result']['resCode']==1){
    echo "정상 송장번호 등록 되었습니다.<br>";
}
*/

/*
//. 주문 상태를 배송중으로 변경한다
$url = 'https://'.$id.'.shop.blogpay.co.kr/Api/orderUpdate';
$param = [
    'token' => $token,
    'mode' => 'updateState',
    'orderNum' => '21051409-f91ecP72P8N',
    'prevStateCk' => 8,
    'nextStateCk' => 9,
    'siteid' => $id
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response, true);
if($response['result']['resCode']==1){
    echo "정상 배송중으로 상태 변경 되었습니다.<br>";
}
*/

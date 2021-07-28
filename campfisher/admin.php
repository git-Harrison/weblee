<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php require_once("dbconfig.php");?>
	

	<form method="post">
		<div>
			<div>
				<h4>상품코드</h4>
				<input type="text" name="item_id">
			</div>
			<div>
				<h4>상품종류</h4>
				<select name="item_type">
					<option value="camp">camp</option>
					<option value="fisher">fisher</option>
				</select>
			</div>
			<div>
				<h4>상품이름</h4>
				<input type="text" name="item_name">
			</div>
			<div>
				<h4>상품카테고리</h4>
				<select name="item_position" id="" >
					<option value="신상품">신상품</option>
					<option value="베스트상품">베스트상품</option>
				</select>
			</div>
			<div>
				<h4>상품가격</h4>
				<input type="text" name="item_price">
			</div>
			<div>
				<h4>상품이미지</h4>
				<input type="file" name="item_image">
			</div>
		</div>

		<input type="submit" value="저장" class="btn_submit">
	</form>

</body>
</html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	/*Menagement jQuery JavaScript*/
	$("table tbody tr:odd").css({"background":"#dddddd"});
	$("table thead tr th").css("color","white");
	
	});
	</script>
	<title>
		ตระกร้าสินค้า
	</title>
	</head>
	<body>
	<center>
		<table border="1" width="500">
			<thead>
				<tr bgcolor="#cccccc">
					<th>รูปสินค้า</th>
					<th>ชื่อสินค้า</th>
					<th>ราคาสินค้า</th>
					<th>จัดการ</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><img src="images/small/190481106X.png"</td>
					<td>product01</td>
					<td>1000</td>
					<td>
						<button onclick="javascript:location='cart.php?product_id=101'">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481137X.png"</td>
					<td>product02</td>
					<td>1200</td>
					<td>
						<button onclick="javascript:location='cart.php?product_id=102'">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481140X.png"</td>
					<td>product03</td>
					<td>1300</td>
					<td>
						<button onclick="javascript:location='cart.php?product_id=103'">
						Add to Cart
						</button>				
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481106X.png"</td>
					<td>product04</td>
					<td>1000</td>
					<td>
						<button onclick="javascript:location='cart.php?product_id=104'">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481137X.png"</td>
					<td>product05</td>
					<td>1200</td>
					<td>
						<button onclick="javascript:location='cart.php?product_id=105'">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481140X.png"</td>
					<td>product06</td>
					<td>1300</td>
					<td>
						<button onclick="javascript:location='cart.php?product_id=106'">
						Add to Cart
						</button>				
					</td>
				</tr>
			<tbody>
		</table>
		</center>
	</body>
</html>
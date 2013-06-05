<html>
	<head>
	<style>
		#myCart{
		background:#cccccc;
		border-radius:5px;
		height:auto;
		width:500px;
		display:none;
		padding:5px;
		position:absolute;
		z-index:5px;

		}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	/*Menagement jQuery JavaScript*/
	$("table tbody tr:odd").css({"background":"#dddddd"});
	$("table thead tr th").css("color","white");
	$(".addCart").click(function(event){
		//alert(event.target.id);
		$.ajax({
			url:'cart.php',
			type:'get',
			dataType:'json',
			data:{"product_id":event.target.id},
			success:function(data){
				//alert(data);
			if(data['result']=="success"){
			alert("Add product to my cart is successfully");
			}
			}
		});
	});

	//show my cart
	$("#btnShowCart").click(function(){
		$.ajax({
			url:'cart.php',
			type:'get',
			dataType:'html',
			data:{"action":"showData"},
			success:function(data){
					$("#myCart").html(data).slideToggle();
			}
		});
	});
	});
	</script>
	<title>
		ตระกร้าสินค้า
	</title>
	</head>
	<body>

	<center>
	<div id="myCart">
	</div>
	<button id="btnShowCart">Show My Cart</button>
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
					<td><img src="images/small/190481106X.png"></td>
					<td>product01</td>
					<td>1000</td>
					<td>
						<button class="addCart" id="101">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481137X.png"></td>
					<td>product02</td>
					<td>1200</td>
					<td>
						<button class="addCart" id="102">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481140X.png"></td>
					<td>product03</td>
					<td>1300</td>
					<td>
						<button class="addCart" id="103">
						Add to Cart
						</button>				
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481106X.png"></td>
					<td>product04</td>
					<td>1000</td>
					<td>
						<button class="addCart" id="104">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481137X.png"></td>
					<td>product05</td>
					<td>1200</td>
					<td>
						<button class="addCart" id="105">
						Add to Cart
						</button>
					</td>
				</tr>
				<tr>
					<td><img src="images/small/190481140X.png"></td>
					<td>product06</td>
					<td>1300</td>
					<td>
						<button class="addCart" id="106">
						Add to Cart
						</button>				
					</td>
				</tr>
			<tbody>
		</table>
		</center>
	</body>
</html>
<?php session_start();  
ob_start(); echo"session id".session_id();
error_reporting (E_ALL ^ E_NOTICE);
include("config.inc.php");
//$_SESSION['use']=1;
//$_SESSION['cart']=array();

?>
<script language="javascript" type="text/javascript">
function Update_qty(targ,selObj,restore){
 eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
	if(restore)selObj.selectedIndex=0;
}
</script>

<?php 
$expire=3600;
$time=time();
$expire=$expire+$time;
$script_url=$_SERVER['PHP_SELF'];


if(!isset($_SESSION['cart'])){
	if(isset($_COOKIE['cart'])){
	$_SESSION['cart']=array();
	$_SESSION['cart']=unserialize(stripslashes($_COOKIE['cart']));
	$_SESSION['total_items']=cart_calculate_items($_SESSION['cart']);
	$_SESSION['total_price']=cart_calculate_price($_SESSION['cart']);
	}else{
	$_SESSION['cart']=array();
	$_SESSION['total_items']=0;
	$_SESSION['total_pirce']=0.00;
	$s_cart=serialize($_SESSION['cart']);
	setcookie('cart',$s_cart,$expire);
	}	
}
if($_GET['action']=="add"){

	$item=$_GET['pid'];
	echo"item:$item<br>";
	if(isset($_SESSION['cart'][$item])){
	echo"add to cart";
	echo"item2:$item<br>";
	$_SESSION['cart'][$item]=+1;
	
	echo"bb<br>";
	}else{
	echo"one for cart";
	$_SESSION['cart'][$item]=1;
	}
	$_SESSION['total_items']=cart_calculate_items($_SESSION['cart']);
	$_SESSION['total_price']=cart_calculate_price($_SESSION['cart']);
	$s_cart=serialize($_SESSION['cart']);
	setcookie('cart',$s_cart,$expire);
	header("Location:$cript_url?action=view&page=basket");
	exit;
}
if($_GET['action']=="update"){
	$item=$_GET['pid'];
	$quantity=$_GET['quantity'];
	if(isset($_SESSION['cart'][$item])){
	 $_SESSION['cart'][$item]=$quantity;
	}
	$_SESSION['total_items']=cart_calculate_items($_SESSION['cart']);
	$_SESSION['total_price']=cart_calculate_price($_SESSION['cart']);
	$s_cart=serialize($_SESSION['cart']);
	setcookie('cart',$s_cart,$expire);
	header("Location:$cript_url?action=view&page=basket");
	exit;
	
}
if($_GET['action']=="del"){
	$item=$_GET['pid'];
	unset($_SESSION['cart'][$item]);
	$_SESSION['total_items']=cart_calculate_items($_SESSION['cart']);
	$_SESSION['total_price']=cart_calculate_price($_SESSION['cart']);
	$s_cart=serialize($_SESSION['cart']);
	setcookie('cart',$s_cart,$expire);
	header("Location:$cript_url?action=view&page=basket");
	exit;
}
if($_GET['action']=="view"){
	cart_show($_SESSION['cart']);
	echo"show cart".$_SESSION['cart'];echo"cus_name".$_SESSION['cus_name'];
}


function cart_calculate_items($cart){
	$items=0;
	if(is_array($cart)){
		foreach($cart as $productID=>$qty){
		$items+=$qty;
		}
		
	}
	return $items; 
}
function cart_calculate_price($cart){
	$price=0.00;
	if(is_array($cart)){
	foreach($cart as $productID=>$qty){
		$strSQL="select product_price from product where product_id='$productID'";
		$result=mysql_query($strSQL);
		$rs1=mysql_fetch_array($result);
		$item_price=$rs1['product_price'];
		$price+=$item_price*$qty;
		}
	}
	return $price;

}
function cart_get_item_detail($productID){
$strSQL="select * from product where product_id='$productID'";
$result=mysql_query($strSQL);
$rs=mysql_fetch_array($result);
return $rs;
}
function combo_qty($qty_n,$pname){
	echo"<select onChange=\"Update_qty('parent',this,0)\">";
	for($i=1;$i<=20;$i++)
	{
		if($i==$qty_n){
		echo"<option value=\"?action=update&pid=".$pname."&quantity=$i&page=basket\"selected>$i</option>";
		}else{
		echo"<option value=\"?action=update&pid=".$pname."&quantity=$i&page=basket\">$i</option>";
			}
		}
		echo"</select>";
}
function cart_show($cart){
	include("top_template.php");
	$i=0;
	if(is_array($cart)){echo"มีข้อมูล";}else{echo"ไม่มีข้อมูล";}
	foreach($cart as $productID=>$qty){
	$rs=cart_get_item_detail($productID);
	$bgcolor=($i++%2)?'#ffffff':'#ccc';
	
	echo"<tr bgcolor=\"$bgcolor\">";
		echo"<td><center><a  href=\"index.php?action=del&pid=$productID&page=basket\"><img src=\"./images/b_drop.png\" border=\"0\">Del</a></td>";
		echo"</center><td>";
		if(strlen($rs[product_name])>30){
		$product_name=mb_substr($rs[product_name],0,20,"UTF-8")."...";
		echo"$product_name";
		}else{
		echo"$rs[product_name]";
		}
		echo"</td>";
		
		echo"<td>";
		if(strlen($rs[product_title])>50){
		$product_detail=mb_substr($rs[product_title],0,50,"UTF-8")."...";
		echo"$product_title";
		}else{
		echo"$rs[product_title]</td>";
			 }
		echo"<td>";
		echo combo_qty($qty,$productID);
		echo"</td>";
		
		echo"<td>";
		echo number_format($rs['product_price'],2,'.',',');
		echo"</td>";
		
		echo"<td>";
		echo number_format(($qty*$rs['product_price']),2,'.',',');
		echo"</td>";
	echo"</tr>";
	
	}
	
	echo"<tr>";
		echo"<td colspan=5></td>";
		echo"<td>ค่าจัดส่ง ";
		if($_SESSION['total_price']>=500){
			$delivery=50;
			}else{
			$delivery=0;
			}
		echo"$delivery";
	
		echo"</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td colspan=5></td>";
		echo"<td>ภาษี";
		$tax=$_SESSION['total_price']*0.07;
		echo number_format($tax,2,'.',',');
		echo"</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td colspan=5></td>";
		echo"<td>ราคาสุทธิ";
		$paymoney=$_SESSION['total_price']+$tax+$delivery;
		echo number_format($paymoney,2,'.',',')."&nbsp;บาท";
		echo"</td>";
	echo"</tr>";
	
echo"</table>";	

//echo"<a href=\"javascript: history.back(1)\">ชื้อสินค้าต่อ</a>&nbsp;&nbsp;";
echo"<a href=\"index.php?page=product\">ชื้อสินค้าต่อ</a>&nbsp;&nbsp;";
echo"<a href=\"index.php?page=confrim_order\">ยืนยันการสั่งซื้อ</a>";
$total_items=$_SESSION['total_items'];
echo"$total_items";
 
}

?>


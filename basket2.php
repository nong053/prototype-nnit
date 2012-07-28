<?  session_start();
	$item=$_GET['pid'];
	echo"item$item<br>";
	echo session_id()."<br>";
	$_SESSION['cart'][$item]++;
	echo"session".$_SESSION['cart'][$item];	
?>

<?php

$host=$_SERVER['HTTP_HOST'];


$userAsUrl = explode(".", $host);
$userUrlId = "";


if(count($userAsUrl)>2){
	$userUrlId=$userAsUrl[1];
}else{
	$userUrlId=$userAsUrl[0];
}
//echo "host".$host."<br>";

if(($host!="www.nn-it.com") and ($host!="nn-it.com") and($host!="localhost:9999")){
	//echo $host."!="."www.nn-it.com";
	echo"<script>window.location=\"../$userUrlId\"</script>";
}else{
	echo"<script>window.location=\"../workphp\"</script>";
}


?>

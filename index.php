
<?php

$host=$_SERVER['HTTP_HOST'];


$userAsUrl = explode(".", $host);
$userUrlId = "";


if(count($userAsUrl)>2){
	$userUrlId=$userAsUrl[1];
}else{
	$userUrlId=$userAsUrl[0];
}
//echo "host=".$host."<br>";
//echo "userUrlId=".$userUrlId."<br>";
//echo "userAsUrl[1]=".$userAsUrl[0]."<br>";
//echo "userAsUrl[2]=".$userAsUrl[1]."<br>";
//echo "userAsUrl[3]=".$userAsUrl[2]."<br>";


if(($host!="www.nn-webready.com") and ($host!="nn-webready.com") and($host!="localhost:9999")){
	//echo $host."!="."www.nn-it.com";
	echo"<script>window.location=\"../$userUrlId\"</script>";

}else{
	echo"<script>window.location=\"../nn-webready\"</script>";
}


?>

<?php
$id=$_POST['id'];

$fullName=$_POST['fullName'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$address=$_POST['address'];
$action=$_POST['action'];

/*
echo"fullName = $fullName\n";
echo"email= $email\n";
echo"tel = $tel\n";
echo"address = $address\n";
echo"action = $action\n";
*/
require_once("config.php");
//action is add
if($action=="add"){
	$strSQL="INSERT INTO register_tbl(fullName,email,tel,address)VALUES('$fullName','$email','$tel','$address')";
	$result=mysql_query($strSQL);
	if($result){
		print('{"result":"success"}');
	}else{
		print('{"result":"error"}');
	}

}
//action is select
if($action=="select"){
	$strSQL="SELECT * FROM register_tbl";
	$result=mysql_query($strSQL);
	$data="";
	$i=1;
	while($rs=mysql_fetch_array($result)){
		$id=$rs[id];
		$fullName=$rs[fullName];
		$email=$rs[email];
		$tel=$rs[tel];
		$address=$rs[address];
		$data.="<tr>";
			
			$data.="<td>";
			$data.="$i";
			$data.="</td>";

			$data.="<td>";
			$data.="$fullName";
			$data.="</td>";

			$data.="<td>";
			$data.="$email";
			$data.="</td>";

			$data.="<td>";
			$data.="$tel";
			$data.="</td>";

			$data.="<td>";
			$data.="$address";
			$data.="</td>";

			$data.="<td>";
			//$data.="<a href='server.php&id=$id'>Del</a>";
			$data.="<div class='del' id='$id'>Del</div>";
			
			$data.="<div class='edit' id='$id'>Edit </div>";
			$data.="</td>";
		$data.="</tr>";
	$i++;
	}
	print($data);	

}
//action is delete
if($_GET['action']=="del"){
$id= $_GET['id'];
//echo"id is $id";
$strSQL="DELETE FROM register_tbl WHERE id=$id";
$result=mysql_query($strSQL);
if($result){echo'{"result":"success"}';}else{echo'{"result":"error"}';}
}
//action is edit
if($_GET['action']=="edit"){
$id= $_GET['id'];
	//echo"edit";
	$strSQL="SELECT * FROM register_tbl WHERE id=$id";
	$result=mysql_query($strSQL);
	$rs=mysql_fetch_array($result);
	 $id=$rs[id];
	 $fullName=$rs[fullName];
	 $email=$rs[email];
	 $tel=$rs[tel];
	 $address=$rs[address];
	 echo'{"id":"'.$id.'","fullName":"'.$fullName.'","email":"'.$email.'","tel":"'.$tel.'","address":"'.$address.'"}';
}

//action is edit editMange
if($_POST['action']=="editMange"){
	
	$strSQL="UPDATE register_tbl SET fullName='$fullName',email='$email',tel='$tel',address='$address' WHERE id='$id'" ;
	$result=mysql_query($strSQL);
	if($result){echo'{"result":"success"}';}else{echo"error".mysql_error();}
}
?>
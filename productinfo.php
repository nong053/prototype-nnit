<? session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
//RewriteRule (.*)/$ productinfo.php?proID=$1
$member_user=$_GET['proID'];

$_SESSION['member_user']=$member_user;
$member_user=$_SESSION['member_user'];
echo"<script>window.location=\"../index.php?page=home\"</script>";

?>

</body>
</html>

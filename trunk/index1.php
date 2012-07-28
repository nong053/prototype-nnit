<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?

echo "Now URL = ".$_SERVER['REQUEST_URI'];


//*** Link Page ***//
echo "<hr>";
echo "<a href=hello.html>Hello PHP</a> , <a href=config.html>Config PHP</a> , <a href=install.html>Install PHP</a> , <a href=login.php>Control Panel</a>";
echo "<hr>";
//*** Include Content ***//

if($_SERVER['REQUEST_URI'] == "/wep_polo_type/hello.html")
{
	require("hello.php");
	echo"hello.html";
}
elseif($_SERVER['REQUEST_URI'] == "/wep_polo_type/config.html")
{
	require("config.php");
}
elseif($_SERVER['REQUEST_URI'] == "/wep_polo_type/install.html")
{
	require("install.php");
}
elseif($_SERVER['REQUEST_URI'] == "/wep_polo_type/login.html")
{
	require("login.php");
}
else
{
	// Default include;
}

?>

<style>
#home_style{
	padding:5px;
}
</style>
<div id="home_style">
<?
$result_home = $db->tableSQL("home where admin_id=$admin_id");
$rs_home = mysql_fetch_array($result_home);
echo"$rs_home[home_detail]";
?>
</div>
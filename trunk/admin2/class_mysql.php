<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
class database{
	function selectSQL($table)
	{
			$strSQL="select * from $table";
			$result=mysql_query($strSQL);
			return $result;
		
	}
}
?>
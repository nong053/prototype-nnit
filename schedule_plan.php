<?php
$list_id=$_GET['list_id'];
$bj = new manage_data();
$result=$bj->select_data("schedule_plan where list_id=$list_id");
$rs=mysql_fetch_array($result);
echo $rs['list_detail'];
?>
<?php
	function __autoload($filename){
	require_once($filename.".php");
	}
	$bj = new manage_data();
	$result=$bj->select_data("schedule_plan");
	
?>
<table width="100%" id="tableTv">
	<thead>
		<tr bgcolor="#dddddd">
			<th>
			<div class="txtTitle">
			ลำดับ
			</div>
			</th>
			<th>
			<div class="txtTitle">
			รายการ
			</div>
			</th>
			
			<th>
			<div class="txtTitle">
			เริ่มเวลา
			</div>
			</th>
			<th>
			<div class="txtTitle">
			จบเวลา
			</div>
			</th>
			
		</tr>
	</thead>
	<tbody>
<?php
$i=1;
while($rs=mysql_fetch_array($result)){
//echo $rs[list_date]."<br>";
//echo $rs[list_name]."<br>";
?>
		<tr>
			<td>
			<center>
			<?=$i?>
			</center>
			</td>
			<td>
			
			<img src="schedule_plan/<?=$rs[list_picture]?>" width="100">
			<div id="textSchedule" style="display:inline; padding-left:5px;">
			<?=$rs[list_name]?>
			</div>
			</td>
			<td>
			<center>
			
			
			<?php


?>
 

 <!--
<?php
$Num=55;
printf("%06d", $Num);
?>
-->
 
		
			<?
				print str_pad($rs[list_hour_from], 2, "0", STR_PAD_LEFT);
			?>
			:
			<?
				print str_pad($rs[list_minute_from], 2, "0", STR_PAD_LEFT);
			?>
			
			</center>
			</td>
			<td>
			<center>

			<?
				print str_pad($rs[list_hour_to], 2, "0", STR_PAD_LEFT);
			?>
			:
			<?
				print str_pad($rs[list_minute_to], 2, "0", STR_PAD_LEFT);
			?>
			

			</center>
			</td>
			
		</tr>
<?
$i++;
}
?>
		
	</tbody>
</table>
<br style="clear:both">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.topic{
	width:auto;
	height:auto;
}
.topic #bg_topic{
	width:auto;
	height:auto;
	padding:5px;
	
}
.topic #bg_topic #title_topic{
	width:auto;
	height:auto;
	padding:5px;
	background-image:url(images/bg_title.png);
	/*color:#FFF;*/
	font-weight:bold;
	margin:3px;
	font-size:13px;
}
.topic #bg_topic #name_set{
	padding:5px;
}
.topic #bg_topic #name_topic{
	width:auto;
	padding:5px;
}
.topic #bg_topic #detail_topic{
	width:auto;
	height:auto;
	padding:5px;
}
#title{
		/*background-image:url(images/main_menu.gif);*/
		/*padding:5px;
		font-size:13px;
		font-weight:bold;
		color:#FFF;
		background-color:#CCC;
		width:750px;*/
		
	border-bottom:#5E88A3 0.2em solid;
	<!--height:50px;-->
	padding-left:50px;
	color:#5E88A3;
	font-weight:bold;
	font-size:13px;
	background-image:url(images/sub_atp3.jpg);
	}

	#bgButton{
	padding:5px;
	}

</style>
<script>
$(document).ready(function(){
	$("form#insert_topic").submit(function(){
	
		if($("#check_sum_by_system").val()==$("#check_sum_by_user").val()){
				if($("#topic_name").val() !=""){
				document.insert_topic.submit();
				}else{
				alert("กรอกชื่อด้วยครับ");
				}
		}else{
			alert("กรอกรหัสยืนยันไม่ถูกต้องครับ");
		}
	return false;
	});
});
</script>

<!-- CKE-->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!-- CKE-->
<div id="title" style="padding-left:5px;">
ถามตอบ->ตั้งคำถาม
<?php
echo"admin_id=$admin_id";
?>
</div>
<form action="insert_topic.php" method="post" id="insert_topic">
<div class="topic">
	<div id="bg_topic">
    	<div id="title_topic">
        ตั้งคำถาม
        </div>
        <div id="name_set">
    	ชื่อ<br><input type="text" name="topic_name" id="topic_name">
        </div>
        <div id="name_topic">
        หัวข้อ<br><textarea name="topic_subject" cols="40" rows="2"></textarea>
        </div>
        <div id="detail_topic">รายละเอียด<br>
          <!--CKEditor-->
	  <textarea  id="topic_detail" name="topic_detail" ><?=$topic_detail?></textarea>
	  <script type="text/javascript">
        //<![CDATA[
            CKEDITOR.replace( 'topic_detail');
        //]]>
    </script>
	  <!--CKEditor-->
        </div>
		<div id="check_sum_area">
			<table>
				<tr>
					<td>
					<?php
					$rand1=rand(1,10);
					$rand2=rand(1,10);
					$check_sum=$rand1+$rand2;
					?>
				กรอกรหัสยืนยัน :<b><? echo "$rand1 + $rand2 =?"; ?></b>
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" name="check_sum_by_user" id="check_sum_by_user"/>
					<input type="hidden" name="check_sum_by_system" id="check_sum_by_system" value="<?=$check_sum?>"/>
					</td>
				</tr>
			</table>
		</div>
		<div id="bgButton">
		<input type="hidden" name="member_user_url" id="member_user_url" value="<?=$_SESSION['member_user_url2']?>">
		<input type="hidden" name="admin_id" id="admin_id" value="<?=$admin_id?>">
        <input type="submit" value="ตั้งคำถาม"  /><input type="reset" value="ยกเลิก"  class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"/>
		</div>
    </div>
</div>
</form>

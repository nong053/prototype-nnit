<?php
$news_id = $_GET[news_id];
$bj_manage= new manage_data();
$resultNews =$bj_manage->select_data("news where news_id=$news_id");
$rsNews=mysql_fetch_array($resultNews);
echo $rsNews[news_detail];
?>
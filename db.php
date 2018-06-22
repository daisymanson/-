<?php
$link=mysql_connect("localhost","user","0000");
if (!$link) die('連線失敗');
mysql_query("SET NAMES 'utf8'");
$db_sele=@mysql_select_db('health_manager', $link);
if (!$db_sele) die ('資料庫選擇失敗');
?>
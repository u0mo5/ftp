<?php
$host="127.0.0.1:3306";
$db_user="root";
$db_pass="u0mo5boy";
$db_name="yfcmf";
$timezone="Asia/Shanghai";

$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间


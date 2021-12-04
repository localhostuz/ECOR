<?php
$db = mysql_connect ("localhost:3306","root","") or die('Connection error.');
//mysql_query('SET CHARACTER SET cp1251');
//mysql_query('SET NAMES cp1251');
//mysql_query("SET lc_time_names = 'ru_RU'");
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

mysql_select_db("ecor",$db);
?>

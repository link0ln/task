<?php

mysql_connect("mysqldb","link0ln","RaNd0m") or die('DB error');
mysql_select_db($mdb);
mysql_query('SET CHARACTER SET utf8');
mysql_query('SET NAMES utf8');


$mresult = mysql_query("select NOW()");
$mrow=mysql_fetch_array($mresult);
print "<center> Тест контейнера mysql(select NOW();): ".$mrow[0]."</center><br><br>";

phpinfo();

?>

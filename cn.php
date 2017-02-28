<?php
$cn = mysql_connect('localhost', 'root', '') or
	die('Unable to connect. Check connection parameters.');
mysql_select_db('etravels', $cn) or
	die(mysql_error($cn));
?>
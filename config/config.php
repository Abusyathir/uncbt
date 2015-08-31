<?php
$conn = mysql_connect('localhost', 'root', '');
if($conn)
{
	mysql_select_db('cbt');
}
else
{
	die('Can not connect to database.');
}
?>
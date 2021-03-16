<?php

if(empty($_POST))
{
	die("&e=4");
}

$d = addslashes($_POST['d']);
$id = addslashes($_POST['id']);
	mysql_connect("", "", "");
	mysql_select_db("");
	if(strlen($d) > 2) {
		mysql_query("UPDATE penguins SET `data` = '$d' WHERE `id` = '$id'");
		$sqlQuery = mysql_query("SELECT * FROM `penguins` WHERE `id` != '$id'");
		echo "&c=";
		while($get = mysql_fetch_array($sqlQuery))
		{
			echo $get['id'] . $get['data'] . "\r\n";
		}
	}
}
?>

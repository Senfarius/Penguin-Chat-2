<?php

if(empty($_POST))
{
	die("&e=4");
}


$d = addslashes($_POST['d']);
$n = addslashes($_POST['n']);
$id = addslashes($_POST['id']);

$r = substr($d, 0, 1);
{
	$pS = $d . $n;
		mysql_query("UPDATE penguins SET string = '$pS' WHERE id = '$id'");
		mysql_query("UPDATE penguins SET room = '$r' WHERE id = '$id'");
		$select = "SELECT * FROM `penguins` WHERE `n` != '$n'";
		$q = mysql_query($select) or die(mysql_error());
		echo "&p=10101KEBot" . "\r\n"; // this is makes the bot appear, DO NOT EDIT, THE SERVER WILL NOT FUNCTION WITHOUT IT
		while($get = mysql_fetch_array($q))
		{
			$string = substr($get[string], 1, 99);
			echo $get[id] . $string . "\r\n";
		}
}

?>

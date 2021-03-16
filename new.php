<?php

if(!$_POST)
{
	die("&e=4");
}

	include("MySQL.php");
	$name = addslashes($_POST['n']);
	$pass = addslashes($_POST['p']);
	if(!mysql_num_rows(mysql_query("SELECT * FROM penguins WHERE name = '$name'")) == 1)
	{
		mysql_query("INSERT INTO penguins (name) VALUES ('$name')");
		$d = mysql_fetch_array(mysql_query("SELECT * FROM penguins WHERE name = '$name'"));
		if($name == "" & $pass == "") { // feel free to change the names + password.
		echo "&e=2" . "&id=" . $d['id'] . "&m=1";
	}	
	} else {
	
	echo "&e=2" . "&id=" . $d['id'] . "&m=0";
	}
	
	if(!mysql_num_rows(mysql_query("SELECT * FROM penguins WHERE name = '$name'")) == 0)
	{
		die("&e=2"); // name is unavailable
	}


	/*
	INTRUCTIONS FOR ENTERING IN ADMIN PASSWORDS:
	WHEN LOGGING IN: ENTER YOUR USERNAME BUT DO NOT PUSH ENTER.
	DO "SHIFT ~" (without quotes) AND YOU WILL SEE A PASSWORD BOX.
	ENTER THE PASSWORD YOU HAVE ENTERED ABOVE.
	*/
?>
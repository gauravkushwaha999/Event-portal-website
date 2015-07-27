<?php

$con = mysql_connect("localhost","root","iitropar");
	if (!$con){  die('Could not connect: ' . mysql_error()); }
	$db =mysql_select_db("events", $con);

$sno = $_POST['sno'];
$qry = "DELETE FROM event WHERE SNo ='$sno'";
$result=mysql_query($qry);

echo "YES";

?>
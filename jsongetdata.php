<?php

$con = mysql_connect("localhost","root","iitropar");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("events", $con);

$result = mysql_query("SELECT * FROM event ORDER BY `datetime` DESC LIMIT 50");

while($row = mysql_fetch_assoc($result))
  {
	$output[]=$row;
  }

print(json_encode($output));

mysql_close($con);


?>
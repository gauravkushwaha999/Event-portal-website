<?php
     $con = mysql_connect("localhost", "root", "iitropar");
     if (!$con){  die('Could not connect: ' . mysql_error()); }
     $db =mysql_select_db("events", $con);

	 if(isset($_POST['delevent']))
	 {
	 $surrogate=$_POST['delevent'];
	 }
	 $sql="DELETE FROM event WHERE `Surrogate`=\"$surrogate\"";
	 $qury =mysql_query($sql);

	if (!$qury)
	echo mysql_error();
	else
	{
	header('Location: ../index.php');
	}
?>

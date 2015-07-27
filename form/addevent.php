<html>
	<body>
		<?php $event=$_POST["element_1"]; ?>
		<?php $datemm=$_POST["element_2_1"]; ?>
		<?php $datedd= $_POST["element_2_2"]; ?>
		<?php $dateyy= $_POST["element_2_3"]; ?>
		<?php $timehh= $_POST["element_3_1"]; ?>
		<?php $timemm= $_POST["element_3_2"]; ?>
		<?php $timeap= $_POST["element_3_4"]; ?>
		<?php $category= $_POST["element_9"]; ?>
		<?php $venue= $_POST["element_4"]; ?>
		<?php $duration= $_POST["element_8"]; ?>
		<?php $descp= $_POST["element_5"]; ?>
		<?php $cmail= $_POST["element_6"]; ?>
		<?php $publisher= $_POST["element_10"];?>
		<?php $surrogateKey = $datedd.$datemm.$dateyy.$timehh.$timemm.$timeap.$venue;?>
		<?php $timekey = $dateyy."-".$datemm."-".$datedd." ".$timehh.":".$timemm.$timeap;?>
		<?php
			$con =mysql_connect("localhost","root","iitropar");
			$db =mysql_select_db ("events",$con);
			?>
		<?php
			$sql="INSERT IGNORE INTO event values(NULL,'$event','$datedd','$datemm','$dateyy','$timehh','$timemm','$timeap','$category','$venue','$duration',
			'$descp','$cmail','$publisher','$surrogateKey',STR_TO_DATE('$timekey','%Y-%m-%d %h:%i%p'))";
			if(strcmp($datedd,"")!=0&&strcmp($datedd,"")!=0&&strcmp($datedd,"")!=0)
			{
			$qury =mysql_query($sql);
			if (!$qury)
				echo mysql_error();
			else
				{
				header('Location: curl.php?eventname='.$event);
				}
			}
			else
				{
				header('Location: ../index.php');
				}
			?>
	</body>
</html>

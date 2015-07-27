<script>
$(function(){
    $(document).on('click','.trash',function(){
        var del_id= $(this).attr('id');
	 var $ele = $(this).parent().parent();
        $.ajax({
            type:'POST',
            url:'delete.php',
            data:{'sno':del_id},
            success: function(data){
                 if(data=="YES"){
                    $ele.fadeOut().remove();
                 }else{
                        alert("can't delete the row")
                 }
             }

            });
        });
});
</script>
<?php
	$con = mysql_connect("localhost","root","iitropar");
	if (!$con){  die('Could not connect: ' . mysql_error()); }
	$db =mysql_select_db("events", $con);
	if(isset($_POST['choice'])&&isset($_POST['value']))
	 {
	 $choice=$_POST['choice'];
	 $type=$_POST['value'];
	 }
	 /*else
	 {
	 $choice="seminar";
	 $type=1;
	 }*/
	function delete($num)
	{
	echo $sql_delete = " DELETE FROM event WHERE SNo=$num";
	}
	if($type==1)
   	{ 	
	$sql="SELECT * FROM event ORDER BY `datetime` DESC LIMIT 50";}
	else if($type==2)
	{
	$sql="SELECT * FROM event WHERE Category=\"$choice\" ORDER BY 'datetime` DESC LIMIT 50";
	}
	else if($type==3)
	{
	$sql="SELECT * FROM event WHERE 'Event' LIKE '%$choice%' OR 'Event Description' LIKE '%$choice%' OR 'Venue' LIKE '%$choice%'
	OR 'Coordinator_ID' LIKE '%$choice%' OR 'Publisher' LIKE '%$choice%'";
	}
	else if($type==4)
	{
	$sql="SELECT * FROM event WHERE Publisher=\"$choice\"";
	}
	$result = mysql_query($sql);
 	$array = array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
	$i=0;
	while($info = mysql_fetch_array( $result ))
	{
	$dt = strtotime($info['Date(date)'] . "-" . $info['Date(Month)'] . "-" . $info['Date(YEAR)']);
	$day = date("l", $dt);
	?>
	<div class="event-box" style="font-size:17px;">
           <div class="description">
				<p class="title"> <?php echo $info['Event']; ?> </p>
				<ul class="horizontal company-images">
				   <li></li>
				</ul>
                <div class="clear-both"></div>
                <div class="details"><br>
                <p style="font-size:16px"> <?php echo nl2br(substr($info['Event Description'],0)); ?> </p>
                </div>
				<div class="details"><br>
				Coordinator's Email &nbsp;: &nbsp;<b><?php echo $info['Coordinator_ID']; ?> </b>
				</div>
                </div>
                <div class="action-box">
                <div class="time-box"><img src="files/clock1.png"> <?php echo $info['Time(HH)']. ":" . $info['Time(MM)'] . " " . $info['Time(AM/PM)']; ?>
                <div class="clear-both"></div>
                </div>
                <div class="time-box"> <img src="files/calendar1.png"><b><?php echo " ".$day . "</b>, " . $info['Date(date)'] . " " .$array[$info['Date(Month)']] . " " . $info['Date(YEAR)']; ?>
                <div class="clear-both"></div>
                </div>
                <div class="event-time"><br> Duration&nbsp;:&nbsp;<b><?php echo $info['Duration']; ?></b>
                <div class="clear-both"></div>
                </div>
                <!-- information about timezone -->
                <div class="event-time">Venue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $info['Venue']; ?></b>
				<div class="published_by"><br>Published By<br> <b><?php echo $info['Publisher']; ?></b></div>
                <div class="clear-both"></div>
		  </div>
			
                </div>
                <div class="clear-both"></div>
		  <?php if($type==4) { ?>
		  <input type="button" class="trash" id="<?php echo $info['SNo']; ?>" value="DELETE">   
		  <?php } ?>     
	</div>
<?php

$i=$i+1;
	
}

?>

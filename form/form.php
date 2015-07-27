<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Event Form</title>
		<link rel="icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="view.css" media="all">
		<link href="../files/css" rel="stylesheet" type="text/css">
		<link href="../files/style2.css" media="all" rel="stylesheet" type="text/css">

		<link href="../files/style1.css" media="all" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="view.js"></script>
		<script type="text/javascript" src="calendar.js"></script>
	</head>
	<body id="main_body" style="background:#edeee7" >
		<header class="main-header">
			<div class="container-fluid">
				<nav class="main-nav main-nav-guest">
					<ul>
						<li><a href="../index.php" class="js-gtm-event" data-gtm-action="black-nav" data-gtm-event="navigation" data-gtm-label="home">HOME</a></li>
						<li><?php 
							if(isset($_POST['email']))
							echo "<div class=\"js-gtm-event\" data-gtm-action=\"black-nav\" data-gtm-event=\"navigation\" data-gtm-label=\"e\" 
							style=\"width:120px; padding-top:10px; padding-left:5px;\">".$_POST['email']."</div>";
							?></li>
					</ul>
				</nav>
			</div>
		</header>
		<img id="top" src="top.png" alt="">
		<div id="form_container">
			<?php
				if(!isset($_POST['email']))
				header('Location: ../index.php'); 
				?>
			<h1><a>Event Form</a></h1>
			<form id="form_820950" class="appnitro" enctype="multipart/form-data" method="post" action="addevent.php">
				<div class="form_description">
					<h2>Event Form</h2>
					<p>Add your event</p>
				</div>
				<ul >
					<li id="li_1" >
						<label class="description" for="element_1">Event </label>
						<div>
							<input id="element_1" name="element_1" class="element text large" type="text" maxlength="255" value="" required> 
						</div>
					</li>
					<li id="li_2" >
						<label class="description" for="element_2">Date </label>
						<span>
						<input id="element_2_1" name="element_2_1" readonly class="element text" size="2" maxlength="2" value="" type="text" required>
						<label for="element_2_1">MM</label>
						</span>
						<span>
						<input id="element_2_2" name="element_2_2" readonly class="element text" size="2" maxlength="2" value="" type="text" required>
						<label for="element_2_2">DD</label>
						</span>
						<span>
						<input id="element_2_3" name="element_2_3" readonly class="element text" size="4" maxlength="4" value="" type="text" required>
						<label for="element_2_3">YYYY</label>
						</span>
						<span id="calendar_2">
						<img id="cal_img_2" class="datepicker" src="calendar.gif" alt="Pick a date.">	
						</span>
						<script type="text/javascript">
							Calendar.setup({
							inputField	 : "element_2_3",
							baseField    : "element_2",
							displayArea  : "calendar_2",
							button		 : "cal_img_2",
							ifFormat	 : "%B %e, %Y",
							onSelect	 : selectDate
							});
						</script>
					</li>
					<li id="li_3" >
						<label class="description" for="element_3">Time </label>
						<span>
							<select class="element text" style="width:5.5em" id="element_3_1" name="element_3_1" required>
								<option value="" selected="selected"></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							: <label>HH</label>
						</span>
						<span>
							<select class="element text" style="width:5.5em" id="element_3_2" name="element_3_2" required>
								<option value="" selected="selected"></option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>
								<option value="41">41</option>
								<option value="42">42</option>
								<option value="43">43</option>
								<option value="44">45</option>
								<option value="45">46</option>
								<option value="46">47</option>
								<option value="48">48</option>
								<option value="49">49</option>
								<option value="50">50</option>
								<option value="51">51</option>
								<option value="52">52</option>
								<option value="53">53</option>
								<option value="54">54</option>
								<option value="55">55</option>
								<option value="56">56</option>
								<option value="57">57</option>
								<option value="58">58</option>
								<option value="59">59</option>
								<option value="00">00</option>
							</select>
							:
							<label>MM</label>
						</span>
						<span>
							<select class="element select" style="width:4.5em; height:2.1em;" id="element_3_4" name="element_3_4" required>
								<option value="AM" >AM</option>
								<option value="PM" >PM</option>
							</select>
							<label>AM/PM</label>
						</span>
					</li>
					<li id="li_9" >
						<label class="description" for="element_9">Category </label>
						<div>
							<select class="element select medium" id="element_9" name="element_9" required>
								<option value="" selected="selected"></option>
								<option value="seminar" >Seminar</option>
								<option value="competitions" >Competition</option>
								<option value="cultural" >Cultural</option>
								<option value="club_events" >Club Event</option>
								<option value="sports" >Sports</option>
								<option value="others" >Others</option>
							</select>
						</div>
					</li>
					<li id="li_4" >
						<label class="description" for="element_4">Venue </label>
						<div>
							<input id="element_4" name="element_4" class="element text large" type="text" maxlength="255" value="" required> 
						</div>
					</li>
					<li id="li_8" >
						<label class="description" for="element_8">Duration </label>
						<div>
							<input id="element_8" name="element_8" class="element text medium" type="text" maxlength="255" value="" required> 
						</div>
					</li>
					<li id="li_5" >
						<label class="description" for="element_5">Event Description </label>
						<div>
							<textarea id="element_5" name="element_5" class="element textarea large" required></textarea> 
						</div>
					</li>
					<li id="li_6" >
						<label class="description" for="element_6">Coordinator's Email</label>
						<div>
							<input id="element_6" name="element_6" class="element text large" type="text" maxlength="255" value="" required> 
						</div>
					</li>
					<li class="buttons">
						<input type="hidden" name="form_id" value="820950">
					<input id="element_10" name="element_10" class="element text medium" type="hidden" maxlength="255" value="<?php  echo $_POST['email'];?>"> 
						<input id="saveForm" id="submit_button" class="button_text" type="submit" name="submit" value="Submit">
					</li>
				</ul>
			</form>
		</div>
		<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
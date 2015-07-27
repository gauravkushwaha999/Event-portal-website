<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="js canvas no-touch geolocation hashchange history rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations cssgradients csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage svg svgclippaths" style="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="content-script-type" content="text/javascript">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<title>IIT Ropar Events</title>
		<meta name="description" content="IIT Ropar Events">
		<meta content="authenticity_token" name="csrf-param">
		<meta content="iePA342qYol0I3l3mbnTzu85w52gHkchaekL8P3lmXE=" name="csrf-token">
		<link rel="icon" href="favicon.ico">
		<link href="https://plus.google.com/118196075333057498139/" rel="publisher">
		<link rel="stylesheet" href="./files/css" type="text/css">
		<link rel="stylesheet" href="./files/index.css" type="text/css">
		<link href="./files/style2.css" media="all" rel="stylesheet" type="text/css">
		<link href="./files/style3.css" media="all" rel="stylesheet" type="text/css">
		<link href="./files/style1.css" media="all" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
		<script src="./files/jquery.js" type="text/javascript"></script>
	</head>
	<style>
		#category_heading
		{
		font-size: 38px;
		line-height: 40px;
		font-weight: 300;
		letter-spacing: -1px;
		color: #4b4b4b;
		text-shadow: 1px 1px 1px #fff;
		text-align: center;
		font-weight:500;
		padding-top:15px;
		}
	</style>
	<body class="body-home">
<pre><?php print_r($_POST); ?></pre>
		<div id="main-wrapper" data-stellar-offset-parent="true">
			<div id="main-wrapper-header">
				<header class="main-header">
					<div class="container-fluid">
						<nav class="main-nav main-nav-guest">
							<ul>
								<li><a href="index.php" class="js-gtm-event" data-gtm-action="black-nav" data-gtm-event="navigation" data-gtm-label="home">HOME</a></li>
								<li><?php
										require_once 'google-api-php-client/src/Google_Client.php';
										require_once 'google-api-php-client/src/contrib/Google_Oauth2Service.php';
										session_start();
										$client = new Google_Client();
										$client->setApplicationName("IIT Ropar Events");
										$client->setClientId('926245366029-4kg888hukqeqi30hb42t53hpummcgp24.apps.googleusercontent.com');
										$client->setClientSecret('lwCH1_1J5UwtAFPMJbUL-wHt');
										$client->setRedirectUri('http://www.iitrpr.ac.in/eventsiit/');
										$client->setDeveloperKey('AIzaSyAq8WDerJ92l8EmmInkaolZql94oxeVuC8');
										$oauth2 = new Google_Oauth2Service($client);
										if (isset($_GET['code'])) {
										  $client->authenticate($_GET['code']);
										  $_SESSION['token'] = $client->getAccessToken();
										  $redirect = 'http://www.iitrpr.ac.in/eventsiit/';
										  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
										  return;
										}
										if (isset($_SESSION['token'])) {
										 $client->setAccessToken($_SESSION['token']);
										}
										if (isset($_REQUEST['logout'])) {
										  unset($_SESSION['token']);
										  unset($_SESSION['email']);
										  $client->revokeToken();
										}
										if ($client->getAccessToken()) {
											$user = $oauth2->userinfo->get();
											$name = filter_var($user['name'], FILTER_SANITIZE_EMAIL);
											$email=$user['email'];
											$_SESSION['token'] = $client->getAccessToken();
											$_SESSION['email']=$email;
										}
										else {
											$authUrl = $client->createAuthUrl();
										}
										?>
									<?php
										if(isset($authUrl)) {
										echo "<a class=\"js-gtm-event\" data-gtm-action=\"black-nav\" data-gtm-event=\"navigation\" data-gtm-label=\"login\" href='$authUrl'>LOGIN</a>";
										} else {
										if(strpos($_SESSION['email'],"@iitrpr.ac.in")!=0)
										{
										echo "<a id=\"myevents\" class=\"js-gtm-event\" data-gtm-action=\"black-nav\" data-gtm-event=\"navigation\" data-gtm-label=\"myevents\" href='javascript:;'>MY EVENTS</a></li><li>";
										}
										echo "<a class=\"js-gtm-event\" data-gtm-action=\"black-nav\" data-gtm-event=\"navigation\" data-gtm-label=\"logout\" href='?logout'>LOGOUT</a>";
										}
										?>
								</li>
								<li>
									<?php
										if(isset($_SESSION['email']))
										echo "<div class=\"js-gtm-event\" data-gtm-action=\"black-nav\" data-gtm-event=\"navigation\" data-gtm-label=\"e\" 
										style=\"width:120px; padding-top:10px; padding-left:5px;\">".$_SESSION['email']."</div>";
										?>
																</li>
							</ul>
						</nav>
					</div>
				</header>
				<nav class="main-category-search">
					<div class="inner cf">
						<form action="index.php"  method="POST">
							<div class="wrap-search">
								<input id="query" name="query" type="text" maxlength="255" value="">
								<input type="image" src="./files/btn-search-icon-lrg-64c37a7ce6c17e45188981e1c6565f10.png" alt="Go">
							</div>
							<label class="wrap-search-caption">SEARCH</label>
						</form>
						<div class="fake-dropdown fake-dropdown-double" style="visibility: visible;">
							<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" data-autowidth="true"  rel="nofollow">CATEGORIES</a>
							<div class="dropdown-menu" role="menu" style="top: -2px;">
								<div class="dropdown-inner" >
									<ul>
										<li><a href="javascript:;" id="all" class="js-gtm-event" data-gtm-action="homepage-dropdown-click" data-gtm-event="Category Navigation">All</a></li>
										<li><a href="javascript:;" id="seminar" class="js-gtm-event" data-gtm-action="homepage-dropdown-click" data-gtm-event="Category Navigation">Seminar</a></li>
										<li><a href="javascript:;" id="sports" class="js-gtm-event" data-gtm-action="homepage-dropdown-click" data-gtm-event="Category Navigation" >Sports</a></li>
										<li><a href="javascript:;" id="cultural" class="js-gtm-event" data-gtm-action="homepage-dropdown-click" data-gtm-event="Category Navigation" >Cultural</a></li>
										<li><a href="javascript:;" id="club_events" class="js-gtm-event" data-gtm-action="homepage-dropdown-click" data-gtm-event="Category Navigation" >Club &nbsp; Events</a></li>
										<li><a href="javascript:;" id="competitions" class="js-gtm-event" data-gtm-action="homepage-dropdown-click" data-gtm-event="Category Navigation" >Competitions</a></li>
										<li><a href="javascript:;" id="others" class="js-gtm-event" data-gtm-action="homepage-dropdown-click" data-gtm-event="Category Navigation" >Others</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
			</section>
			<div class="main-content">
				<section id="welcome_banner1"class="mp-container mp-page-welcome mp-welcome-new container-fluid" data-stellar-ratio="0.25"
					data-stellar-vertical-offset="0">
					<p id="category_heading"></p>
					<div class="welcome-trees" id="welcome_banner" data-stellar-ratio="1.5" data-stellar-vertical-offset="0" repeat-x top center;">
						<div class="row-fluid">
							<div class="span12 welcome-text">
								<h1>
									Welcome to the Event Portal<br>
									<small> All IIT Ropar Events At One Place
									</small>
								</h1>
								<h1>&nbsp;</h1>
								<h1><a id="addevent" href="javascript:;"><img class="add-button" src="./files/add-button-normal.png"></a>
								</h1>
								<div></div>
							</div>
						</div>
					</div>
				</section>
				<section class="mp-container mp-footer-search container-fluid">
					<div id="event" class="events" style="font-size:14px">
					</div>
				</section>
				<footer class="main-footer cf"></footer>
			</div>
		</div>
		<script src="./files/application.js" type="text/javascript"></script>
		<script type="text/javascript">
			window.data="all";
			window.type=1;
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
					$("#myevents").click(function() {
					document.getElementById('welcome_banner').style.display = 'none';
					document.getElementById('category_heading').innerHTML="My Events";
					document.getElementById('welcome_banner1').style.height='80px';
					data="<?php echo $_SESSION['email'];?>";
					type=4;
					
					$('#event').load('load.php',{choice:data,value:type});
					});
				});
		</script>
		<script type="text/javascript">
			var check="<?php if(isset($_POST["query"]))
				{echo $_POST["query"];}?>";
			if(check!="")
			{
			data=check;
			type=3;
			}
		</script>
		<script type="text/javascript">
			updateContent(data,type);
				function updateContent(newData,t)
				{
				data=newData;
				type=t;
				$('#event').load('load.php',{choice:data,value:type});
				}

		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#club_events").click(function() {
				data=$(this).attr("id");
				type=2;
				document.getElementById('welcome_banner').style.display = 'none';
				document.getElementById('category_heading').innerHTML="Club Events";
				document.getElementById('welcome_banner1').style.height='80px';
				});
			});
			$(document).ready(function() {
				$("#competitions").click(function() {
				data=$(this).attr("id");
				type=2;
				document.getElementById('welcome_banner1').style.height='80px';
				document.getElementById('category_heading').innerHTML="Competitions";
				document.getElementById('welcome_banner').style.display = 'none';
				});
			});
			$(document).ready(function() {
				$("#sports").click(function() {
				data=$(this).attr("id");
				type=2;
				document.getElementById('welcome_banner1').style.height='80px';
				document.getElementById('category_heading').innerHTML="Sports";
				document.getElementById('welcome_banner').style.display = 'none';
				});
			});
			$(document).ready(function() {
				$("#others").click(function() {
				data=$(this).attr("id");
				type=2;
				document.getElementById('welcome_banner1').style.height='80px';
				document.getElementById('category_heading').innerHTML="Others";
				document.getElementById('welcome_banner').style.display = 'none';
				});
			});
			$(document).ready(function() {
				$("#seminar").click(function() {
				data=$(this).attr("id");
				type=2;
				document.getElementById('welcome_banner1').style.height='80px';
				document.getElementById('category_heading').innerHTML="Seminars";
				document.getElementById('welcome_banner').style.display = 'none';
				});
			});
			$(document).ready(function() {
				$("#cultural").click(function() {
				data=$(this).attr("id");
				type=2;
				document.getElementById('welcome_banner1').style.height='80px';
				document.getElementById('category_heading').innerHTML="Cultural";
				document.getElementById('welcome_banner').style.display = 'none';
				});
			});
			$(document).ready(function() {
				$("#all").click(function() {
				data=$(this).attr("id");
				type=1;
				document.getElementById('welcome_banner').style.display = 'initial';
				document.getElementById('category_heading').innerHTML="";
				document.getElementById('welcome_banner1').style.height='initial';
				});
			});
			$(document).ready(function() {
			  var form = $('<form></form>');
			  var email="<?php
				if(isset($_SESSION['email']))
					echo $_SESSION['email'];
				else
					echo "";
				 ?>";
			  $(form).hide().attr('method','post').attr('action','./form/form.php');
			  $("#addevent").click(function() {
				if(email.indexOf("@iitrpr.ac.in")!=-1)
				   {
					var input = $('<input type="hidden" />').attr('name','email').val(email);
					$(form).append(input);
					$(form).appendTo('body').submit();
				   }
				else
					alert("You must Login using Google IITRPR account to add event.");
				});
			});
		</script>
	</body>
</html>

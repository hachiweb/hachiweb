<?php
	$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
	$event1 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=1";
	$res1 = mysqli_query($link,$event1);
	$res1 = mysqli_fetch_array($res1);
	
	$event2 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=2";
	$res2 = mysqli_query($link,$event2);
	$res2 = mysqli_fetch_array($res2);
	
	$event3 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=3";
	$res3 = mysqli_query($link,$event3);
	$res3 = mysqli_fetch_array($res3);
	
	$event4 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=4";
	$res4 = mysqli_query($link,$event4);
	$res4 = mysqli_fetch_array($res4);
	
	$event5 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=5";
	$res5 = mysqli_query($link,$event5);
	$res5 = mysqli_fetch_array($res5);
	
	$event6 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=6";
	$res6 = mysqli_query($link,$event6);
	$res6 = mysqli_fetch_array($res6);
	
	$event7 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=7";
	$res7 = mysqli_query($link,$event7);
	$res7 = mysqli_fetch_array($res7);
	
	$event8 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=8";
	$res8 = mysqli_query($link,$event8);
	$res8 = mysqli_fetch_array($res8);
	
	$event9 = "SELECT `event-name`,`location`,`event-date` FROM `eventreg` WHERE `sr`=9";
	$res9 = mysqli_query($link,$event9);
	$res9 = mysqli_fetch_array($res9);
	mysqli_close($link);
?>
<!DOCTYPE html>
	<head>
		<title>
			Event Website
		</title>
		<style>
			p{
				padding:1px;
			}
			.topnav{
				width:100%;
				height:120px;
				border: 1.2px solid black;
				color:white;
				background-color: green;
				font-size:18px;
				text-align:center;
				background-image:url("../images/topbg.jpg");
				background-position: center; 
					}
			.clear{
				clear:both;
				}
			#left-panel{
				float:left;
				width:20%;
				height:500px;
				border: 1.2px solid black;
				background-color:#732b87;
				color:white;
				text-align:center;
			}
			#main{
				float:left;
				width:59.5%;
				height:500px;
				border: 1.2px solid black;
				background-color:#68872b;
				text-align:center;
			}
			#right-panel{
				float:left;
				width:20%;
				height:500px;
				border: 1.2px solid black;
				background-color:#732b87;
				color:white;
				text-align:center;
			}
			#footer{
				
				border: 1.2px solid black;
				width:100%;
				height:70px;
				background-color:#3f9b42;
				font-size:16px;
				text-align:center;
				color:white;
			}
			.boxes
			{
				height:25%;
				width:25%;
				border:1px solid #7e10ed;
				border-top-left-radius:17%;
				border-bottom-right-radius:17%;
				margin:10px;
				float:left;
				color:white;
			}
			#box-container
			{
			margin-left:90px;
			}
			input{
			border-radius:6px;
			height:30px;
			}
			#reg{
			margin-left:2px;
			border:1px solid white;
			width:260px;
			}
		</style>

	</head>
	<body>
		<div class="topnav">
			<img src="images/logotop.jpg" /><div style="float:right;text-decoration:underline; margin-right:10px;">|  <a href="login.html" style="text-decoration:none;color:white;" >MY ACCOUNT</a>   |  SEARCH  |  FEEDBACK  |</div>
			<marquee style="color:red">Registrations Open for NEW YEAR 2018 Event Booking</marquee>
		</div>
		<div id="left-panel">
			<p>Event Registration</p>
			<form action="redirect.php" method="post">			
			<table id="reg">
			<tr><td><label>Sr no:</label></td><td><input type="number" name="sr"></td></tr>
			<tr><td><label>Registrar:</label></td><td><input type="text" name="registrar"></td></tr>
			<tr><td><label>Event name:</label></td><td><input type="text" name="event-name"></td></tr>
			<tr><td><label>Location:</label></td><td><input type="text" name="location"></td></tr>
			<tr><td><label>Date:</label></td><td><input type="text" name="event-date"></td></tr>
			<tr><td></td><td><input type="submit" style="color:white;background-color:purple;margin-top:10px;font-size:16px;" value="Register"></td></tr>
			</table>
			</form>
			
		</div>
		<div id="main">
		 <p style="font-weight:bold;font-size:17px;"> Upcoming Events </p>
		 <div id="box-container">
		  <div class="boxes" id="box1"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res1['event-name']."</br>"."DATE:".$res1['event-date']."</br>"."VENUE:".$res1['location']; ?></div>
		  <div class="boxes" id="box2"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res2['event-name']."</br>"."DATE:".$res2['event-date']."</br>"."VENUE:".$res2['location']; ?></div>
		  <div class="boxes" id="box3"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res3['event-name']."</br>"."DATE:".$res3['event-date']."</br>"."VENUE:".$res3['location']; ?></div>
		  <div class="boxes" id="box4"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res4['event-name']."</br>"."DATE:".$res4['event-date']."</br>"."VENUE:".$res4['location']; ?></div>
		  <div class="boxes" id="box5"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res5['event-name']."</br>"."DATE:".$res5['event-date']."</br>"."VENUE:".$res5['location']; ?></div>
		  <div class="boxes" id="box6"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res6['event-name']."</br>"."DATE:".$res6['event-date']."</br>"."VENUE:".$res6['location']; ?></div>
		  <div class="boxes" id="box7"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res7['event-name']."</br>"."DATE:".$res7['event-date']."</br>"."VENUE:".$res7['location']; ?></div>
		  <div class="boxes" id="box8"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res8['event-name']."</br>"."DATE:".$res8['event-date']."</br>"."VENUE:".$res8['location']; ?></div>
		  <div class="boxes" id="box9"><img src="images/eventicon.jpg" /></br><?php echo "EVENT:".$res9['event-name']."</br>"."DATE:".$res9['event-date']."</br>"."VENUE:".$res9['location']; ?></div>
		 </div> 
		</div>
		<div id="right-panel">
			<p>Event-Pass Registration</p>
			<form action="redirect2.php" method="post">			
			<table id="reg">
			<tr><td><label>Name:</label></td><td><input type="text" name="name"></td></tr>
			<tr><td><label>Event name:</label></td><td><input type="text" name="event-name"></td></tr>
			<tr><td><label>No of passes:</label></td><td><input type="text" name="passno"></td></tr>
			<tr><td><label>Contact No:</label></td><td><input type="text" name="contact"></td></tr>
			<tr><td></td><td><input type="submit" style="color:white;background-color:purple;margin-top:10px;font-size:16px;" value="Apply"></td></tr>
			</table>
			</form>
		</div>
		<div class="clear" id="footer"> 
			<p>&copy www.hachiweb.com &trade; <br>
		&reg All rights reserved 2017</p>
		</div>
</body>
</html>		
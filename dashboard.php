<?php
session_start();
$username = $_SESSION['username'];
$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
	$name = "SELECT `name` FROM `user` WHERE `contact`='$username'";
	$name = mysqli_query($link,$name);
	$name = mysqli_fetch_array($name);
	$event = "SELECT `event-name`,`passno` FROM `eventpass` WHERE `contact`='$username'";
	$event = mysqli_query($link,$event);
	$event = mysqli_fetch_array($event);
	$event_name = $event['event-name'];
	$venue = "SELECT `location` FROM `eventreg` WHERE `event-name`='$event_name'";
	$venue = mysqli_query($link,$venue);
	$venue = mysqli_fetch_array($venue);
	$date = "SELECT `event-date` FROM `eventreg` WHERE `event-name`='$event_name'";
	$date = mysqli_query($link,$date);
	$date = mysqli_fetch_array($date);
	mysqli_close($link);
?>
<html>
<head>
<title>Welcome to dashboard</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
#topsection
{
float:left;
width:76%;
height:200px;
background: url("images/dbbg.png");
background-repeat: norepeat;
border: 2px solid #88D9CA;
margin-top:20px;
margin-left:12%;
margin-right:12%;
text-align:center;
}
#left-panel{
float:left;
width:22.5%;
height:700px;
border: 2px solid #88D9CA;
margin-left:12%;

}
#main{
color:#88D9CA;
text-align:center;
float:left;
width:53.5%;
height:700px;
border: 2px solid #88D9CA;
margin-right:12%;
}
#footer{
border: 2px solid #88D9CA;
width:76%;
height:100px;
clear:both;
margin-left:12%;
margin-right:12%;
margin-bottom:20px;
text-align:center;
color:green;
font-size:19px;
background: url("images/dbfoo.png");
}
body{

}
td{
border:2px solid gray;
color:green;
padding:7px;
text-align:center;
}
</style>
</head>
<body>
<div id="topsection">
	<div style="margin:4px;"><img src="images/dbtop.jpg" align="middle" /> <div style="float:right;margin:5px;">
	<a href="index.php"><img src="images/homebtn.gif" /></a></div></div>
	<div style="clear:both;margin-top:40px;color:white;font-weight:bold;font-size:18px;float:right; margin:10px;">
	|<a href="logout.php" style="text-decoration:none;">   About  </a>|<a href="logout.php" style="text-decoration:none;">  Logout  </a>|
	</div>
</div>
<div id="left-panel">
<div style="color:#88D9CA;font-size:20px;">
</br><center><u><b>Customer-Details</b></u></center></br>
<span style="color:green; margin:5px;font-size:19px;	"><?php echo "&nbsp"."<b>"."Customer name : "."</b>".$name['name']."</br>"."&nbsp"."<b>"."Contact No : " ."</b>".$username."</br>"."&nbsp"."<b>"."Event : "."</b>".$event['event-name']."</br>".
"&nbsp"."<b>"."No of passes : "."</b>".$event['passno']."</br>"."&nbsp"."<b>"."Venue : "."</b>".$venue['location']."</br>"."&nbsp"."<b>"."Date : "."</b>".$date['event-date']; ?></span>
</div>
</div>
<div id="main">
</br></br><span style="font-weight:bold;font-size:25px;margin-top:30px;">Welcome <?php echo $name['name'] ?><span id="user">, to dashboard.</span></span>
<div style="text-align:center;color:green;margin:30px;margin-left:70px;">
<table style="border:2px solid gray;">
<tr style="border:2px solid gray;">
<td style="font-weight:bold;background-color:#CC9F10;">Sr</td><td style="font-weight:bold;background-color:#CC9F10;">Customer</td><td style="font-weight:bold;background-color:#CC9F10;">Event</td><td style="font-weight:bold;background-color:#CC9F10;">Passes</td>
<td style="font-weight:bold;background-color:#CC9F10;">Venue</td><td style="font-weight:bold;background-color:#CC9F10;">Date</td></tr>
<tr style="border:2px solid gray;">
<td>1</td><td><?php echo $name['name'];?></td><td><?php echo $event['event-name'];?></td>
<td><?php echo $event['passno'];?></td><td><?php echo $venue['location'];?></td><td><?php echo $date['event-date'];?></td>
</tr>
</table>
</br></br><hr style="border:1.5px solid gray;">
<div>
<form action="updatepro.php" method="POST">
<fieldset><legend>Update Profile</legend>
<table>
<tr><td>Name: </td><td><input type="text" value="<?php echo $name['name']; ?>" name="newname"/></td></tr>
<tr><td>old Password: </td><td><input type="password" name="password"/></td></tr>
<tr><td>New Password: </td><td><input type="password" name="newpassword"/></td></tr>
<tr><td></td><td><input type="submit" value="Update" /></td></tr>
<table>
</fieldset>
</form>
</div>
</div>
</div>
<div id="footer">
</br><p>&copy www.hachiweb.com &trade; <br>
		&reg All rights reserved 2017</p>
</div>

</body>
</html>
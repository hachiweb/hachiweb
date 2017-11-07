<?php
	$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
	$sr = $_POST['sr'];
	$registrar = $_POST['registrar'];
	$eventname = $_POST['event-name'];
	$location = $_POST['location'];
	$date = $_POST['event-date'];
	$query = "INSERT INTO `eventreg`(`registrar`,`event-name`,`location`,`event-date`,'serial') VALUES('$registrar','$eventname','$location','$date','$sr')";
	if(!mysqli_query($link,$query))
		echo mysqli_errno($link);
	mysqli_close($link);
?>

<?php
	$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
	
	$name = $_POST['name'];
	$eventname = $_POST['event-name'];
	$passno = $_POST['passno'];
	$contact = $_POST['contact'];
	$query = "INSERT INTO `eventpass`(`name`,`event-name`,`passno`,`contact`) VALUES('$name','$eventname','$passno','$contact')";
	if(!mysqli_query($link,$query))
		echo mysqli_errno($link);
	mysqli_close($link);
?>

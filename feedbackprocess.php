<?php
$username = $_SESSION['username'];
$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$message = $_POST['feedback'];
	$query = "INSERT INTO `feedback`(`name`,`email`,`contact`,`message`) VALUES('$name','$email','$contact','$message')";
	mysqli_query($link,$query);
	header("location:thanks.html");
	mysqli_close($link);
?>
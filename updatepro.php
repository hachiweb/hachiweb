<?php
session_start();
$username = $_SESSION['username'];
$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
	$password = $_POST['password'];
	$newname = $_POST['newname'];
	$newpassword = $_POST['newpassword'];
	$validate = "SELECT `name` FROM `user` WHERE `contact`='$username' AND `password`='$password'";
	$validate = mysqli_query($link,$validate);
	$validate = mysqli_fetch_array($validate);
	$validate = $validate['name'];
	if($validate!='')
	{
	$query1 = "UPDATE `user` SET `name`='$newname' WHERE `contact`='$username'";
	if(!mysqli_query($link,$query1))
	{
		echo "error";
	}
	$query2 = "UPDATE `user` SET `password`='$newpassword' WHERE `contact`='$username'";
	mysqli_query($link,$query2);
	header("location:dashboard.php");
	echo "Profile updated!";
	}
	else
	{
	echo "Passwords do not match!";
	}
	mysqli_close($link);
?>
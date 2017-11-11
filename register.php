<?php
	$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	if($password!=$cpassword)
	{
		echo "Error: Passwords do not match. Kindly register again.";
	}
	else{
		$query = "INSERT INTO `user`(`name`,`contact`,`password`) VALUES('$name','$contact','$password')";
	if(!mysqli_query($link,$query))
		echo mysqli_errno($link);
	mysqli_close($link);
	}
?>

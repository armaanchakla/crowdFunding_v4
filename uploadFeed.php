<?php
session_start();


	$source=$_FILES['feedPic']['tmp_name'];
	$target="img/".$_FILES['feedPic']['name'];
	
	if(move_uploaded_file($source,$target))
	{
		$con = mysqli_connect("localhost","root","","userregistration");
		$sql = "insert into feed values('".$_SESSION['unameshow']."','".$_POST['desc']."','".$target."')";
		$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));
		
		echo "File uploaded:".$target;
		header("location:homepage.php");
	}
	else
	{
		echo "File Hasn't been uploaded";
	}
?>

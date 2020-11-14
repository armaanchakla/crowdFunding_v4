<?php
  session_start();
  
  if(!isset($_SESSION['type']))
  {
	echo "Only Investor can attempt !!!";
  }
  else if($_SESSION['type']!="Investor")
  {
	echo "Only Investor can attempt !!!";
  }
  else
  {
		$con = mysqli_connect('localhost', 'root' , '') or die("Error");

		mysqli_select_db($con, 'userregistration') or die("Error");

		$sql= "insert into investdata values('".$_SESSION['unameshow']."','".$_GET["investOn"]."',CURDATE());";

		$result = mysqli_query($con, $sql) or die ("Error");
		
		echo "Property successfully assigned to invest on.";
  }
?>
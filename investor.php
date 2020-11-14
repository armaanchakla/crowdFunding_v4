<?php
  session_start();
  
  if(!isset($_SESSION['type']))
  {
		header("location:homepage.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Investor Profile | CrowdFunding</title>
	<link rel="stylesheet" type="text/css" href="./css/Style.css">
</head>

<body>
	<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Crowd</span>Funding</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="homepage.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#"><?php echo $_SESSION['unameshow']; ?></a></li> 
			<li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
  </header>
  	<br>
	<?php
	$con = mysqli_connect("localhost","root","","userregistration");
	$sql = "select * from usertable where name='".$_SESSION["unameshow"]."'";
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));

	while($row = mysqli_fetch_assoc($result))
	{
		$proPic=$row["link"];
	}

	?>

	<center>
	<img src="<?php echo $proPic; ?>" width="150px" height="150px" alt="Profile Picture" />
	</center>

	

	<br>

	<center>
	<section id="newsfeed" style="width: 95%">
		<div class="container">
			<label class="banner" style="color: white;"><u>User Info</u></label><br>
			<label style="font-size: 16px;">Username:</label> <?php echo $_SESSION['unameshow']; ?><br>
			<label style="font-size: 16px;">User Type:</label> <?php echo $_SESSION['type']; ?><br>
		</div>
	</section>
	</center>

	
	<br>
	<center><h2 id="newsfeed" style="width: 95%">Previous Investment History</h2></center>

	<section >
		<div class="container">
		<?php
		$data = array();
		$con = mysqli_connect("localhost","root","","userregistration");
		$sql = "select * from investdata where investorName='".$_SESSION['unameshow']."';";
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));

		while($row = mysqli_fetch_assoc($result))
		{
			$temp["timeValue"]=$row["timeValue"];
			$temp["description"]=$row["description"];
			// $temp["timeValue"]=$row["timeValue"];
			$data[]=$temp;
		}
		foreach($data as $v)
		{
			
			?>
			<center>
				<div style="background: rgb(83, 84, 84);width:60%;text-align:left;padding:10px;">
					<br/>
						<h2><?php echo $v["timeValue"];?></h2>
						<p><?php echo $v["description"];?></p><br/>
				</div><br/>
			</center>
			<?php
		}
		?>	
		</div>	
	</section>


  <footer>
      <p>CrowdFunding, Copyright &copy; 2019</p>
  </footer>
</body>
</html>
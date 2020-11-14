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
	<title>Farmer Profile | CrowdFunding</title>
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
	<img src="<?php echo $proPic; ?>" width="250px" height="250px" alt="Profile Picture" />
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

	<section id="showcase">
		<center>
			<div style="background: #35424a; width: 90%; text-align:center;"> 	<br>
				<form action="uploadFeed.php" method="post" enctype="multipart/form-data" name="mfm">
					Insert a Picture : <input type="file" name="feedPic"/><br><br>
					<input type="text" style="  height:80px; width: 60%;" class="inputbox2" name="desc"><br><br>
					<input type="submit" value="Upload Feed" class="button" name="sbt"><br>
				</form>
				<br>
			</div>
		</center>		
	</section>

	<br>
	<br>

  <footer>
      <p>CrowdFunding, Copyright &copy; 2019</p>
  </footer>
</body>
</html>
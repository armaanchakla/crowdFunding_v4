<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News Feed | CrowdFunding</title>
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
			<?php
			if(isset($_SESSION['unameshow']) && $_SESSION['type']=='Farmer')
			{
				?><li><a href="farmerProfile.php"><?php echo $_SESSION['unameshow']; ?></a></li><?php
			}
			else if(isset($_SESSION['unameshow']) && $_SESSION['type']=='Investor')
			{
				?><li><a href="investor.php"><?php echo $_SESSION['unameshow']; ?></a></li><?php
			}
			else
			{
				?><li><a href="login.php">Login</a></li><?php
			}
			?>
          </ul>
        </nav>
      </div>
  </header>

  <body>

  	<center>
   <section id="newsfeed">
      <div class="container">
        <h1>News Feed</h1>
      </div>
    </section>
	</center>

	<br>
	
  	<section>
        <?php
		
		$data = array();
		$con = mysqli_connect("localhost","root","","userregistration");
		$sql = "select * from feed;";
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));

		while($row = mysqli_fetch_assoc($result))
		{
			$temp["name"]=$row["name"];
			$temp["description"]=$row["description"];
			$temp["imgLink"]=$row["imgLink"];
			$data[]=$temp;
		}
		$count=1;
		$rowCount=1;
		foreach($data as $v)
		{
			
				?>
				<center>
				<div style="background: rgba(53, 66, 74, 0.7); width:85%; color: white; text-align:center;">
				<br/>
				<h2><?php echo $rowCount.". ".$v["name"];?></h2>
				<img src="<?php echo $v["imgLink"];?>" width="50%">
				<p><?php echo $v["description"];?></p>
				<input type="button" value="Invest over this land" id="<?php echo $rowCount;?>" class="button" onclick="invest('<?php echo $v["description"];?>','<?php echo $rowCount;?>')"><br/><br/>
				</div><br/>
				</center>
				<?php
				$rowCount++;
			
			$count++;
		}
		?>
    </section>

  </body>


  <footer>
      <p>CrowdFunding, Copyright &copy; 2019</p>
  	</footer>
</body>
</html>
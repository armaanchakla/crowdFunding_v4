<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | CrowdFunding</title>
	<link rel="stylesheet" type="text/css" href="./css/Style.css">
	<script>
	function invest(functionValue,buttonValue)
	{
		var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() 
			{		
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{	
					document.getElementById("1").innerHTML=xmlhttp.responseText;
					if(xmlhttp.responseText=="Property successfully assigned to invest on.")
					{
						document.getElementById(buttonValue).style.display="none";
						alert("Property successfully assigned to invest on.");
					}
					else
					{
						alert(xmlhttp.responseText);
					}
				}
			};
			var url = "investData.php?investOn="+functionValue;
			xmlhttp.open("GET",url,true);
			xmlhttp.send();
	}
	</script>
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


<section>
	<div class="slideshow-container" style="width: 100%">
		<div class="mySlides fade">
  				<img src="img/truck_garage_field_farming_column_wires_clearly_60364_1366x768.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
  				<img src="img/farmer.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
  				<img src="img/img-login.jpg" style="width:100%">
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>

	<br>

	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
	</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


</section>

  <section id="showcase">
      <div class="container">
        <h1>Crowd Funding for Everyone</h1>
        <p style="font-size: 16px;">To be the leading agritechnology company working to achieve food security, sufficiency and sustainability in Bangladesh.Empowering farmers with agricultural inputs, mechanization, best agronomic practices and ready market to scale-up their farming operations.</p>
      </div>
   </section>

   <br>

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
			if($count>(count($data)-5))
			{
				?>
				<center>
				<div style="background: rgba(53, 66, 74, 0.7); width:85%; color: white; text-align:center;">
				<br/>
				<h2><?php echo $rowCount.". ".$v["name"];?></h2>
				<img src="<?php echo $v["imgLink"];?>" width="50%">
				<p><?php echo $v["description"];?></p><input type="button" value="Invest over this land" id="<?php echo $rowCount;?>" class="button" onclick="invest('<?php echo $v["description"];?>','<?php echo $rowCount;?>')"><br/><br/>
				</div><br/>
				</center>
				<?php
				$rowCount++;
			}
			$count++;
		}
		?>
    </section>

    <section>
    	<center>
    	<div>
    		<a class="button" href="allfeed.php">Read More...</a>
    	</div>
    	</center>
    </section>

    <br>

    <section id="newsletter">
      <div class="container">
        <h1>Subscribe Us</h1>
        <form>
          <input type="email" class="inputbox2" placeholder="Enter Email...">
          <button type="submit" class="button">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="img/vision.png">
          <h3>Vision</h3>
          <p>To be the leading agritechnology company working to achieve food security, sufficiency and sustainability in Bangladesh.</p>
        </div>
        <div class="box">
          <img src="img/mission.png">
          <h3>Mission</h3>
          <p>Empowering farmers with agricultural inputs, mechanization, best agronomic practices and ready market to scale-up their farming operations.</p>
        </div>
        <div class="box">
          <img src="img/clients.png">
          <h3>Our Clients</h3>
          <p>If they came to the Assembly, then from Peshawar to Karachi, all shops will be closed down by force.</p>
        </div>
      </div>
    </section>

	<footer>
      <p>CrowdFunding, Copyright &copy; 2019</p>
  	</footer>
</body>
</html>
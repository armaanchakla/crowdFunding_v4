<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About | CrowdFunding</title>
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
            <li><a href="homepage.php">Home</a></li>
            <li class="current"><a href="about.php">About</a></li>
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

    <section id="showcase">
      <div class="container">
        <h1>About Us</h1>
        <p style="font-size: 16px;">For people who want to be financially free and contribute to achieving food security for Bangladesh, CultivateFunds is providing a simple, safe and sustainable platform for you to grow your funds whilst also enabling real farmers to grow food for the Bangladeshi populace. Our spectrum of investable farms allows YOU to invest either as a micro-investor or as a high network individual. CultivateFund's goal isn't only to enable us achieve food security for Bangladesh but also achieve financial freedom for YOU.</p>
      </div>
    </section>
    <br>
    <section>
  <div class="slideshow-container" style="width: 90%">
    <div class="mySlides fade">
          <img src="img/aboutUsImage.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
          <img src="img/Agriculture-Agronoomy-Wheat-Naure-Hd-Wallpaper-1366x768.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
          <img src="img/791429.jpg" style="width:100%">
    </div>

  </div>

  <br>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
</section>

    <br>

	<section id="newsletter">
      <div class="container">
        <h1>Subscribe Us</h1>
        <form>
          <input type="email" placeholder="Enter Email..." class="inputbox2">
          <button type="submit" class="button">Subscribe</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Our Services</h1>
          <p>
            Today I appear before you with a heavy heart. You know and understand everything. We tried with our lives. But the painful matter is that now the streets of Dhaka, Chittagong, Khulna, Rajhshahi and Rangpur are stained with the bloods of my brothers. Now the people of Bangla want freedom. The people of Bangla want to live.The people of Bangla want to have their rights. What wrong did we commit? The people of Bangladesh cast their vote overwhelmingly for me, for Awami League. Our National Assembly will sit. We will draw up the Constitution there. And we will build this country. The people of this country will have economic, political and cultural freedom. But it’s a matter of great sorrow that today I have to tell painfully the pitiful history of the last twenty three years. The bloody history of Bangalis tortured in Bangla itself. The history of the last twenty- three years is the history of the wailing of dying men and women. The history of Bangla is the history of the staining of streets with the blood of the People of this country.
          </p>
          <p class="dark">
            We gave blood in 1952. After winning the election in 1954, we couldn’t even form the government.  Proclaiming martial law in 1958, Ayub Khan made us slaves for ten years.During the ‘Six Point Movement’, my children were gunned down on 7th June 1966. After, the fall of Ayub Khan brought about the ‘Mass Movement’ of 1969 where Yahya Khan usurped power. He said he would give constitution and democracy to the nation. We Agreed. Thereafter the rest is history. There was an election. You know the fault was not ours. Today I met President Yahya Khan and discussed everything with him. Being the leader of not only of Bangla but of the majority party of Pakistan, I requested him to convene the National Assembly of 15th February.He didn’t agree with me, rather he yielded to Mr Bhutto’s demand to hold the assembly in the first week of March. We said that was alright. We would sit in the Assembly. I went even to the extent of saying that if anybody, even a lone person proposed something reasonable, we, although the majority will accept the proposal. Mr Bhutto came here. He conferred with us and said that the door for discussion was not closed. There would be more discussions. Then we talked with other leaders and said ‘please come and sit together; let’s prepare the Constitution through discussion’. Mr Bhutto said that if the members of West Pakistan came here, the Assembly would turn into a slaughter house. He said whoever would come would be killed.
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>What do we do?</h3>
            <p>We gave blood in 1952. After winning the election in 1954, we couldn’t even form the government.  Proclaiming martial law in 1958, Ayub Khan made us slaves for ten years.During the ‘Six Point Movement’, my children were gunned down on 7th June 1966. After, the fall of Ayub Khan brought about the ‘Mass Movement’ of 1969 where Yahya Khan usurped power. He said he would give constitution and democracy to the nation. We Agreed. Thereafter the rest is history. There was an election. You know the fault was not ours. Today I met President Yahya Khan and discussed everything with him. Being the leader of not only of Bangla but of the majority party of Pakistan, I requested him to convene the National Assembly of 15th February.He didn’t agree with me, rather he yielded to Mr Bhutto’s demand to hold the assembly in the first week of March. We said that was alright. We would sit in the Assembly.We gave blood in 1952. would sit in the Assembly.We gave blood in 1952.would sit in the Assembly.We gave blood in 1952.  </p>
          </div>
        </aside>

        <center>
        <iframe width="768" height="480" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1"></iframe>
        </center>

      </div>
    </section>

    

	<footer>
      <p>CrowdFunding, Copyright &copy; 2019</p>
  </footer>
</body>
</html>
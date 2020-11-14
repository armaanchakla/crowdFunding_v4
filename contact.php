<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact | CrowdFunding</title>
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
            <li><a href="about.php">About</a></li>
            <li class="current"><a href="contact.php">Contact</a></li>
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

	<section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Our Services</h1>
          <ul id="services">
            <li>
              <h3>What benefits the farmers?</h3>
              <p>Today I appear before you with a heavy heart. You know and understand everything. We tried with our lives. But the painful matter is that now the streets of Dhaka, Chittagong, Khulna, Rajhshahi and Rangpur are stained with the bloods of my brothers. Now the people of Bangla want freedom. The people of Bangla want to live.The people of Bangla want to have their rights. What wrong did we commit? The people of Bangladesh cast their vote overwhelmingly for me, for Awami League. Our National Assembly will sit. We will draw up the Constitution there. And we will build this country. The people of this country will have economic, political and cultural freedom.</p>

            </li>
            <li>
              <h3>Investment is growing own deed.</h3>
              <p>We gave blood in 1952. After winning the election in 1954, we couldn’t even form the government.  Proclaiming martial law in 1958, Ayub Khan made us slaves for ten years.During the ‘Six Point Movement’, my children were gunned down on 7th June 1966. After, the fall of Ayub Khan brought about the ‘Mass Movement’ of 1969 where Yahya Khan usurped power. He said he would give constitution and democracy to the nation. We Agreed. Thereafter the rest is history. There was an election. You know the fault was not ours. Today I met President Yahya Khan and discussed everything with him. Being the leader of not only of Bangla but of the majority party of Pakistan, I requested him to convene the National Assembly of 15th February.</p>

            </li>
            <li>
              <h3>What you need to do!</h3>
              <p>If they came to the Assembly, then from Peshawar to Karachi, all shops will be closed down by force.I said that Assembly would continue, then all of a sudden, the Assembly was closed on 1st March. As President, Mr Yahya Khan had summoned the Assembly. I said that I would attend.Today I met President Yahya Khan and discussed everything with him. Being the leader of not only of Bangla but of the majority party of Pakistan, I requested him to convene the National Assembly of 15th February.</p>

            </li>
          </ul>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Contact</h3>
            <form class="contact">
              <div>
                <label>Name</label><br>
                <input type="text" class="inputbox2" placeholder="Name">
              </div>
              <div>
                <label>Email</label><br>
                <input type="email" class="inputbox2" placeholder="Email Address">
              </div>
              <div>
                <label>Message</label><br>
                <textarea class="inputbox2" placeholder="Message"></textarea>
              </div>
              <button class="button" type="submit">Send</button>
          </form>
          </div>
        </aside>
      </div>
    </section>

	<footer>
      <p>CrowdFunding, Copyright &copy; 2019</p>
  </footer>
</body>
</html>
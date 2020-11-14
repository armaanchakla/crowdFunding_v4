<?php

session_start();


$con = mysqli_connect('localhost', 'root' , '') or die("Error");

mysqli_select_db($con, 'userregistration') or die("Error");

if(isset($_POST['login'])){
	$uname = $_POST['uname'];
	$upass = $_POST['upass'];

	$sql= "select * from usertable where name = '$uname' && password = '$upass'";

	$result = mysqli_query($con, $sql) or die ("Error");

	if($row=mysqli_fetch_array($result)){
		if($row['name']==$uname && $row['password']==$upass && $row['type']=='Farmer'){
			$_SESSION['unameshow'] = $uname;
			$_SESSION['type'] ="Farmer";
			header('location:farmerProfile.php');
		}
		elseif($row['name']==$uname && $row['password']==$upass && $row['type']=='Invester'){
			$_SESSION['unameshow'] = $uname;
			$_SESSION['type'] ="Investor";
			header('location:investor.php');
		}
		elseif($row['name']==$uname && $row['password']==$upass && $row['type']=='Admin'){
			$_SESSION['unameshow'] = $uname;
			$_SESSION['type'] ="Admin";	
			header('location:admin.php');
		}
	}
	else{
		//header('location:login.php');
		echo '<script type="text/javascript">alert("Wrong Credentials")</script>';
	}	
}

?>

<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/Style.css">
	<title>Login | CrowdFunding</title>
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
          </ul>
        </nav>
      </div>
    </header>

    <section>
	<div class="" align="center">
		<p class="banner">Login Here</p>
		<form method="POST">
			<input class="inputbox" type="text" name="uname" placeholder="Username" required><br>
			<input class="inputbox" type="password" name="upass" placeholder="Password" required>
      		<br>
     		<button type="submit" name="login" class="button">Login</button>
		<p><a href="forgotpass.php" style="color:tomato">Forgot Password?</a></p>
      	<p style="color:#009900">Don't have an <a href="registration.php" style="color:tomato"><span>account</span></a>?</p>
      	<p style="padding-bottom: 30px"></p>
		</form>	     	
	</div>
	</section>
</body>
</html>
<?php

session_start();


//header('location:login.php');

$con = mysqli_connect('localhost', 'root' , '');

mysqli_select_db($con, 'userregistration');

if(isset($_POST['forgetpass'])){
    $uname = $_POST['uname'];
    $umail = $_POST['umail'];

    $sql = "select * from forgetpass where name = '$uname'";

    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    if($num == 1){
      echo '<script type="text/javascript">alert("Your password reset process is in progress!")</script>';
    }
    else{
      $reg = "insert into forgetpass(name,email) values ('$uname','$umail')";
      mysqli_query($con, $reg);
      echo '<script type="text/javascript">alert("Check your mail")</script>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/Style.css">
	<title>Reset Password | CrowdFunding</title>
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

	<div class="" align="center">
		<p class="banner">Reset your password</p>
		<p style="font-size: 20px; padding: 20px 30px;">Enter your username and verified email address. We will send you a password reset link to your verified email.</p>
    <form method="POST" action="login.php">
		<input class="inputbox" type="text" name="uname" placeholder="Username" required><br>
		<input class="inputbox" type="text" name="email" placeholder="Enter your verified mail" required><br>
		<button class="button" name="forgetpass" align="center">Submit</button>
    </form>
    <p style="padding-bottom: 30px"></p>
	</div>

</body>
</html>
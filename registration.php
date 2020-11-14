<?php

session_start();
//header('location:login.php');

$con = mysqli_connect('localhost', 'root' , '');

mysqli_select_db($con, 'userregistration');

if(isset($_POST['register'])){
    $uname = $_POST['uname'];
    $umail = $_POST['umail'];
    $upass = $_POST['upass'];
    $utype = $_POST['utype']; 

	$source=$_FILES['proPic']['tmp_name'];
	$target="img/".$_FILES['proPic']['name'];

  $_SESSION['umailshow'] = $umail;
	
    $sql = "select * from usertable where name = '$uname'";

    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    if($num == 1){
      echo '<script type="text/javascript">alert("Username Already Taken")</script>';
    }
    else{
		if(move_uploaded_file($source,$target))
		{
			$reg = "insert into usertable(name,email,password,type,link) values ('$uname','$umail','$upass','$utype','$target')";
			mysqli_query($con, $reg);
			echo '<script type="text/javascript">alert("Registration Successful")</script>';
		}
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/Style.css">
	<title>Registration | CrowdFunding</title>
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
  	<p class="banner">Create your account</p>
    <form method="POST" enctype="multipart/form-data" name="mfm">
      <input class="inputbox" type="text" name="uname" placeholder="Username" required><br>
      <input class="inputbox" type="password" name="upass" placeholder="Password" required><br>
      <input class="inputbox" type="text" name="umail" placeholder="Email" required><br>
      
      <select class="inputbox" name="utype" required>
      		<option hidden>Account Type</option>
       		<option value="Farmer">Farmer</option>
        	<option value="Invester">Invester</option>
      </select><br>
	  <label style=""><b>Add Profile Image:</b></label><br>  <input class="inputbox" type="file" name="proPic"></br>
      <button type="submit" name="register" class="button">Register</button>
      <p><a href="login.php" style="color:tomato">Already have an account?</a></p>
      <p style="padding-bottom: 30px"></p>
    </form>       
  </div>   
</body>
</html>
<?php
	include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>

<body class="bg" style="background-image: url(images/background-login.jpg)">

<div class="container login-container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12"></div>
		<div class="login-form col-lg-4 col-md-4 col-sm-12">
			<form action="index.php" method="POST">
			  <div  class="imgcontainer">
			    <img src="images/myuser.png" alt="Avatar" class="avatar">
			  </div>
			  <br>
			  <div class="container">
<!-- 			    <label for="uname"><b>Email</b></label><br> -->
			    <input class="form-control" type="text" placeholder="Enter Email" name="uname" required>
			    <br>
<!-- 			    <label for="psw"><b>Password</b></label><br> -->
			    <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
			    <br>
			    <button class="form-control btn-primary" type="submit" name="login">Login</button>
			    <br>
			    <a href="dashboard.php">Forgot Password?</a> 
			  </div>

			</form>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12"></div>
	</div>
	
</div>

</body>
</html>

<?php

if (isset($_POST["login"]))
{
    $user=mysqli_real_escape_string($con,$_POST["uname"]);
    $pass=mysqli_real_escape_string($con,$_POST["psw"]);

    $query=$con->prepare("SELECT * FROM users WHERE  email=? AND pass=?");

      $query->bind_param("ss",$user,$pass);
      $query->execute();
      $result=$query->get_result();

      if ($result->num_rows===0)
      
        exit('<h1 style="background:black; position:absolute;top:5px;right:10px; border:red ; border-style:outset ;color:red">No user exists</h1>');


      
    while($row=$result->fetch_assoc())
   {
       $id= $row['id'];
       $uname_db = $row['email'];
       $password_db = $row['pass'];
    }
    
    $query->close();


    if ($uname_db=="saif@saif.com") {
      # code...
    
  
    session_start();

    $_SESSION['loged_user']=$uname_db;

    echo '<script language=javascript>';
    echo 'alert("Sucessfuly loged in '.$_SESSION['loged_user'].' ")';
    echo '</script>';


      header("location:admin_homes.php");

    }
    else{

      session_start();

    $_SESSION['loged_user']=$uname_db;

    echo '<script language=javascript>';
    echo 'alert("Sucessfuly loged in '.$_SESSION['loged_user'].' ")';
    echo '</script>';


      header("location:dashboard.php");

    }

  }


?>
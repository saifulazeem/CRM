<?php
include("connection.php");
session_start();

if (isset($_SESSION["loged_user"]))
 {
  $val=$_SESSION["loged_user"];
}
else
{
  header("location:index.php");
}
if(isset($_GET["logout"]))
{
  session_destroy();
  header("location:index.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Engineer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>

<body >
    <div class='fluid-container'>
        <div class='row' style="height: 100%;">
            <div class='col-lg-3 col-md-3 col-sm-12' style="background-color: #667eea;">
                <div class="container" style="color: #fff; position: sticky; top: 0;">

                    <div class="row" >
                        <div class="col-lg-4 col-md-4 col-sm-12"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12" style="padding-top: 50px;"><a href="index.php"><img style=" border-radius: 50%; width: 60%; " src="images/profile_pic.jpeg" alt="Avatar"></a></div>
                        <!-- <div class="col-1"></div> -->    
                    </div>
                    <br>
                    <div class="row" style="text-align: center;">
                        <h3>M.SAIF UL AZEEM ABBASI</h3>
                        <h4>Admin</h4>
                    </div>
                    <br>
                    <div class="row">
                        <div class="navigation">
                            <ul>
                            	<li><a  href="dashboard.php">Dashboard</a></li>
                            	 <hr class="new2">
                                <li><a  href="engineers_list.php">All Engineers</a></li>
                                <hr class="new2">
                                <li><a   href="register-complain.php">Register Complains</a></li>
                                <hr class="new2">
                                <li><a href="complain-status.php">Complains Status</a></li>
                                <hr class="new2">
                               <li><a href="customer-list.php">Manage Customers</a></li>
                                <hr class="new2">
                                <li><a  href="register-engineer.php">Register Engineers</a></li>
                                <hr class="new2">
                                <li><a style="background-color: #2d2d2d;" href="manage_engineer.php">Manage Engineers</a></li>
                                <hr class="new2">
                              
                                <li>
                                	<form>
                                		<input class="btn btn-secondary" type="submit" name="logout" value="Logout">
                                	</form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>

<!--                     <div class="row" style="text-align: center;">
                        <h5>GET IN TOUCH WITH ME</h5>
                        <div class="touch_info">
                            <ul>
                                <li><a href=""><img src="images/fb.png"></a></li>
                                <li><a href=""><img src="images/git.png"></a></li>
                                <li><a href=""><img src="images/wp.png"></a></li>
                            </ul>
                        </div>
                    </div> -->
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            <div class='main col-lg-9 col-md-9 col-sm-12' >
                <h1 style="color: #4d4d4d; padding-top: 30px; padding-left: 20px;">Edit Engineers</h1>
                <br>
                <br>
                <br>
                <form method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <input class="form-control" type="text" name="engr_name" placeholder="Engineer Name*" value="Saif" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <input class="form-control" type="tel" name="engr_mobile" placeholder="Mobile*" value="01285545465425" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <input class="form-control" type="text" name="engr_alt_mobile" placeholder="Alt Mobile" value="02315456456" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12" >
                                <input class="form-control" type="email" name="email_address" placeholder="Email@mail.com*" value="saifjj@abc.com" required>
                            </div>
                           <!--  <div class="col-lg-2 col-md-2 col-sm-12" >
                                <input class="form-control" type="password" name="pass" placeholder="Password" required>
                            </div> -->
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input class="form-control" type="password" name="pass" placeholder="Password*" value="123245645adad" required>
                            </div>
                        </div>
                       
                        <br>
                       <!--  <div class="row">
                            <form method="post">
                                <div class="col-lg-4 col-md-4 col-sm-12" >
                                    <input class="form-control" type="text" name="new_product" placeholder="Enter Product" required>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12" >
                                    <input class="btn btn-secondary" type="submit" name="add_product" value="Add">
                                </div>
                            </form>
                        </div> -->
                        
                       <!--  <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <select id="cars" name="product_type" style="width: 100%; height: 40px; border-radius: 5px; color: #808080; padding: 5px;">
                                    <option selected>Product Type</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div> -->
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input class="btn btn-secondary" type="submit" name="update_engr" value="Update">
                            </div>
                        </div>   
                    </div>    
                </form>
        </div>
    </div>
</body>
</html>
</html>
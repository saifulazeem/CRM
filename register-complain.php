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

$query4=$con->prepare("SELECT * FROM products");
$query4->execute();
$results=$query4->get_result();
$query4->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
                                <li><a style="background-color: #2d2d2d;"  href="register-complain.php">Register Complains</a></li>
                                <hr class="new2">
                                <li><a href="complain-status.php">Complains Status</a></li>
                                <hr class="new2">
                                <li><a href="customer-list.php">Manage Customers</a></li>
                                <hr class="new2">
                                <li><a href="register-engineer.php">Register Engineers</a></li>
                                <hr class="new2">
                                <li><a href="manage_engineer.php">Manage Engineers</a></li>
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
                <h1 style="color: #4d4d4d; padding-top: 30px; padding-left: 20px;">Register Complain</h1>
                <br>
                <br>
                <br>
                <form action="register-complain.php" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <input class="form-control" type="text" name="cust_name" placeholder="Customer Name*" required>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <input class="form-control" type="tel" name="cust_mobile" placeholder="Mobile*"  required >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <input class="form-control" type="text" name="cust_alt_mobile" placeholder="Alt Mobile" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12" >
                                <input class="form-control" type="text" name="cust_address" placeholder="Address*" required>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12" >
                                <input class="form-control" type="text" name="cust_postalcode" placeholder="Pincode*" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                          <!--   <form method="post"> -->
                                <div class="col-lg-4 col-md-4 col-sm-12" >
                                    <input class="form-control" type="text" name="new_product" placeholder="Enter Product">
                                </div>
<!--                                 <div class="col-lg-2 col-md-2 col-sm-12" >
                                    <input class="btn btn-secondary" type="submit" name="add_product" value="Add">
                                </div> -->
                           <!--  </form> -->
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                                <select id="cars" name="product_type" style="width: 100%; height: 40px; border-radius: 5px; color: #808080; padding: 5px;">
                                <option selected>Product Type</option>
                                <?php        
                                    while($row=$results->fetch_assoc())
                                        {
                                            $pid= $row['p_id'];
                                            $cust_product= $row['cproducts'];
                                            echo ' <option value="$cust_product">'.$cust_product.'</option>'; 

                                        }
                                            echo '</select>';

                                    ?>
                                
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12" >
                                <textarea style="height: 100px;" class="form-control" type="text" name="c_message" placeholder="Description..."  ></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input class="btn btn-secondary" type="submit" name="register_cust" value="Register">
                            </div>
                        </div>   
                    </div>    
                </form>
        </div>
    </div>
</body>
</html>
</html>

<?php
if (isset($_POST["register_cust"]))
{
    $cproduct=mysqli_real_escape_string($con,$_POST["product_type"]);
    $product=mysqli_real_escape_string($con,$_POST["new_product"]);

    if($cproduct=='Product Type' && empty($product))
    {
        echo '<script language=javascript>';
        echo 'alert("Please Select Product OR Enter Product")';
        echo '</script>';
    }
    else
    {
        $cname=mysqli_real_escape_string($con,$_POST["cust_name"]);
        $cmobile=mysqli_real_escape_string($con,$_POST["cust_mobile"]);
        $c_alt_mobile=mysqli_real_escape_string($con,$_POST["cust_alt_mobile"]);
        $caddress=mysqli_real_escape_string($con,$_POST["cust_address"]);
        $cpincode=mysqli_real_escape_string($con,$_POST["cust_postalcode"]);

        // $cproduct=mysqli_real_escape_string($con,$_POST["product_type"]);
        $cdetails=mysqli_real_escape_string($con,$_POST["c_message"]);

        $product=mysqli_real_escape_string($con,$_POST["new_product"]);
        $query31=$con->prepare("INSERT INTO products(cproducts) values(?)");
        $query31->bind_param("s",$product);
        $query31->execute();
        $query31->close();

        $query=$con->prepare("INSERT INTO customers(c_name,c_mobile,c_alt_mobile,c_address,c_pincode) values(?,?,?,?,?)");

        $query->bind_param("sssss",$cname,$cmobile,$c_alt_mobile,$caddress,$cpincode);
        $query->execute();
        $query->close();

        $query2=$con->prepare("SELECT * FROM customers WHERE  c_mobile=?");

        $query2->bind_param("s",$cmobile);
        $query2->execute();
        $result=$query2->get_result();
        while($rows=$result->fetch_assoc())
           {
               $id= $rows['c_id'];
            }
        
        $query2->close();

        if(!empty($product))
        {
            $cproduct=$product;
        }
        $query1=$con->prepare("INSERT INTO complains(c_id,product,description) values(?,?,?)");

        $query1->bind_param("sss",$id,$cproduct,$cdetails);
        $query1->execute();    

        echo '<script language=javascript>';
        echo 'alert("Complain has been registerd sucessfully")';
        echo '</script>';
        $query1->close();
  
    }
    
}


?>
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
	<title>Customer List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <li><a   href="engineers_list.php">All Engineers</a></li>
                                <hr class="new2">
                                <li><a  href="register-complain.php">Register Complains</a></li>
                                <hr class="new2">
                                <li><a href="complain-status.php">Complains Status</a></li>
                                <hr class="new2">
                                <li><a style="background-color: #2d2d2d;" href="customer-list.php">Manage Customers</a></li>
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
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            <div class='main col-lg-9 col-md-9 col-sm-12' >

            <div style="  background-color: #e7e7e7;">

	<div  id="header" class="fluid-container sticky-top">
		<div class="container" style="padding-top: 14px;" id="nav-cont">
			<!-- <nav class="navbar navbar-expand-lg navbar-light">
 -->
 			<div class="row">
 				<div class="col-4"><a id="logo" class="navbar-brand" href="index.php"><!-- <img src="img/logo.png" width="50" height="50"> --> CRM</a></div>
 				<div class="col-4"></div>
 				<div class="col-4">
 					<form>
 						<input class="form-control" type="text" placeholder="Search" name="search-engr">
 					</form>
 				</div>
 			</div>

			<!-- </nav> -->
		</div>

	</div>
	<br>
<br>

	<div class="container">
		<div class="ul-container">
			<!-- <ul>
			  	<li ><a class="btn btn-primary" style="background-color: #4d4d4d; border: none;" href="index.php">ALL</a></li>
			  	<li><a class="btn btn-primary" style="background-color: #fff; color: #4d4d4d; border: none;" href="top_apps.php">ON DUTY</a></li>
			  	<li><a class="btn btn-primary" style="background-color: #fff; color: #4d4d4d;border: none;" href="new_release.php">TOP</a></li>
			  	<li><a class="btn btn-primary" style="background-color: #fff; color: #4d4d4d; border: none;" href="rating.php">AVAILABLE</a></li>
			</ul> -->
		</div>
		<br>
		<h4 style="color: #4d4d4d; margin-bottom: -5px;">Customers</h4>
		<hr style="border:2px solid #4d4d4d; width: 120px; float: left;">

	</div>

<br>
<br>
	<div class="container" id="main-body">

			<!-- side bar start here -->
			<div class="row" style="padding-left: 0px;padding-right: 0px;">
				<div style="padding: 10px; border: 1px solid #e7e7e7; border-radius: 5px; background-color: #fff; height: 720px;  ">
					<h3 style="color: #4d4d4d;">Customers List</h3>
					<hr style="border:1px solid #f1f1f1">
					<div style="overflow:auto;height: 600px; background-color: #fff;">
					<table class="table table-striped  table-hover table-condensed" style="text-align: center;">
	                    <thead >
	                        <tr style="border: none;">
	                            <th ><h6>Names</h6></th>
	                            <th><h6>Address</h6></th>
	                            <th><h6>Pincode</h6></th>
	                            <th><h6>Mobile Number</h6></th>
	                            <th><h6>Profiles</h6></th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php
							$query=$con->prepare("SELECT * FROM customers WHERE is_delete=0 ");
							                    // $query->bind_param("s",$cp_id);
							                    $query->execute();
							                    $result=$query->get_result();
							                    while($row=$result->fetch_assoc())
							                   {
							                       // $title= $row['title'];
							                       $cid=$row["c_id"];
							                       $cust_name=$row["c_name"];
							                       $cust_mobile=$row["c_mobile"];
							                       $address=$row["c_address"];
							                       $postal_code=$row["c_pincode"];
							                       // echo $formate;
							                       
							                    
	                    	?>
	                        <tr>
	                            <!-- <td>1</td> -->
	                            <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
	                            
	                            <td style="border-top: hidden;"><?php echo $cust_name;  ?></td>
	                            <td style="border-top: hidden;"><?php echo $address;  ?></td>
	                            <td style="border-top: hidden;"><?php echo $postal_code;  ?></td>
	                            <td style="border-top: hidden;"><?php echo $cust_mobile;  ?></td>
	                            <!-- <td>1</td> -->
	                            <td style="border-top: hidden;">
	                            	<form method="POST">
	                            		<!-- <input class="btn btn-secondary" type="submit" name="delete_cust" value="Delete"> -->
	                            		<a class="btn btn-secondary" href="<?php echo "delete_cust.php?id=$cid" ; ?>">Delete</a>
	                            		<a class="btn btn-secondary" href="<?php echo "edit_customer.php?id=$cid" ; ?>">Edit</a>
	                            	</form>
	                            </td>
	                            <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
	                        </tr>
	                        <?php }
							        $query->close(); ?>
	                    </tbody>
	                </table>
	            	</div>
	            </div>
	        </div>	
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="fluid-container sticky-bottom" style="background-color: #333; height: 30px;  position: fixed;left: 0;bottom: 0;width: 100%;">
        <div class="row" style="padding-top:4px;">
            <div class="col-2"></div>
            <div class="col-8"><p style="color: #fff; text-align: center;">?? 2021 All copyrights Reserved <a style="color:#e2e2e2;" href="https://www.appsvista.com/">Websitename.com</a></p></div>
            <div class="col-2"></div>
        </div>
    </div>

</div>
              
            </div>
            
        </div>
    </div>
</body>
</html>
</html>



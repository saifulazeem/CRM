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
    <title>ADD Technicians</title>
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
                                <li><a  href="engineers_list.php">All Engineers</a></li>
                                <hr class="new2">
                                <li><a  href="register-complain.php">Register Complains</a></li>
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
          <!--   <ul>
                <li ><a class="btn btn-primary" style="background-color: #4d4d4d; border: none;" href="index.php">ALL</a></li>
                <li><a class="btn btn-primary" style="background-color: #fff; color: #4d4d4d; border: none;" href="top_apps.php">ON DUTY</a></li>
                <li><a class="btn btn-primary" style="background-color: #fff; color: #4d4d4d;border: none;" href="new_release.php">TOP</a></li>
                <li><a class="btn btn-primary" style="background-color: #fff; color: #4d4d4d; border: none;" href="rating.php">AVAILABLE</a></li>
            </ul> -->
            <h1>Name: Sourbh</h1>
            <h4> Complain No: CP10114</h4>
            <h4> Mobile: 0096555552</h4>
            <h4>Address: House#444 Street#abc Dubai</h4>
            <h4>Description</h4>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        </div>
        <br>
        <h4 style="color: #4d4d4d; margin-bottom: -5px;">Engineers</h4>
        <hr style="border:2px solid #4d4d4d; width: 120px; float: left;">

    </div>

<br>
<br>
    <div class="container" id="main-body">

            <!-- side bar start here -->
            <div class="row" style="padding-left: 0px;padding-right: 0px;">
                <div style="padding: 10px; border: 1px solid #e7e7e7; border-radius: 5px; background-color: #fff; height: 720px;  ">
                    <h3 style="color: #4d4d4d;">Select One Engineer From Below list</h3>
                    <hr style="border:1px solid #f1f1f1">
                    <div style="overflow:auto;height: 600px; background-color: #fff;">
                    <table class="table table-striped  table-hover table-condensed" style="text-align: center;">
                        <thead >
                            <tr style="border: none;">
                                <th><h6>Picture</h6></th>
                                <th ><h6>Names</h6></th>
                                <th><h6>Complains Completed</h6></th>
                                <th><h6>Mobile Number</h6></th>
                                <th><h6>Profiles</h6></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                              <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                 <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>

                            <tr>
                                <!-- <td>1</td> -->
                                <!-- <td><span></span>ANTENNE BAYERN</span></td> -->
                                <td style="border-top: hidden;"><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" ></td>
                                <td style="border-top: hidden;">Saif Azeem</td>
                                <td style="border-top: hidden;">497</td>
                                <td style="border-top: hidden;">N/A</td>
                                <!-- <td>1</td> -->
                                <td style="border-top: hidden;">
                                    <form>
                                        <input class="btn btn-secondary" type="submit" name="add_tech" value="Select">    
                                    </form>
                                </td>
                                <!-- <td><a href="https://www.appsvista.com/versions/antenne-bayern/download-4-9-1-912"><i class="fas fa-download"></i></a></td> -->
                            </tr>
                            

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>











        <!-- <div class="row" style="background-color: #fff; padding: 5px;">
            <div style=" width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px; "><span style="margin-left: 5px;"><b>Engineer Name</b></span></div>
            <div style="width: 15%;border-right: 1px solid #333;text-align: center; padding-right: 15px; margin-left: 10px; ">
                <div>
                    <span><b>Ratings</b></span>
                </div>
            </div>
            <div style="width: 15%;border-right: 1px solid #333;text-align: center; padding-right: 15px; margin-left: 10px; ">
                <span><b>Complain Completed</b></span>
            </div>
            <div style="width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px; margin-left: 10px; ">
                <span><b>Pendding</b></span>
            </div>
            <div style="width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px; margin-left: 10px; ">
                <span><b>On Time Completeion </b></span>
            </div>
            <div style="width: 6%;text-align: center; padding-right: 0px;  ">
                <b>Profiles</b>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: #fff; padding: 5px;">
            <div style=" width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px; "><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" > <span style="margin-left: 5px;">War Titans Mech Tank</span></div>
            <div style="width: 15%;border-right: 1px solid #333;text-align: center; padding-right: 15px; margin-left: 10px; ">
                <div style="padding-top: 6px;">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span>(3.0)</span>
                </div>
            </div>
            <div style="width: 15%;border-right: 1px solid #333;text-align: center; padding-right: 15px;padding-top: 6px; margin-left: 10px; ">
                <span>274</span>
            </div>
            <div style="width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px;padding-top: 6px; margin-left: 10px; ">
                <span>15</span>
            </div>
            <div style="width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px;padding-top: 6px; margin-left: 10px; ">
                <span>100%</span>
            </div>
            <div style="width: 6%;text-align: center; padding-right: 0px;padding-top: 6px;  ">
                <a href="#profile">View</a>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: #fff; padding: 5px;">
            <div style=" width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px; "><img style="border-radius: 5px;" src="<?php echo 'https://play-lh.googleusercontent.com/XyANhfY-unXCEKlUSaS3_e8HEdwDBJwg9t8bpeHF-xGqFlB1zAcVT3IVMGD_YoMfph0=w40' ?>"   alt="<?php echo 'War Titans Mech Tank Combat'; ?>" > <span style="margin-left: 5px;">War Titans Mech Tank</span></div>
            <div style="width: 15%;border-right: 1px solid #333;text-align: center; padding-right: 15px; margin-left: 10px; ">
                <div style="padding-top: 6px;">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span>(3.0)</span>
                </div>
            </div>
            <div style="width: 15%;border-right: 1px solid #333;text-align: center; padding-right: 15px;padding-top: 6px; margin-left: 10px; ">
                <span><b>Version: </b>2.7.4.1</span>
            </div>
            <div style="width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px;padding-top: 6px; margin-left: 10px; ">
                <span><b>Last Updated: </b>20-10-2020</span>
            </div>
            <div style="width: 20%;border-right: 1px solid #333;text-align: center; padding-right: 15px;padding-top: 6px; margin-left: 10px; ">
                <span><b>Develop By: </b>Rock Star</span>
            </div>
            <div style="width: 6%;text-align: center; padding-right: 0px;padding-top: 6px;  ">
                <a href="#profile">Profile</a>
            </div>
        </div>
        <br> -->
        
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
<!--    <div class="fluid-container" style="background-color: #333; height: 250px;">
        <div class="container">
            <div class="row" style="padding-top: 20px;">
                <div class="col-4"></div>
                <div class="col-3"><h3 style="float: right; color: #fff">Privacy Policy</h3></div>
                <div class="col-3"><h3 style="color: #fff;">Contact Us</h3></div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2">
                    <a id="logoo" style="color: #fff;" class="navbar-brand" href="index.php"> <span class="btn btn-primary" style="font-size: 17px; background-color: #00346e; border: none;">CRM</span> FOR PC</a>
                </div>
                <div class="col-10" style="padding-top: 5px;">
                    <p style="text-align: center; color: #fff;">Chapter too parties its letters nor. Cheerful but whatever ladyship disposed yet judgment. Lasted answer oppose to ye months no esteem. Branched is on an ecstatic directly it</p>
                </div>
            </div>
            <div class="row">

                <div class="col-6"></div>
                <div class="col-4"><img src="img/fbicon.png" width="20" height="35"><img style="margin-left: 25px;" src="img/twittericon.png" width="40" height="40"><img style="margin-left: 25px;" src="img/youtubeicon.png" width="40" height="40"></div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
 -->
    <div class="fluid-container sticky-bottom" style="background-color: #333; height: 30px;  position: fixed;left: 0;bottom: 0;width: 100%;">
        <div class="row" style="padding-top:4px;">
            <div class="col-2"></div>
            <div class="col-8"><p style="color: #fff; text-align: center;">© 2021 All copyrights Reserved <a style="color:#e2e2e2;" href="https://www.appsvista.com/">Websitename.com</a></p></div>
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

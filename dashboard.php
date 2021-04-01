<!DOCTYPE html>
<html>
<head>
	<title>Dashboaard</title>
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
                            	<li><a style="background-color: #2d2d2d;" href="contact.php">Dashboard</a></li>
                            	 <hr class="new2">
                                <li><a  href="projects.php">All Engineers</a></li>
                                <hr class="new2">
                                <li><a  href="offers.php">Assign Complains</a></li>
                                <hr class="new2">
                                <li><a href="contact.php">Complains Complete</a></li>
                                <hr class="new2">
                                <li><a href="images/cv.pdf">All Customers</a></li>
                                <hr class="new2">
                                <li><a href="images/cv.pdf">ADD Engineers</a></li>
                                <hr class="new2">
                                <li><a href="images/cv.pdf">Delete Engineers</a></li>
                                <hr class="new2">
                                <li><a href="images/cv.pdf">Manage Profile</a></li>
                                <hr class="new2">
                                <li>
                                	<form>
                                		<input class="btn btn-secondary" type="submit" name="" value="Logout">
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
                <h1 style="color: #4d4d4d; padding-top: 30px; padding-left: 20px;">CONTACT ME</h1>
                <div class="contact-form" style="padding-left: 20px; padding-right: 20px;">
                    <!-- <h3 style="color: #4d4d4d;">CONTACT US</h3> -->
                    <br>
                    <form method="POST" action="contactus">
                        <input class="form-control" type="email" name="u_email" placeholder="Email Address Here..." required>
                        <br>
                        <input class="form-control" type="text" name="u_subject" placeholder="Subject Here..." required>
                        <br>
                        <textarea style="height: 100px;" class="form-control" type="text" name="u_message" placeholder="Your Message.." required ></textarea>
                         <br>
                        <div  class="g-recaptcha" data-sitekey="6LehadwZAAAAAAatDkMIlgEOTBQZUvNhnN1hgLTC"></div>
                        <br>
                        <input style=" width: 30%; margin-left: 33%;" class="btn btn-primary" type="submit" name="send_message" value="Send">
                    </form>
                                
                    <div class="status" style="text-align:center;"></div>
                                                                       
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
</html>
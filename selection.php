<?php
session_start();
include("connection.php");
extract($_REQUEST);
    if(isset($_SESSION['id']))
{
	header("location:food.php");
}

	if(isset($register))
     {
	$sql=mysqli_query($con,"select * from tblvendor where fld_email='$email'");
    if(mysqli_num_rows($sql))
	{
	  $email_error="This Email Id is laready registered with us";
	}
	else
	{
	$logo=$_FILES['logo']['name'];
	$sql=mysqli_query($con,"insert into tblvendor 
	(fld_name	,fld_email,fld_password,fld_mob,fld_phone,fld_address,fld_logo)
       	values('$r_name','$email','$pswd','$mob','$phone','$address','$logo')");
	
    if($sql)
	{
	mkdir("image/restaurant");
	mkdir("image/restaurant/$email");
	
	move_uploaded_file($_FILES['logo']['tmp_name'],"image/restaurant/$email/".$_FILES['logo']['name']);
	}
	$_SESSION['id']=$email;
	
	header("location:food.php");
	
	}
  }
	
	
  
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>Category Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		<style>
		ul li{list-style:none;}
		ul li a {color:black;text-decoration:none; }
		ul li a:hover {color:black; text-decoration:none;}
		</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  
    <a class="navbar-brand" href="index.php"><span style="color:green;font-family: 'Permanent Marker', cursive;">Pambahinna Food Delivery</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
                
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
		
		
      </ul>
	  
    </div>
	
</nav>
<br><br><br>
<!-- 
<div class="middle" style="margin:0px auto; border:1px solid #F8F9FA;  width:800px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
        
          <li class="nav-item">
             <a class="nav-link" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li> 

		   <li class="nav-item">
             <a class="nav-link "  style="color:#BDDEFD;"  id="login-tab"data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
          </li> -->

<!-- 
          <li class="nav-item">
             <a class="nav-link" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="vendor-new.php" role="tab" aria-controls="register" aria-selected="true">As a Customer</a>
          </li>

          <li class="nav-item">
             <a class="nav-link" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">As a Food Cabin</a>
          </li>

          <li class="nav-item">
             <a class="nav-link" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">As a Deliver</a>
          </li> -->
<!--           
       </ul> -->
	   <br><br>
	   <!--tab 1 starsts-->
	     <!-- <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show" id="register-foodcabin" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" value="<?php if(isset($r_name)) { echo $r_name;}?>" placeholder="Enter Food Cabin Name" name="r_name" required/>
                      </div>
	                  <div class="form-group">
                          <label for="name">Email:</label>
                          <input type="email" class="form-control" id="email" value="<?php if(isset($email)) { echo $email;}?>" placeholder="Enter Email" name="email" required/>
                          <span style="color:red;"><?php if(isset($email_error)){ echo $email_error;} ?></span>
	                  </div>
	                 <div class="form-group">
                         <label for="pswd">Password:</label>
                         <input type="password" class="form-control" id="pswd" placeholder="Enter Password" name="pswd" required/>
                     </div>
                     <div class="form-group">
                         <label for="mob">Mobile:</label>
                         <input type="tel" class="form-control" pattern="[7-9]{1}[0-9]{9}" value="<?php if(isset($mob)) { echo $mob;}?>"id="mob" placeholder="9123456578" name="mob" required/>
                     </div>
	                 <div class="form-group">
                          <label for="add">Address:</label>
                          <input type="text" class="form-control" id="add" placeholder="Enter Address" value="<?php if(isset($address)) { echo $address;}?>" name="address" required>
                     </div>
	                 <div class="form-group">
                          <input type="file"  name="logo" required>Upload Logo 
                     </div>
                     <button type="submit" id="register" name="register" class="btn btn-outline-primary">Register</button>
                     
                </form>
				<br>
			</div> -->

       <!--tab 2 starsts-->
	     <!-- <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show" id="register-customer" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" value="<?php if(isset($r_name)) { echo $r_name;}?>" placeholder="Customer Name" name="r_name" required/>
                      </div>
	                  <div class="form-group">
                          <label for="name">Email:</label>
                          <input type="email" class="form-control" id="email" value="<?php if(isset($email)) { echo $email;}?>" placeholder="Enter Email" name="email" required/>
                          <span style="color:red;"><?php if(isset($email_error)){ echo $email_error;} ?></span>
	                  </div>
	                 <div class="form-group">
                         <label for="pswd">Password:</label>
                         <input type="password" class="form-control" id="pswd" placeholder="Enter Password" name="pswd" required/>
                     </div>
                     <div class="form-group">
                         <label for="mob">Mobile:</label>
                         <input type="tel" class="form-control" pattern="[7-9]{1}[0-9]{9}" value="<?php if(isset($mob)) { echo $mob;}?>"id="mob" placeholder="9123456578" name="mob" required/>
                     </div>
	                 <div class="form-group">
                          <label for="add">Address:</label>
                          <input type="text" class="form-control" id="add" placeholder="Enter Address" value="<?php if(isset($address)) { echo $address;}?>" name="address" required>
                     </div>
	              
                     <button type="submit" id="register" name="register" class="btn btn-outline-primary">Register</button>
                     
                </form>
				<br>
			</div> -->

        <!--tab 3 starsts-->
	     <!-- <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show" id="register-fooddeliver" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" value="<?php if(isset($r_name)) { echo $r_name;}?>" placeholder="Deliver Name" name="r_name" required/>
                      </div>
                      <div class="form-group">
                          <label for="name">Food Cabin Name:</label>
                          <input type="text" class="form-control" id="name" value="<?php if(isset($r_name)) { echo $r_name;}?>" placeholder="Represent Food Cabin" name="r_name" required/>
                      </div>
	                  <div class="form-group">
                          <label for="name">Email:</label>
                          <input type="email" class="form-control" id="email" value="<?php if(isset($email)) { echo $email;}?>" placeholder="Enter Email" name="email" required/>
                          <span style="color:red;"><?php if(isset($email_error)){ echo $email_error;} ?></span>
	                  </div>
	                 <div class="form-group">
                         <label for="pswd">Password:</label>
                         <input type="password" class="form-control" id="pswd" placeholder="Enter Password" name="pswd" required/>
                     </div>
                     <div class="form-group">
                         <label for="mob">Mobile:</label>
                         <input type="tel" class="form-control" pattern="[7-9]{1}[0-9]{9}" value="<?php if(isset($mob)) { echo $mob;}?>"id="mob" placeholder="9123456578" name="mob" required/>
                     </div>
	                 <div class="form-group">
                          <label for="add">Address:</label>
                          <input type="text" class="form-control" id="add" placeholder="Enter Address" value="<?php if(isset($address)) { echo $address;}?>" name="address" required>
                     </div>
                     
                     <button type="submit" id="register" name="register" class="btn btn-outline-primary">Register</button>
                     
                </form>
				<br>
			</div>  -->


      <!-- <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show" id="register-selection" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			    <form action="" method="post" enctype="multipart/form-data">

          <a class="nav-link" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register-foodcabin" role="tab" aria-controls="register" aria-selected="true">As a Food Cabin</a>
          <a class="nav-link" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register-customer" role="tab" aria-controls="register" aria-selected="true">As a Customer</a>
          <a class="nav-link" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register-fooddeliver" role="tab" aria-controls="register" aria-selected="true">As a Food Deliver</a>
                          
                </form>
				<br>
			</div>  -->


      <div class="tab-pane fade show" id="register" role="tabpanel" aria-labelledby="home-tab">
			   <a href="register-foodcabin.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Food Cabin</button></a>
          <a href="register-customer.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Customer</button></a>
			   <a href="register-.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Food Deliver</button></a>
         <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div>


			<div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="foodcabin_login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Food Cabin</button></a>
          <a href="customer_login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Customer</button></a>
			   <a href="fooddeliver_login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Food Deliver</button></a>
         <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div>

		

      <!-- <div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="vendor_login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Customer</button></a>
			   <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div>

      <div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="vendor_login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">As a Food Deliver</button></a>
			   <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div> --> 

	   </div>
	</div> 
	<br>
	 <?php
			include("footer.php");
			?>
	 
	   
</body>
</html>
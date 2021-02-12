<?php
session_start();
include("connection.php");
extract($_REQUEST);
if(isset($_GET['product']))
{
	$product_id= $_GET['product'];
}
else
{
	$product_id= "";
}
if(isset($_GET['msg']))
{
	$loginmsg=$_GET['msg'];
}
else
{
	$loginmsg="";
}
if(isset($login))
{
	$query=mysqli_query($con,"select * from tblcustomer where fld_email='$email' && password='$password'");
    if($row=mysqli_fetch_array($query))
	{
		$customer_email =$row['fld_email'];
		$_SESSION['cust_id']=$customer_email;
		if(!empty($customer_email && $product_id))
		{
			 //$_SESSION['product']=$product_id;
			echo $_SESSION['cust_id']=$customer_email;
			
			 header("location:cart.php?product=$product_id");
			
		}
		else
		{
		header("location:../index.php");
		 $_SESSION['product']=$product_id;
		 $_SESSION['cust_id'];
		}
		 
	}
	else
	{
		$ermsg="invalid Details";
	}
}

if(isset($register))
{
	$query=mysqli_query($con,"select * from tblcustomer where fld_email='$email'");
	$row=mysqli_num_rows($query);
	if($row)
	{
		$ermsg2="Email alredy registered with us";
		
	}
	else
	{
		if(mysqli_query($con,"insert into tblcustomer (fld_name,fld_email,password,fld_mobile,address) values('$name','$email','$password','$mobile', '$address')"))
    {
		$_SESSION['cust_id']=$email;
		if(!empty($customer_email && $product_id))
		{
			$_SESSION['cust_id']=$customer_email;
			header("location:cart.php?product='$product_id'");
			
		}
		else
		{
			$_SESSION['cust_id']=$email;
			header("location:../index.php");
		}
		
		
	}
	else
	{
		echo "fail";
		echo $name;
		echo $email;
		echo $password;
		echo $mobile;
		echo $address;
	}
	}
	
}
 
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
    <title>Customer Registration Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Permanent+Marker" rel="stylesheet">
	
  	<style>
		ul li{list-style:none;}
    ul li a{color:black; font-weight:bold;}
    ul li a:hover{color:green;text-decoration:none;}
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
          <a class="nav-link" href="index.php">Home</a>
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


<div class="middle" style="margin:0px auto;width:800px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:green;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" id="register-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li>
		      <li class="nav-item">
             <a class="nav-link " id="login-tab" style="color:black;" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
          </li>
       </ul>

	   <br><br>

<div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="profile-tab">
			    <div class="footer" style="color:red;"></div>
			    <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                          <label for="name">Name :</label>
                          <input type="text" id="name"  class="form-control" name="name" placeholder="Name" required="required"/>
                    </div>
	                  <div class="form-group">
                          <label for="name">Email :</label>
                          <input type="email" id="email" name="email" class="form-control" placeholder="Email"  required/>
                          </div>
	                  <div class="form-group">
                         <label for="pswd">Password :</label>
                         <input type="password" name="password" class="form-control" id="pwd" placeholder="Password" required/>
                     </div>
                    <div class="form-group">
                         <label for="mob">Mobile :</label>
                         <input type="tel" id="mobile" class="form-control" name="mobile" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Mobile" required>
                    </div>
	                  <div class="form-group">
                          <label for="add">Address :</label>
                          <input type="text" class="form-control" id="add" placeholder="Enter Address" name="address" required>
                    </div>
                    <center>
                    <button type="submit" id="register" name="register" class="btn btn-success">Register</button>    
                    <div class="footer" style="color:red;"><?php if(isset($ermsg)) { echo $ermsg; }?><?php if(isset($ermsg2)) { echo $ermsg2; }?></div>
                    </center>
            </form>
				<br>
			</div>
      
	   <!--login Section-- starts-->
            <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			  <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email address" required/>
                    </div>
                   <div class="form-group">
                      <label for="pwd">Password:</label>
                     <input type="password" name="password" class="form-control" id="pwd" placeholder="password" required/>
                   </div>
					<center>
					<button type="submit" name="login"class="btn btn-success">Login</button>
					</center>
                  <div class="footer" style="color:red;"><?php if(isset($ermsg)) { echo $ermsg; }?><?php if(isset($ermsg2)) { echo $ermsg2; }?></div>
			 </form>
			</div>
			<!--login Section-- ends-->
	
			<!-- <div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="customer_login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">Log In</button></a>
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




































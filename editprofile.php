<?php
session_start();
require_once('mysqli_connect.php'); 

if(isset($_POST['editProfile']))
  {
    $username=$_POST['username'];
    $password=($_POST['password']);
    $first_name=($_POST['first_name']);
    $last_name=($_POST['last_name']);
    $email=($_POST['email']);
    $phone=($_POST['phone']);
	
	$query=mysqli_query($dbc,"UPDATE users SET password ='$new_pass' where userID='$email'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $msg = 'Password Updated';
    }
    else{
    $msg = "Invalid Details.";
    }
	
    $stmt=mysqli_prepare($dbc,$query);

     mysqli_stmt_execute($stmt); 
         $affected_rows = mysqli_stmt_affected_rows($stmt); 
         if($affected_rows == 1){ 
             echo 'Edits Successful'; 
             mysqli_stmt_close($stmt); 
             mysqli_close($dbc); 
         } else { 
             echo 'Error, Try again<br />'; 
             mysqli_stmt_close($stmt); 
             mysqli_close($dbc); 
         } 

  }
  ?>
  
  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=password], input[type=text], input[type=phone], input[type=email]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus input[type=email]:focus{
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

<body>

			<h2 align="center">Budget App</h2>
					<p style="font-size:16px; color:red" align="center"> 
						<?php 
						if (!empty($msg)){
							echo $msg;
						}
						?> 
				  </p>
					<form role="form" action="" method="post" id="" name="editProfile">
						<fieldset>

							<div class="form-group">
								<label for="username"><b>Username</b></label>
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required="true">
							</div>

							<div class="form-group">
								
								<input class="form-control" placeholder="password" name="password" type="password" autofocus="" required="true">
							</div>
							
							<div class="form-group">
								<input class="form-control" placeholder="First Name" name="first_name" type="text" autofocus="" required="true">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Last Name" name="last_name" type="text" autofocus="" required="true">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Phone" name="phone" type="phone" value="" required="true">
							</div>
							<div class="checkbox">
								<button type="submit" value="editProfile" name="editProfile" action='index.php' class="btn btn-primary">Update</button><span style="padding-left:250px">
							</div>

							</fieldset>
					</form> 
					<form>
					<input type="button" value="Go back!" onclick="history.back()">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
</body>
</html>
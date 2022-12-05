<?php
session_start();
require_once('mysqli_connect.php'); 

if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $password=($_POST['password']);
    $query=mysqli_query($dbc,"select userID from users where username='$username' && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
    	$_SESSION['userID']=$ret['userID'];
     header('location:dashboard.php');
    }
    else{
    $msg = "Invalid Details.";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>

			<h2>Budget App</h2>
					<p> 
						<?php 
						if (!empty($msg)){
							echo $msg;
						}
						?> 
				  </p>
					<form role="form" action="" method="post" id="" name="login">
						<fieldset>

							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required>
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
							</div>

							<div class="checkbox">
								<button type="submit" value="login" name="login" action='dashboard.php' class="btn btn-primary">login</button><span style="padding-left:250px">

									<!-- <a href="forgot-password.php">Forgot Password?</a> -->
								<!-- <a href="register.php" class="btn btn-primary">Register</a></span> -->
							</div>
							</fieldset>
					</form>
					<form method = "POST" action ="forgotpassword.php"> 
						<input type = "submit" value="Forgot Password"/> 
					</form> 

					<form method = "POST" action ="register.php"> 
						<input type = "submit" value="Create Account"/> 
					</form> 
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
</body>
</html>

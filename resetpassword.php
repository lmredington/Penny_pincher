<?php
session_start();
require_once('mysqli_connect.php'); 

if(isset($_POST['login']))
  {
    $new_pass=$_POST['password'];
    $email=$_POST['email'];

    $query=mysqli_query($dbc,"UPDATE users SET password ='$new_pass' where userID='$email'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $msg = 'Password Updated';
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
</head>
<body>

      <h2 align="center">Budget App</h2>
          <p style="font-size:16px; color:red" align="center"> 
            <?php 
            if (!empty($msg)){
              echo $msg;
            }
            ?> 
          </p>
          <form role="form" action="" method="post" id="" name="login">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Email" name="email" type="text" value="" required="true">
              </div>

              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="text" value="" required="true">
              </div>

              <div class="checkbox">
                <button type="submit" value="login" name="login" action='resetpassword.php' class="btn btn-primary">Reset Password</button><span style="padding-left:250px">
              </div>
              </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  
  
</body>
</html>
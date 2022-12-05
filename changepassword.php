<html> 
<head> 
 <title>Change Password</title> 
 <link rel="stylesheet" href="style.css">
</head> 
<body> 
 <?php 
 if(isset($_POST['submit'])){ 
  $data_missing = array(); 
   
     if(empty($_POST['email'])){ 
         // Adds name to array 
         $data_missing[] = 'email'; 
     } else { 
         // Trim white space from the name and store the name 
         $email = trim($_POST['email']); 
     } 
     if(empty($_POST['phone'])){ 
         // Adds name to array 
         $data_missing[] = 'phone'; 
     } else{ 
         // Trim white space from the name and store the name 
         $phone = trim($_POST['phone']); 
     } 
     if(empty($_POST['password'])){ 
         // Adds name to array 
         $data_missing[] = 'password'; 
     } else{ 
         // Trim white space from the name and store the name 
         $password = trim($_POST['password']); 
     }      
 }
     
 
     if(empty($data_missing)){ 
         require_once('mysqli_connect.php'); 
         $query = "UPDATE users SET password = '$password' WHERE email='$email' && phone='$phone'";
         
         $stmt = mysqli_prepare($dbc, $query);
        
 
 
         mysqli_stmt_execute($stmt); 
         $affected_rows = mysqli_stmt_affected_rows($stmt); 
         if($affected_rows == 1){ 
             echo 'Password Updated'; 
             mysqli_stmt_close($stmt); 
             mysqli_close($dbc); 
         } else { 
             echo 'No Account Matching that Info<br />'; 
             mysqli_stmt_close($stmt); 
             mysqli_close($dbc); 
         } 
     } else { 
         echo 'You need to enter the following data<br />'; 
         foreach($data_missing as $missing){ 
             echo "$missing<br />"; 
         } 
     } 
 
 ?>
 
 
<form method = "POST" action ="index.php"> 
  <input type = "submit" value="Go back to main menu"/> 
 </form>
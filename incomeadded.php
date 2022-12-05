<html> 
<head> 
 <title>Add Income</title> 
</head> 
<body> 
 <?php 
 if(isset($_POST['submit'])){ 
  $data_missing = array(); 
   
     if(empty($_POST['incomeAmount'])){ 
         // Adds name to array 
         $data_missing[] = 'incomeAmount'; 
     } else { 
         // Trim white space from the name and store the name 
         $amount = trim($_POST['incomeAmount']); 
     } 
     if(empty($_POST['incomeDate'])){ 
         // Adds name to array 
         $data_missing[] = 'incomeDate'; 
     } else{ 
         // Trim white space from the name and store the name 
         $date = trim($_POST['incomeDate']); 
     } 
 }
     
 
     if(empty($data_missing)){ 
         require_once('mysqli_connect.php'); 
         $query = "INSERT INTO income (incomeAmount, incomeDate) VALUES (?, ?)"; 
         
         $stmt = mysqli_prepare($dbc, $query);
        
 
         mysqli_stmt_bind_param($stmt, "ss", $amount, 
                                $date); 
 
 
         mysqli_stmt_execute($stmt); 
         $affected_rows = mysqli_stmt_affected_rows($stmt); 
         if($affected_rows == 1){ 
             echo 'Income Added'; 
             mysqli_stmt_close($stmt); 
             mysqli_close($dbc); 
         } else { 
             echo 'Error Occurred<br />'; 
             echo mysqli_error(); 
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
 
 
<form method = "POST" action ="dashboard.php"> 
  <input type = "submit" value="Go back to main menu"/> 
 </form>
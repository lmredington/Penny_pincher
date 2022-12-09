html> 
<!-- add new purchase to database -->
<head> 
 <title>Add Purchase</title> 
 <link rel="stylesheet" href="style.css">
</head> 
<body> 
 <?php 
 session_start();
 $uid = $_SESSION['userID'];
 if(isset($_POST['submit'])){ 
  $data_missing = array(); 
   
     if(empty($_POST['purchaseDate'])){ 
         // Adds name to array 
         $data_missing[] = 'purchaseDate'; 
     } else { 
         // Trim white space from the name and store the name 
         $pdate = trim($_POST['purchaseDate']); 
     } 
     if(empty($_POST['purchaseAmount'])){ 
         // Adds name to array 
         $data_missing[] = 'Amount'; 
     } else{ 
         // Trim white space from the name and store the name 
         $pamt = trim($_POST['purchaseAmount']); 
     } 
     if(empty($_POST['category'])){ 
         // Adds name to array 
         $data_missing[] = 'category'; 
     } else { 
         // Trim white space from the name and store the name 
         $pcat = trim($_POST['category']); 
     } 
     if(empty($_POST['description'])){ 
         // Adds name to array 
         $data_missing[] = 'description'; 
     } else { 
         // Trim white space from the name and store the name 
         $pdesc = trim($_POST['description']); 
     } 
     // $puid = $_POST['uid'];
 }
     
 
     if(empty($data_missing)){ 
        require_once('mysqli_connect.php');
        $query = "INSERT INTO purchases (purchaseDate, purchaseAmount, 
         catID, description, userID) VALUES (?, ?, ?, ?, ?)"; 

        $stmt = mysqli_prepare($dbc, $query);
         mysqli_stmt_bind_param($stmt, "sssss", $pdate, 
                                $pamt, $pcat, $pdesc, $uid); 

 
         mysqli_stmt_execute($stmt); 
         $affected_rows = mysqli_stmt_affected_rows($stmt); 
         if($affected_rows == 1){ 
             echo 'Purchase Added'; 
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

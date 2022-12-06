 <!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <title>Budget App</title>
 <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
  
    <h1>Logout</h1>       
 
 <form method = "POST" action ="index.php"> 
  <input type = "submit" value="Logout"/> 
  </form>

  <?php
  session_start();
  session_destroy();
?>
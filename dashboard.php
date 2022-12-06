<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <title>Budget App</title>
 <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
  
    <h1>Dashboard</h1>       
 
 
 <form method = "POST" action ="purchaseReport.php"> 
  <input type = "submit" value="View Purchases"/> 
 </form> 

 <br></br>

  <form method = "POST" action ="addPurchase.php"> 
  <input type = "submit" value="Add Purchase"/> 
 </form> 

<br></br>
 
  <form method = "POST" action ="addIncome.php"> 
  <input type = "submit" value="Add Income"/> 
 </form> 

<br></br>
 
  <form method = "POST" action ="incomehistory.php"> 
  <input type = "submit" value="View Income History"/> 
 </form> 
 
 <br></br>
 <form method = "POST" action ="editProfile.php"> 
  <input type = "submit" value="Edit Profile"/> 
  </form>
 
 <br></br>
 <form method = "POST" action ="logout.php"> 
  <input type = "submit" value="Logout"/> 
  </form>

</body> 
</html>
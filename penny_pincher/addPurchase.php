<html> 
<!-- Input information to create new purchase -->
<head> 
<title>Add Purchase</title>
<link rel="stylesheet" href="style.css">
</head> 
<body> 
<form action="http://localhost/penny_pincher/purchaseadded.php" method="post"> 

<h1>Add a New Purchase</h1> 

<br>
<p>Purchase Date: </p> 
<input type="date" name="purchaseDate" size="30" value="" /> 


<p>Purchase Amount: </p> 
<input type="number" step="0.01" name="purchaseAmount" size="30" value="" /> 

<br>
<p>Category: (1 for essentials, 2 for personal, or 3 for savings)</p> 
<input type="text" name="category" size="30" value="" /> 


<p>Description: </p> 
<input type="text" name="purchDescription" size="30" value="" /> 


<br></br>

<p> 
<input type="submit" name="submit" value="Add Purchase" /> 
</p> 

</form> 
</body> 
</html>

<form method = "POST" action ="dashboard.php"> 
  <input type = "submit" value="Go back to main menu"/> 
 </form>


</form> 
</body> 
</html>

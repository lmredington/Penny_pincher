<html> 
<head> 
<title>Add Purchase</title> 
</head> 
<body> 
<form action="http://localhost/budget/purchaseadded.php" method="post"> 

<b>Add a New Purchase</b> 

<p>Purchase Date: 
<input type="date" name="purchaseDate" size="30" value="" /> 
</p> 

<p>Purchase Amount: 
<input type="number" step="0.01" name="purchaseAmount" size="30" value="" /> 
</p> 

<p>Category: 
<input type="text" name="category" size="30" value="" /> 
</p> 

<p>Description: 
<input type="text" name="description" size="30" value="" /> 
</p> 
 
<p> 
<input type="submit" name="submit" value="Add Purchase" /> 
</p> 

</form> 
</body> 
</html>
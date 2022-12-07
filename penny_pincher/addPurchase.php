<html> 
<head> 
<title>Add Purchase</title>
<link rel="stylesheet" href="style.css">
</head> 
<body> 
<form action="http://localhost/budget/purchaseadded.php" method="post"> 

<h1>Add a New Purchase</h1> 

<p>Purchase Date: </p> 
<input type="date" name="purchaseDate" size="30" value="" /> 


<p>Purchase Amount: </p> 
<input type="number" step="0.01" name="purchaseAmount" size="30" value="" /> 


<p>Category: </p> 
<input type="text" name="category" size="30" value="" /> 


<p>Description: </p> 
<input type="text" name="description" size="30" value="" /> 


<br></br>

<p> 
<input type="submit" name="submit" value="Add Purchase" /> 
</p> 

</form> 
</body> 
</html>

<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
// Create a query for the database 

$month = $_GET['month'];
$year = $_GET['year'];
$query = ("SELECT * FROM purchases WHERE MONTH(purchaseDate) = '$month' && YEAR(purchaseDate) = '$year' ORDER BY purchaseDate");
// Get a response from the database by sending the connection 
// and the query 
$response = @mysqli_query($dbc, $query); 
// If the query executed properly proceed 
if($response){ 
echo '<table align="left" 
cellspacing="5" cellpadding="8"> 
<tr> 
<td align="left"><b>purchaseDate</b></td> 
<td align="left"><b>purchaseAmount</b></td> 
<td align="left"><b>category</b></td> 
<td align="left"><b>description</b></td>  
</tr>'; 
// mysqli_fetch_array will return a row of data from the query 
// until no further data is available 
while($row = mysqli_fetch_array($response)){ 
echo '<tr><td align="left">' . 
$row['purchaseDate'] . '</td><td align="left">' . 
$row['purchaseAmount'] . '</td><td align="left">' . 
$row['category'] . '</td><td align="left">' . 
$row['description'] . '</td><td align="left">'
; 
echo '</tr>'; 
} 
echo '</table>'; 
} else { 
echo "Couldn't issue database query<br />"; 
echo mysqli_error($dbc); 
} 
// Close connection to the database 
mysqli_close($dbc); 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <title>Itemized List</title> 
</head> 
<body>
 <form method = "POST" action ="dashboard.php"> 
  <input type = "submit" value="Go back to main menu"/> 
 </form> 
  
</body> 
</html>
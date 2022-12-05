<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
// Create a query for the database 

$query = ("SELECT * FROM income");
// Get a response from the database by sending the connection 
// and the query 
$response = @mysqli_query($dbc, $query); 
// If the query executed properly proceed 
if($response){ 
echo '<table align="left" 
cellspacing="5" cellpadding="8"> 
<tr> 
<td align="left"><b>Amount</b></td> 
<td align="left"><b>Date</b></td> 
</tr>'; 
// mysqli_fetch_array will return a row of data from the query 
// until no further data is available 
while($row = mysqli_fetch_array($response)){ 
echo '<tr><td align="left">' .  
$row['incomeAmount'] . '</td><td align="left">' .
$row['incomeDate'] . '</td><td align="left">'; 
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
 <title>Go back to main menu</title> 
</head> 
<body>
 <form method = "POST" action ="dashboard.php"> 
  <input type = "submit" value="Go back to main menu"/> 
 </form> 
  
</body> 
</html>
<html> 
<head> 
<title>Purchase Report</title>
<link rel="stylesheet" href="style.css">
</head> 
<body> 

<form action="viewPurchases.php" method="get">



<select id="month" name="month" placeholder="Month">
  <option value="" disabled selected>Month</option>
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">July</option>
  <option value="8">August</option>
  <option value="9">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
</select>

<select id="year" name="year">
    <option value="" disabled selected>Year</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
</select>

<input type="submit" name="submit" value="View Itemized List" /> 
  <input type = "submit" value="Go back to main menu"/>
</form> 
</body> 
</html>

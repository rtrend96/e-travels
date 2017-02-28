<html>
<head>
<title>Details</title>
<body bgcolor="940c0f">
<center>
<?php
$con=mysqli_connect("localhost","root","","etravels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM busdetails WHERE origin='vd'");
echo "<table border='1'>
<tr>
<th bgcolor='wheat'>DESTINATION</th>
<th bgcolor='wheat'>FARE</th>
</tr>";

while($row = mysqli_fetch_array($result))
  { 
  
  
   echo "<tr>";
  echo "<td bgcolor='wheat'>" . $row['dest'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['farea'] . "</td>";
  echo "</tr>";
  
  }
echo "</table>";

mysqli_close($con);
?>

<a href="bookingf.php"><font color="wheat" size="8">Book Ticket</font></a>
</center>
</body>
</head>
</html>




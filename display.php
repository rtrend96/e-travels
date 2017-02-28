<html>
<head>
<title>LOGREPORT</title>
<body bgcolor="940c0f">
<center>

<?php
$con=mysqli_connect("localhost","root","","etravels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$name=$_GET['name'];
$result = mysqli_query($con,"SELECT * from book where name='$name'");

echo "<table border='3'>
<tr>

<th bgcolor='wheat'>UserName</th>



<th bgcolor='wheat'>TotalAmount</th>
<th bgcolor='wheat'>Origin</th>

<th bgcolor='wheat'>Destination</th>


<th bgcolor='wheat'>Age</th>
<th bgcolor='wheat'>Gender</th>
<th bgcolor='wheat'>CreditNumber</th>
<th bgcolor='wheat'>Name</th>
<th bgcolor='wheat'>Arrival</th>
<th bgcolor='wheat'>Departure</th>
<th bgcolor='wheat'>Emailid</th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td bgcolor='wheat'>" . $row['name'] . "</td>";
  
  echo "<td bgcolor='wheat'>" . $row['totamt'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['origin'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['dest'] . "</td>";
   
  echo "<td bgcolor='wheat'>" . $row['age'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['gender'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['creditno'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['uname'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['adate'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['ddate'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['email'] . "</td>";
  
  
  
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</center>
</body>
</html>








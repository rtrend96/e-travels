<html>
<head>
</head>

<body bgcolor="940c0f">
<a href=index.html><font color="wheat" size="6">Home</font></a>
<center>
<?php
$con=mysqli_connect("localhost","root","","etravels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$name=$_GET['name'];
$uname=$_GET['uname'];
$result = mysqli_query($con,"SELECT name,totamt,origin,dest,age,gender,creditno from book WHERE name='$name' AND uname='$uname'");


echo "<table border='3'>
<tr>

<th bgcolor='wheat'>Name</th>



<th bgcolor='wheat'>TotalAmount</th>
<th bgcolor='wheat'>Origin</th>

<th bgcolor='wheat'>Destination</th>
<th bgcolor='wheat'>Age</th>
<th bgcolor='wheat'>Gender</th>
<th bgcolor='wheat'>CreditNumber</th>

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
  
  
  
  
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</center>
</body>
</html>




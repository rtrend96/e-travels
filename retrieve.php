<html>
<head>
<title></title>
</head>
<body bgcolor="940c0f">
<center>
<?php
$con=mysqli_connect("localhost","root","","etravels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT name,totamt,origin,dest,age,gender,creditno\n"
    . "FROM book\n"
    . "JOIN user ON book.name = user.user_username\n"
    . "WHERE book.name=user.user_username LIMIT 0, 30 ");

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








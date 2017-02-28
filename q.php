<?php
$con=mysqli_connect("localhost","root","","tshirtfactory");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM busdetails");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['source'] . "</td>";
  echo "<td>" . $row['dest'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>

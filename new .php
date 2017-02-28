<?php
$con=mysqli_connect("localhost","root","","etravels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM busdetails");

while($row = mysqli_fetch_array($result))
  {
  echo $row['origin'] . " " . $row['dest'] . " " . $row['farea'];
  echo "<br>";
  }

mysqli_close($con);
?>
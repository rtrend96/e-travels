<?php
$con=mysqli_connect("localhost","root","","etravels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$name=$_GET['name'];
$uname=$_GET['uname'];
mysqli_query($con,"DELETE FROM book WHERE name='$name' AND uname='$uname'");
echo 'Done';

mysqli_close($con);
?>
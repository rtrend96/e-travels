<html>
<head>
<title>cancel</title>
</head>
<a href=indiantourist.html><font color="wheat" size="6">Home</font></a>
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

mysqli_query($con,"DELETE FROM book WHERE name='$name'");
echo "<font color='wheat' size='6'>Cancellation Successfull</font>";

mysqli_close($con);
?>
<br/>
<a href=logout.php><font color="wheat" size="6">Logout</font></a>
</center>
</body>
</html>
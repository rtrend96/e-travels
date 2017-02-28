<html>
<head>
<title>Booking Done</title>

<?php
$con=mysqli_connect("localhost","root","","etravels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO feedback (name,address,telno,feedback,country,email)
VALUES
('$_POST[name]','$_POST[address]','$_POST[telno]','$_POST[feedback]'  ,'$_POST[country]'  ,'$_POST[email]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


mysqli_close($con);
?>
</head>
<body>
<center>
<h1>Thankyou For Your FeedBack</h1>
</center>
</body>
</html>




<html>
<head>
<title></title>
<a href="indiantourist.html"><font color="wheat">Home</font></a>
<a href="logout.php"><font color="wheat"><b>Logout</b></font></a>

<style>
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}




table,td,th
{
border:1px solid black;
}
table
{
width:100%;
}
th
{
height:50px;
}
</style>
</head>
<body bgcolor="940c0f">
<center>
<?php
$con=mysqli_connect("localhost","root","","etravels2");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"select * from feedback");
echo "<table border='3'>
<tr>

<th bgcolor='wheat'>Name</th>



<th bgcolor='wheat'>Emailid</th>
<th bgcolor='wheat'>UserFriendlinessRating</th>

<th bgcolor='wheat'>LookRating</th>
<th bgcolor='wheat'>Working of all links</th>
<th bgcolor='wheat'>QualityDesign</th>
<th bgcolor='wheat'>Date </th>
<th bgcolor='wheat'>Feedback </th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td bgcolor='wheat'>" . $row['uid'] . "</td>";
  
  echo "<td bgcolor='wheat'>" . $row['eid'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['u1'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['l1'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['w1'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['d1'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['date'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['fb'] . "</td>";
  
  
  
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</center>
</body>
</html>






<?php
include('cn.php');
session_start();

$userUsername = $_SESSION['user'];

$sql = "SELECT * FROM members WHERE
	uname = '" . $userUsername . "'";
$result = mysql_query($sql, $cn) or
	die(mysql_error($cn));
$row = mysql_fetch_assoc($result);

$userAge = $row['age'];
$userCountry = $row['state'];
$userAddress = $row['address'];

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $userUsername; ?>'s Profile</title>
<style>
div
{
width:600px;
height:600px;
background-color:floralwhite;
box-shadow: 10px 10px 5px #888888;
}
</style>
</head>
<body bgcolor="940C0F">
<center>
<div>
<h1>Profiles Page</h1>
<h2>Welcome <?php echo $userUsername; ?></h2>
<h3><a href="logout.php">[LOGOUT]</a></h3>
<h3><a href="bookingf.php">[BOOK]</a></h3>
<br />
<br />
<h3>Details about you:</h3>
<p>You are from <?php echo $userCountry; ?>.</p> 
<p>You are <?php echo $userAge; ?> years old.</p>
<p>Your Address is <?php echo $userAddress; ?>.</p>
</div>
</center>
</body>
</html>
<html>
<head>
<title></title>
</head>
<body bgcolor="940C0F">
<center>
<img src="images/wel.jpg">
<?php
include('cn.php');
session_start();

$userUsername = $_POST['userUsername'];
$userPassword = $_POST['userPassword'];

// to protect against MySQL injection
$userUsername = mysql_real_escape_string(stripslashes($userUsername));
$userPassword = mysql_real_escape_string(stripslashes($userPassword));

$sql = "SELECT * FROM user
		WHERE
	user_username = '$userUsername' and
	user_password = '$userPassword'";
$result = mysql_query($sql, $cn) or
	die(mysql_error($cn));
	
// check if the specified user was found in database
$numberOfUsersFound = mysql_num_rows($result);

if($numberOfUsersFound == 1) {
	echo '<p><h2><font color="wheat">Login <b>SUCCESSFULL</b>. Go to your <a href="profile.php"><font color="wheat">profiles page</font></a>.</font></h2></p>';
	
	$_SESSION['loggedInUser'] = $userUsername;
} else {
	echo '<p><h2><font color="wheat">Wrong Username or Password. Return to <a href="login.php">login page</a>.</font></h2></p>';
}
?>
</center>
</body>
</html>












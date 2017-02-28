<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration Complete</title>
</head>
<body>
<?php
include('cn.php');
	
$userUsername = $_POST['userUsername'];
$userPassword = $_POST['userPassword'];
$userPasswordConfirm = $_POST['userPasswordConfirm'];
$userAge = $_POST['userAge'];
$userCountry = $_POST['userCountry'];

// Prevent MySQL Injections
$userUsername = mysql_real_escape_string(stripslashes($userUsername));
$userPassword = mysql_real_escape_string(stripslashes($userPassword));
$userPasswordConfirm = mysql_real_escape_string(stripslashes($userPasswordConfirm));
$userAge = mysql_real_escape_string(stripslashes($userAge));
$userCountry = mysql_real_escape_string(stripslashes($userCountry));

$sql = "SELECT * FROM user";
$resultCount = mysql_query($sql, $cn) or
	die(mysql_error($cn));

$num_users = mysql_num_rows($resultCount);
	
$row_count = -1;
while ($row_count < $num_users) {
	$data = mysql_fetch_object($resultCount);
	$row_count++;
	
	if ($data->user_username == $userUsername) {
		echo '<p>The username "' . $userUsername . '" is not available.</p>';
		$row_count = $num_users;
	} else if ($row_count == $num_users) {
		echo '<p>The username "' . $userUsername . '" has been selected.</p>';
		
		if ($userPassword != $userPasswordConfirm) {
			echo '<p>Passwords do not match.</p>';
			echo '<p><strong>New user has not been created.</strong></p>';
		} else {
			echo '<p>Passwords match.</p>';
			
			$userJoinDate = time();
			
			$sql = "INSERT INTO
					user
				(user_username,
				 user_password,
				 user_join_date,
				 user_age,
				 user_country)
					VALUES
				('" . $userUsername . "',
				 '" . $userPassword . "',
				 '" . $userJoinDate . "',
				 '" . $userAge . "',
				 '" . $userCountry . "')";
			$result = mysql_query($sql, $cn) or
				die(mysql_error($cn));
			
			echo "<p><strong>The username '" . $userUsername . "' has been created. Please login <a href='login.php'>here</a>.</strong></p>";
		}
	}
}
?>


</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration Complete</title>
</head>
<body>
<?php
include('cn.php');
	
$Busid = $_POST['bus'];
$totamt = $_POST['tot'];
$userOrig= $_POST['uorigin'];
$userDest = $_POST['udest'];

$userName = $_POST['uname'];
$userAge = $_POST['uage'];
$userGender = $_POST['ug'];
$userCredit = $_POST['uc'];

// Prevent MySQL Injections
$Busid = mysql_real_escape_string(stripslashes($Busid));
$totamt = mysql_real_escape_string(stripslashes($totamt));
$userOrig = mysql_real_escape_string(stripslashes($userOrig));
$userDest = mysql_real_escape_string(stripslashes($userDest));
$userName = mysql_real_escape_string(stripslashes($userName));
$userAge = mysql_real_escape_string(stripslashes($userAge));
$userGender = mysql_real_escape_string(stripslashes($userGender));
$userCredit = mysql_real_escape_string(stripslashes($userCredit));


$sql = "SELECT * FROM book";
$resultCount = mysql_query($sql, $cn) or
	die(mysql_error($cn));

$num_users = mysql_num_rows($resultCount);
	
$row_count = -1;
while ($row_count < $num_users)
{
	$data = mysql_fetch_object($resultCount);
	$row_count++;
	

if ($data->name == $userName) 


{
		echo '<p>The username "' . $userName . '" is not available.</p>';
		$row_count = $num_users;
} 
else if ($row_count == $num_users) 
{
		echo '<p>The username "' . $userName . '" has been selected.</p>';
		
		
			
			
			$sql = "INSERT INTO
					book
				(busid,
				 totamt,
				 origin,
				 dest,
				 name,
                                 age,
                                 gender,
                                 creditno)
					VALUES
				('" . $Busid  . "',
				 '" . $totamt . "',
				 '" .$userOrig . "',
				 '" . $userDest     . "',
				 '" . $userName    . "'
                                       '" . $userAge    . "'       
                                         '" . $userGender   . "'  
                                          '" . $userCredit    . "')";
			$result = mysql_query($sql, $cn) or
				die(mysql_error($cn));
			
			echo "<p><strong>The username '" . $userName . "' has been created. View your booking <a href='login.php'>details here</a>.</strong></p>";
		
}
}
?>


</body>
</html>
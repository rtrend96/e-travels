<html>
<head>

</head>
<body bgcolor="940c0f">
<?php
$usn="";
$eid="";
$feed="";
$u="";
$l="";
$w="";
$d11="";
$error="";
$e1="";
$e2="";
$e3="";
$again=true;

if (isset($_POST['s2']))
{
$usn=$_POST['uid'];
$eid=$_POST['eid'];
$feed=$_POST['fb'];
$u=$_POST['u1'];
$l=$_POST['l1'];
$w=$_POST['w1'];
$d11=$_POST['d1'];

$d=date("y-m-d");
if (empty($usn) && empty($eid) && empty($feed))
{
$error="All fields are mandatory";
$again=true;
}
else
{
		if(empty($usn))
		{
		$e1="Pls enter name";
		$again=true;
		}
		if(empty($eid))
		{
		$e2="Pls enter email id";
		$again=true;
		}
		if(empty($feed))
		{
		$e3="Pls enter COMMENT";
		$again=true;
		}
}
if (!empty($usn) && !empty($eid) && !empty($feed))
{
$again=false;
$con=mysql_connect("localhost","root","");
if(!$con)
{
die ('could not connect' . mysql_error());
}
mysql_select_db("etravels",$con);
$query="Insert into feedback values('$usn','$eid','$u','$l','$w','$dll','$d','$feed')";
if (!mysql_query($query,$con))
{
die ('Could not execute' . mysql_error());
}
mysql_close($con);
echo '<script> location.href="thankyou.php" </script>' ;

}
}
if($again)
{
?>
<table cellpadding="20" cellspacing="5" width="60%" align="center">
<tr>
<td>
<img src="wel.jpg" width="200" height="270"></img>
</td>
<td>
<h2><u><font color="wheat">FEEDBACK</font></u></h2>
<form name="feed" action="feedback.php" method="post">
<?php
echo '<p class="error">';
echo $error;
echo '</p>';
?>
<font color='wheat'>USERNAME :</font><input type="text" name="uid" value="<?php echo $usn; ?>" size="25">
<?php
echo '<p class="error">';
echo $e1;
echo '</p>';
?>
<font color='wheat'>EMAIL_ID :</font>&nbsp;&nbsp <input type="text" name="eid" value="<?php echo $eid; ?>" size="25">
<?php
echo '<p class="error">';
echo $e2;
echo '</p>';
?>
<br>
<font color='wheat'>How do You Rate This Website in terms of :<br>
(Excellent=1; Good=2; Average=3; Unsatisfactory=4)</font>
<br>
<br>
<font color='wheat'>
User Friendliness :</font> 
<input type="text" name="u1" size="1" value="<?php echo $u; ?>">
<br>
<font color='wheat'>
LOOK and FEEL of the website : </font>
<input type="text" name="l1" size="1" value="<?php echo $l; ?>">
<br>
<font color='wheat'>
Working of all LINKS : </font>
<input type="text" name="w1" size="1" value="<?php echo $w; ?>">
<br>
<font color='wheat'>
Quality of our SITE DESIGN : </wheat>
<input type="text" name="d1" size="1" value="<?php echo $d11; ?>">
<br><br>
<font color='wheat'>
COMMENTS:</font>
<br>
<textarea rows="5" cols="30" name="fb">
<?php echo $feed; ?>
</textarea><br>
<?php
echo '<p class="error">';
echo $e3;
echo '</p>';
?>
<br>
&nbsp;&nbsp;
<input type="SUBMIT" name="s2" value ="SUBMIT" class="sub_button">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="RESET" name="r1" value ="CLEAR" class="sub_button">
</form>
</td>
</tr>
</table>

<?php
}
?>
</body>
</html>

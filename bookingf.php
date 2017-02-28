<?php
include('cn.php');
session_start();

$userUsername = $_SESSION['user'];

$sql = "SELECT * FROM members WHERE
	uname = '" . $userUsername . "'";
$result = mysql_query($sql, $cn) or
	die(mysql_error($cn));
$row = mysql_fetch_assoc($result);

?>


<html>
<head>
<title>Booking Page</title>
</head>
<body bgcolor=#940C0F>
<FORM name="Bookform" action="insertrec.php" id="bookform" method="POST" >
<center><img src="seat2.jpg"></center>
<hr>
<H3><font color=blanchedalmond><center>BOOKING FORM</FONT></CENTER></H3>
<center><table border=2  bordercolor="Black" >
 <tr>
	<td><TABLE cellSpacing=15 cellPadding=0 align=Center bgColor="700C0F"  TITLE="Book Your Tickets Here!!">
       
	
	<TR >						
		<td colspan=2 align="middle"><font color="wheat">Origin:</font></td>
		<td colspan=4  align="middle">
		<select name="origin" tabindex=4 required>
			     
			     <option value="">------------SELECT----------</option>
			     <option value="goa">Goa</option>
			     <option value="delhi">Delhi</option>
			     <option value="maharashtra">Maharashtra</option>
			     <option value="ooty">Ooty</option>
			     <option value="shimla">Shimla</option>
			     <option value="rajasthan">Rajasthan</option>
			     <option value="vd">Vaishno Devi</option>
			     <option value="tirupati">Tirupati</option>
			     <option value="meghalaya">Meghalaya</option>
			     <option value="jk">Jammu Kashmir</option>
			     <option value="gt">Golden Temple</option>
			     <option value="khandala">Khandala</option>
		</select>
		
		</td>
	</tr>	

        <TR >						
		<td colspan=2 align="middle"><font color="wheat">Destination:</font></td>
		<td colspan=4  align="middle">
		<select name="dest" tabindex=4 required>
			     
			     <option value="">------------SELECT----------</option>
			     <option value="goa">Goa</option>
			     <option value="delhi">Delhi</option>
			     <option value="maharashtra">Maharashtra</option>
			     <option value="ooty">Ooty</option>
			     <option value="shimla">Shimla</option>
			     <option value="rajasthan">Rajasthan</option>
			     <option value="vd">Vaishno Devi</option>
			     <option value="tirupati">Tirupati</option>
			     <option value="meghalaya">Meghalaya</option>
			     <option value="jk">Jammu Kashmir</option>
			     <option value="gt">Golden Temple</option>
			     <option value="khandala">Khandala</option>
		</select>
		
		</td>
	</tr>	
















</font>





<tr>
<td colspan=9><hr>
</td></tr>


<tr>
<td><b><u><h4><font color="wheat">
ENTER DETAILS:</font>
</b></u></h4>
</td>
</tr>

<tr>
<td><b><font color="wheat">Username:</font><td><input type="text" name="uname" value="<?php echo $row['uname']; ?>"> 
</td>
</tr>


<tr>
<td><b><font color="wheat">Gender:</font><td>
	<select name="gender" tabindex=4 required>
					 
					 <option value="">------------SELECT----------</option>
					 <option value="male">Male</option>
					 <option value="female">Female</option>
	</select>
</td>
</tr>

<tr>
<td>

    <b><font color="wheat">Age: </font> <td><input  type="text" name="age" size="3" value="<?php echo $row['age']; ?>"></td>
</tr>

<tr>
<td><b><font color="wheat">Name:</font><td><input type="text" name="tname" size="20" value="<?php echo $row['fname'].' '.$row['lname']; ?>">
</td>
</tr>

<tr>
<td><b><font color="wheat">Departure Date:</font><td><input type="date" name="ddate" >
</td>
</tr>

<tr>
<td><b><font color="wheat">Arrival Date:</font><td><input type="date" name="adate">
</td>
</tr>


<tr>
<td><b><font color="wheat">Email Id:</font><td><input type="email" name="email">
</td>
</tr>


<td colspan=9><hr>
</td></tr>

</tr>		
<tr>
<td><b><font color="wheat">Creditno:</font><td><input type="text" name="creditno" maxlength="16" value="<?php echo $row['credit_card_no']; ?>">
</td>
</tr>

<tr>
		<td colspan=10><center>
		<INPUT type="submit" value="book"><BR></center></td></center>
	</tr>  


                        

			
</TABLE>
</td>
</tr> 
</table></center></FORM>

</body>
</html>
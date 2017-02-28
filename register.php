<?php
include('cn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration Page</title>
</head>
<body bgcolor="940C0F" onload=reset()>

<form action="commit_register.php"  name="Regform" id="regform" method="post">
<center><img src="etravel1.bmp"></center>
	<hr blanchedalmond><a href=indiantourist.html><font color=wheat>HOME</a>
	<H3><font color="blanchedalmond"><center>REGISTRATION FORM</FONT></CENTER></H3>
	<center>
	<table border=2  bordercolor="Black">
	<Tbody>
	 <tr>
	 <td><TABLE cellSpacing=50 cellPadding=2 align=Center bgColor="700c0F" TITLE="Register yourself with e-travels">
         <TR >						
		<td colspan=2 align="middle"><font color="wheat">First Name :</font></td>
		<td colspan=4  align="middle"><INPUT type="text" size="22" name="userUsername" tabindex=1 ></td>
	</tr>			
	<tr>
		<td colspan=2 align="middle"><font color="wheat">Password:</td><td colspan=4 align="middle"><INPUT type="password" size="22" name="userPassword" tabindex=11><BR><BR></td>
	</tr>
	<tr>
		<td colspan=2 align="middle"><font color="wheat">Confirm Password:</td><td colspan=4 align="middle"><INPUT type="password" size="22" name="userPasswordConfirm" tabindex=12><BR><BR></td>
	</tr>
<TR >						
		<td colspan=2 align="middle"><font color="wheat">Age :</font></td>
		<td colspan=4  align="middle"><INPUT type="text" size="3" name="userAge"  ></td>
	</tr>

<TR >						
		<td colspan=2 align="middle"><font color="wheat">Country:</font></td>
		<td colspan=4  align="middle"><INPUT type="text" size="50" name="userCountry"  ></td>
	</tr>
	
	<br />
        <tr>
		<td colspan=10><center>
		<INPUT type="submit" value="register"><BR></center></td></center>
	</tr>  
	
</TABLE>
</td>
</tr> 
</tbody>
</table></center></FORM>
  

</body>
</html>
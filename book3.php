<?php
session_start();
if(isset($_SESSION['user'])){
			      echo "<font color='wheat'>your session is working:</font> ".$_SESSION['user']."<br />";
}
?>
<?php
    $connection=mysql_connect("localhost","root","");
    if(!$connection){
        die("connection unsuccessful : ".mysql_error());
    }
    
    $db_select=mysql_select_db("etravels2",$connection);
    if(!$db_select){
        die("database selection failed : ".mysql_error());
    }
?>
<html>
<head>
</head>
<body bgcolor=#940C0F onload=Reset()>

<?php
$resultset=mysql_query("select * from members where uname='{$_SESSION['user']}' ");
$xyz=mysql_fetch_array($resultset);
$member_id=$xyz['id'];
$member_fname=$xyz['fname'];
$member_lname=$xyz['lname'];
$member_address=$xyz['address'];
$member_state=$xyz['state'];
$member_pin=$xyz['pin'];
$member_landline=$xyz['landline'];
$member_mobile=$xyz['mobile'];
$member_credit_card_no=$xyz['credit_card_no'];
$member_age=$xyz['age'];
$member_uname=$xyz['uname'];
$member_pwd=$xyz['pwd'];
?>

<FORM name="Bookform"  id="bookform" method=Post action="book3process.php" >
<center><img src="seat2.jpg"></center>
<hr blanchedalmond>
<H3><font color=blanchedalmond><center>BOOKING FORM</FONT></CENTER></H3>
<H3><font color=blanchedalmond><center>HI! <?php echo $xyz['fname']." ".$xyz['lname']; ?></FONT></CENTER></H3>
<center><table border=2  bordercolor="Black" >
 <tr>
	<td><TABLE cellSpacing=15 cellPadding=0 align=Center bgColor="700C0F"  TITLE="Book Your Tickets Here!!">
	<TR> <TD><font color="wheat"><B><U> Registration ID:</U></B>  <?php echo $xyz['id']; ?></font> </Td></TR>
	<TR> <TD><font color="wheat"><B><U> Username:</U></B>  <?php echo $xyz['uname']; ?> </font></Td></TR>
	<TR><td ><b><u><font color="wheat">Origin:</font></u></b>

	<select name="og" onchange=onclk()>
			     
			 <option value=0>------Select------</option>
			<option value="1">Goa</option>
		      <option value="2">Delhi</option>
		      <option value="3">Jammu & Kashmir</option>		
	    	      <option value="4">Maharashtra</option>
			<option value="5">Ooty</option>
			<option value="6">Shimla</option>
			<option value="7">Rajasthan</option>
			<option value="8">Vaishno Devi</option>
			<option value="9">Khandala</option>
			<option value="10">Tirupati</option>
			<option value="11">Meghalaya</option>
			<option value="12">Golden Temple</option>				          
			     
	</select>


	<td><b><u><font color="wheat">Destination :</font>
	<select name="dt" onchange=onclk()>
			     
			  <option value=0>------Select------</option>
			<option value="1">Goa</option>
		      <option value="2">Delhi</option>
		      <option value="3">Jammu & Kashmir</option>		
	    	      <option value="4">Maharashtra</option>
			<option value="5">Ooty</option>
			<option value="6">Shimla</option>
			<option value="7">Rajasthan</option>
			<option value="8">Vaishno Devi</option>
			<option value="9">Khandala</option>
			<option value="10">Tirupati</option>
			<option value="11">Meghalay</option>
			<option value="12">Golden Temple</option>				          
			     		          
			     
	</select>

	</td></tr>
	<tr></tr>
<TR>
	<TD><pre><b><u><font color="wheat">Departure Date:</font></u></b></td>
</tr>

<TR><td><pre><Font color="wheat">
<select name="dte">
			     
			      <option value=0>------Select------</option>
			     <option value="1">1st july</option>
			     <option value="2">2nd july</option>
			     <option value="3">3rd july</option>
			     <option value="4">4th july</option>
			      <option value="5">5th july</option>
			      <option value="6">6th july</option>
			      <option value="7">7th july</option>
			                
			     
			     </select>
</td></tr>

</font>

<tr>
<tr>
	<td><b><u><font color="wheat">RATE:</font></td>
</tr>
	<td><b><font color="wheat">Adults:</font>
	<input type=text name=adult size=5></td>
	<td ><b><font color="wheat">Children:</font>
	<input type=text name=child size=5></td>
</tr>

<tr>
	<td colspan=9><hr>
</td></tr>




<tr>
	<td><b><u><font color="wheat">PAYMENT DETAILS:</font></U></b></TD>
</TR>

<TR>
<TD><B><font color="wheat">Credit Card No:</font></td>
<td><font color="wheat"><?php echo $xyz['credit_card_no']; ?></font></td>
</tr>



<tr>
<td colspan=7><center>
			<INPUT type="submit" name=Book value="BOOK"><BR></center></td>

</tr>
                        

			
</TABLE>
</td>
</tr> 
</table></center></FORM>

</body>
</html>
<?php
    mysql_close($connection);
?>
<?php
session_start();
if(isset($_SESSION['user'])){
			      //echo "<font color='wheat'>your session is working:</font> ".$_SESSION['user']."<br />";
}
?>
<?php
    $connection=mysql_connect("localhost","root","");
    if(!$connection){
        die("connection unsuccessful : ".mysql_error());
    }
    
    $db_select=mysql_select_db("etravels",$connection);
    if(!$db_select){
        die("database selection failed : ".mysql_error());
    }
?>
<html>
<head>
<a href="index.html"><font color="white">Home</font></a>
<script>
function myFunction()
{
alert("You are about to cancel your ticket!!!");
}
</script>
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


<FORM name="CancelTicket"  id="Cancel" method=Post action="delete_process.php" method="POST">
<center><img src="seat2.jpg"></center>
<hr blanchedalmond>
<H3><font color=blanchedalmond><center>CANCELLATION</FONT></CENTER></H3>
<H3><font color=blanchedalmond><center>HI! <?php echo $xyz['fname']." ".$xyz['lname']; ?></FONT></CENTER></H3>
<center><table border=2  bordercolor="Black" >
 <tr>
	<td><TABLE cellSpacing=15 cellPadding=0 align=Center bgColor="700C0F"  TITLE="Cancel Your Tickets!!">
	<TR> <TD><font color="wheat"><B><U> Username:</U></B>  <?php echo $xyz['uname']; ?> </font></Td></TR>
	<TR><td ><b><u><font color="wheat">Origin:</font></u></b>

	<select name="og" onchange=onclk()>
			     
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


	<td><b><u><font color="wheat">Destination :</font>
	<select name="dt" onchange=onclk()>
			     
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
	</td></tr>
	


<tr>
<td colspan=7><center>
			<INPUT type="submit" name=CancelTicket onclick="myFunction()" value="CANCEL"><BR></center></td>

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
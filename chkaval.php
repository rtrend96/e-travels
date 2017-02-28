<?php
session_start();
if(isset($_SESSION['user'])){
			      echo "<font color='wheat'>your session is working: </font>".$_SESSION['user'];
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
<html><head></head>
<body bgcolor="940c0f">
<form name=Bookform id=Bookform ACTION="chkavalprocess.php" METHOD=POST>
<a href=index.html><font color="wheat">HOME</a>
<center><br><br><br><br>
<TABLE cellSpacing=15 cellPadding=0 align=Center bgColor="700C0F"  TITLE="Book Your Tickets Here!!">
<td ><b><u><font color="wheat">Origin:</font></u></b>

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
			<option value="11">Meghalay</option>
			<option value="12">Golden Temple</option>				          
			     
	</select>

<td   ><b><u><font color="wheat">Destination :</font>
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
<tr><td colspan=2><center>
<center><b><u><font color="wheat">Date:</font></u></b></center>
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
<tr></tr>
<tr><td colspan=4><center><input type=SUBMIT name=check value="Check Availability" onclick=check1()></td></tr>

</FORM>
<br />
<tr><td colspan=4><center><a href="book3.php"><font color="wheat"><u>BOOK</u></font></a></center></td></tr>
</table>

</body>
</html>
<?php
    mysql_close($connection);
?>
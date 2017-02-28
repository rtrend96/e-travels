<html>
<head>

</head>
<body bgcolor="940c0f">
<?php
$fname="";
$lname="";
$add="";
$state="";
$pin="";
$land="";
$mob="";
$cardno="";
$age="";
$uname="";
$pwd="";
$pwdc="";
$error="";
$e1="";
$e2="";
$e3="";
$again=true;

if (isset($_POST['s2']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$add=$_POST['add'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$land=$_POST['land'];
$mob=$_POST['mob'];
$mob=$_POST['cardno'];
$mob=$_POST['age'];
$mob=$_POST['uname'];
$mob=$_POST['pwd'];
$mob=$_POST['pwdc'];
$d=date("y-m-d");
if (empty($fname) && empty($lname) && empty($add) && empty($state)&& empty($pin)&& empty($land)&& empty($mob)&& empty($cardno)&& empty($age)&& empty($uname)&& empty($pwd)&& empty($pwdc))
{
$error="All fields are mandatory";
$again=true;
}

if (!empty($fname) && !empty($lname) && !empty($add) && !empty($state)&& !empty($pin)&& !empty($land)&& !empty($mob)&& !empty($cardno)&& !empty($age)&& !empty($uname)&& !empty($pwd)&& !empty($pwdc))
{
$again=false;
$con=mysql_connect("localhost","root","");
if(!$con)
{
die ('could not connect' . mysql_error());
}
mysql_select_db("etravels",$con);
$query="INSERT INTO members (
fname,lname,address,state,pin,landline,mobile,credit_card_no,age,uname,pwd
) VALUES(
'{$fname}','{$lname}','{$add}','{$state}',{$pin},{$land},{$mob},{$cardno},{$age},'{$uname}','{$pwd}'
)";
if (!mysql_query($query,$con))
{
die ('Could not execute' . mysql_error());
}
mysql_close($con);


}
}
if($again)
{
?>

	<FORM name="Regform"  id="regform" method=POST action="regprocess.php">
<?php
echo '<p class="error">';
echo $error;
echo '</p>';
?>
	<center><img src="etravel1.bmp"></center>
	<hr blanchedalmond><a href=indiantourist.html><font color=wheat>HOME</a>
	<H3><font color="blanchedalmond"><center>REGISTRATION FORM</FONT></CENTER></H3>
	<center>
	<table border=2  bordercolor="Black">
	<Tbody>
	 <tr>
	 <td><TABLE cellSpacing=30 cellPadding=0 align=Center bgColor="700C0F" TITLE="Register yourself with e-travels">
	 <TR >						
		<td colspan=2 align="middle"><font color="wheat">First Name :</font></td>
		<td colspan=4  align="middle"><INPUT type=text size=22 name=fname tabindex=1 ></td>
	</tr>			

	<tr>
		<td colspan=2 align="middle"><font color="wheat">Last Name :</font></td>
		<td colspan=4 align="middle"><INPUT type=text size=22 name=lname tabindex=2></td>
	</tr>

	<tr>
		<td colspan=2 align="middle"><font color="wheat">Address:</font></td>
		<td colspan=4 align="middle"><INPUT type="textarea" rows=4 cols=18 name=add tabindex=3></td>
	</tr>

	<tr>
		<td colspan=2 align="middle"><font color="wheat">State:</font></td><td colspan=4 align="middle">
		<select name="state" tabindex=4 >
			     
			     <option value="D">------------SELECT----------</option>
			     <option value="Assam">Assam</option>
			     <option value="Andhra Pradesh">Andhra Pradesh</option>
			     <option value="Bihar">Bihar</option>
			     <option value="Chhatisgarh">Chhatisgarh</option>
			     <option value="Goa">Goa</option>
			     <option value="Gujrat">Gujrat</option>
			     <option value="Hyderabad">Hyderabad</option>
			     <option value="Haryana">Haryana</option>
			     <option value="Himachal Pradesh">Himachal Pradesh</option>
			     <option value="Jammu kashmir">Jammu kashmir</option>
			     <option value="Jharkhand">Jharkhand</option>
			     <option value="Karnatak">Karnatak</option>
			     <option value="Kerala">Kerala</option>
			     <option value="Madhya Pradesh">Madhya Pradesh</option>
			     <option value="Maharashtra">Maharashtra</option>
			     <option value="Manipur">Manipur</option>
			     <option value="Meghalay">Meghalay</option>
			     <option value="Mizoram">Mizoram</option>
			     <option value="Nagaland">Nagaland</option>
			     <option value="Orissa">Orissa</option>
			     <option value="Punjab">Punjab</option>
			     <option value="Sikkim">Sikkim</option>
			     <option value="Rajshthan">Rajshthan</option>
			     <option value="Tamilnadu">Tamilnadu</option>
			     <option value="Tripura">Tripura</option>
		             <option value="Uttarakhand">Uttarakhand</option>
			     <option value="Uttar Pradesh">Uttar Pradesh</option>
			     <option value="West Bengal">West Bengal</option>
			     </select>
		</td>
	</tr>

	<tr>
		<td colspan=2 align="middle"><font color="wheat">Pin :</font></td><td colspan=4 align="middle"><INPUT type=text size=22 name=pin tabindex=5></td>
	</tr>

	<tr>
		<td colspan=2 align="middle"><font color="wheat">
		Landline No:</font></td>
		<td colspan=4 align="middle"><INPUT type=number size=22 name=land tabindex=6></td>
	</tr>

	<tr>
		<td colspan=2 align="middle"><font color="wheat">
		Mobile:</td><td colspan=4 align="middle"><INPUT type=number size=22 name=mob tabindex=7><BR><BR></td>
	</tr>
	
	<tr>
		<td colspan=2 align="middle"><font color="wheat">
		Credit Card No:</font></td>
		<td colspan=4 align="middle"><INPUT type=number size=22 name=cardno tabindex=6></td>
	</tr>
	
	<tr>
		<td colspan=2 align="middle"><font color="wheat">
		Age:</font></td>
		<td colspan=4 align="middle"><INPUT type=number size=22 name=age tabindex=6></td>
	</tr>
	
	<tr>
		<td colspan=2 align="middle"><font color="wheat">
		User:</td><td colspan=4 align="middle"><INPUT type=text size=22 name=uname tabindex=10><BR><BR></td>
	</tr>

	<tr>
		<td colspan=2 align="middle"><font color="wheat">Password:</td><td colspan=4 align="middle"><INPUT type=password size=22 name=pwd tabindex=11><BR><BR></td>
	</tr>

	<tr>
		<td colspan=2 align="middle"><font color="wheat">Confirm Password:</td><td colspan=4 align="middle"><INPUT type=password size=22 name=pwdc tabindex=12><BR><BR></td>
	</tr>

	
	<tr>
		<td colspan=10>
		<hr width=100% size=2 color=black></td>
	</tr>

	<tr>
		<td colspan=10><center>
		<input type="SUBMIT" name="s2" value ="SUBMIT" class="sub_button">
		<INPUT type="reset" value=Reset  name=res ><BR></center></td></center>
	</tr>                        			
</TABLE>
</td>
</tr> 
</tbody>
</table></center></FORM>
 


<?php
}
?>
</body>
</html>

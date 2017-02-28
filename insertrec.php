<html>
<head>
<title>Display</title>
</head>
<body bgcolor="940c0f">
<a href="indiantourist.html"><font color="wheat" size="6">Home</font></a><br>
<center>
<?php



$connection=mysql_connect("localhost","root","");
    if(!$connection){
        die("connection unsuccessful : ".mysql_error());
    }
    
    $db_select=mysql_select_db("etravels",$connection);
    if(!$db_select){
        die("database selection failed : ".mysql_error());
    }
$sql="Select farea from busdetails where origin ='".$_POST[origin]."' and dest='".$_POST[dest]."'";
 $resultset=mysql_query($sql);
        //echo $resultset;
        $x=mysql_fetch_array($resultset);
       
 $sql="INSERT INTO book (totamt, origin, dest,name,age,gender,creditno,uname,adate,ddate,email,id)
VALUES
($x[farea],'$_POST[origin]','$_POST[dest]','$_POST[tname]',$_POST[age],'$_POST[gender]',$_POST[creditno],'$_POST[uname]','$_POST[adate]','$_POST[ddate]','$_POST[email]',0)";
mysql_query($sql);
echo "<font color='wheat' size='7'> Booking Done Successfully!!!!</font>";

mysql_close($connection);
?>
<br>
<a href="dispsin.html"><font color="wheat" size="6">View Ticket</font></a><br>
<a href="bookingf.php"><font color="wheat" size="6">Book Again</font></a><br>
<a href="logout.php"><font color="wheat" size="6">Logout</font></a>


</center>
</body>
</head>
</html>

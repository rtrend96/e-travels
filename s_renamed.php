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
$member_mobile=$xyz['mobile'];
?>
<html>
    <head>
        <title></title>
<a href="indiantourist.html"><font color="wheat">Home</font></a>
<a href="logout.php"><font color="wheat"><b>Logout</b></font></a>
<link rel="stylesheet" type="text/css" href="main.css" />
<style>
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}




table,td,th
{
border:1px solid black;
}
table
{
width:100%;
}
th
{
height:50px;
}
</style>

    </head>
    
    <body bgcolor=#940C0F>


<center>

<?php
       
       
      
       
      
      
       
     
echo "<table border='3'>
<tr>

<th bgcolor='wheat'>Name</th>



<th bgcolor='wheat'>Credit No</th>
<th bgcolor='wheat'>Arrival Date</th>

<th bgcolor='wheat'>Destination Date</th>


<th bgcolor='wheat'>Total Amount</th>

</tr>";
$resultset=mysql_query("select * from book where uname='".$member_uname."'");
while($row = mysql_fetch_array($resultset))
  {
  echo "<tr>";
  echo "<td bgcolor='wheat'>" . $row['name'] . "</td>";
  
  echo "<td bgcolor='wheat'>" . $row['creditno'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['adate'] . "</td>";
  echo "<td bgcolor='wheat'>" . $row['ddate'] . "</td>";
   
  echo "<td bgcolor='wheat'>" . $row['totamt'] . "</td>";
  
  
  
  echo "</tr>";
  }
echo "</table>";

?>
</center>
</body>
</html>
<?php
    mysql_close($connection);
?>
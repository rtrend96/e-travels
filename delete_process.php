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
	$sql = "delete from book where origin = '".$_POST['og']."' and dest = '".$_POST['dt']."' and uname='".$_SESSION['user']."'";
	
	mysql_query($sql);
?>
<html>
    <head>
        <title></title>
<a href="indiantourist.html"><font color="wheat">Home</font></a>
<a href="Logout.php"><font color="wheat"><b>Logout</b></font></a>
<link rel="stylesheet" type="text/css" href="main.css" />
<div id="content">
<h1>Cancellation Details:</h1>
    </head>
    
    <body bgcolor=#940C0F>
       
       <?php
$resultset=mysql_query("select * from members where uname='{$_SESSION['user']}' ");
$xyz=mysql_fetch_array($resultset);
$member_id=$xyz['uname'];
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

 <?php
       $id=
       $origin=$_POST['og'];
       $destination=$_POST['dt'];
       

 ?>

<?php
       
       $resultset=mysql_query("select id from trips where origin={$origin} AND destination={$destination}");
      // echo $resultset."<br />";
       while($xyz=mysql_fetch_array($resultset)){
      //  echo $xyz['id']."<br />";
        $tripid=$xyz['id'];
       }
       
       
      ?>









      
      
      
       <?php
       $query="Delete from bookings WHERE member_id={$member_id} AND trip_id={$tripid}";

mysql_query($query);
       ?>
       
       <?php
       echo "Hi ".$member_fname." ".$member_lname." your booking cancellation was successful<br />";
       echo  "Your Memberid is:                      ". $member_id."<br />";
       echo "Your Card Details are:                  ". $member_credit_card_no."<br />";
       
       echo "Mobile Number:                          ". $member_mobile."<br/>";
       
       ?>
      </div>  
    </body>
</html>
<?php
    mysql_close($connection);
?>
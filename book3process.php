
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
        <title></title>
<a href="indiantourist.html"><font color="wheat">Home</font></a>
<a href="Logout.php"><font color="wheat"><b>Logout</b></font></a>
<link rel="stylesheet" type="text/css" href="main.css" />
<div id="content"> 
<h1>Your Ticket</h1>
    </head>
    
    <body bgcolor=#940C0F>
       
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

       <?php
       $id=
       $origin=$_POST['og'];
       $destination=$_POST['dt'];
       $date=$_POST['dte'];
       $adults=$_POST['adult'];
       $chilren=$_POST['child'];
       $total_booked=$adults+$chilren;
       ?>
      
      
      
       
       <?php
       
       $resultset=mysql_query("select * from trips where origin={$origin} AND destination={$destination}");
       //echo $resultset."<br />";
       while($xyz=mysql_fetch_array($resultset)){
        //echo $xyz['cost_adult']." ".$xyz['cost_child']."<br />";
       $adult_total_cost=($xyz['cost_adult']*$adults);
       $children_total_cost=($xyz['cost_child']*$chilren);
       $overall_cost=$adult_total_cost+$children_total_cost;
       //echo $overall_cost;
       }
       
       
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
       
       $resultset=mysql_query("select place from locations where id={$origin}");
       $xyz=mysql_fetch_array($resultset);
       $o=$xyz['place'];
       
      ?>
      <?php
       
       $resultset=mysql_query("select place from locations where id={$destination}");
       $xyz=mysql_fetch_array($resultset);
       $d=$xyz['place'];
       
      ?>
      
      
       <?php
       $query="INSERT INTO bookings (
member_id,date_id,totaltckts,total_amount,trip_id
) VALUES(
'{$member_id}','{$date}','{$total_booked}','{$overall_cost}','{$tripid}'
)";

mysql_query($query);
       ?>
      
       <?php
       echo "Hi ".$member_fname." ".$member_lname." your booking was successful<br />";
       echo  "Your Memberid is:                      ".$member_id."<br />";
       echo "Your Card Details are:                  ".$member_credit_card_no."<br />";
       echo "Mobile Number:                          ".$member_mobile."<br/>";
       echo "Will Leave From:                        ".$o."<br />";
       echo "Will Reach:                             ".$d."<br />";
       echo "Date:                                   ".$date."<br />";
       echo "Number Of Adults:                       ".$adults."<br />";
       echo "Number Of Children:                     ".$chilren."<br />";
       echo "Total Tickets Booked:                   ".$total_booked."<br />";
       echo "Total Payment To Be Made:               ". $overall_cost;
       ?>
      </div>
        
    </body>

</html>
<?php
    mysql_close($connection);
?>
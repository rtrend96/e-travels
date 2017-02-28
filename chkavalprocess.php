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
<link rel="stylesheet" type="text/css" href="main.css" />

 <a href="index.html"><font color="wheat"> Home</font></a> 
 <a href="book3.php"><font color="wheat">Book</font></a>
    </head>
    <body bgcolor="940c0f">
      <div id="content">   
       <h1>Trip Details</h1> 
     
        
         <?php
       $ogn=$_POST['og'];
       $dnn=$_POST['dt'];
       $dt=$_POST['dte'];
       
       ?>
       
              
       <?php
        $resultset=mysql_query("select * from locations where id={$ogn}");
        $xyz=mysql_fetch_array($resultset);
        echo "Origin: ".$xyz['place']."<br />";       
       ?>
       
       <?php
        $resultset=mysql_query("select * from locations where id={$dnn}");
        $xyz=mysql_fetch_array($resultset);
        echo "Destination: ".$xyz['place']."<br />";       
       ?>
       
       <?php //find date_id
       switch($dt){
            
             case 0:
                 die("Please select a valid date!");
                break;
            
            case 1:
                echo "Selected date is 1st July 2013<br />";
                break;
            case 2:
                echo "Selected date is 2nd July 2013<br />";
                break;
            case 3:
                echo "Selected date is 3rd July 2013<br />";
                break;
            case 4:
                echo "Selected date is 4th July 2013<br />";
                break;
            case 5:
                echo "Selected date is 5th July 2013<br />";
                break;
            case 6:
                echo "Selected date is 6th July 2013<br />";
                break;
            case 7:
                echo "Selected date is 7th July 2013<br />";
                break;
        }
       
       
       ?>

       <?php
       //find trip id
       
       $resultset=mysql_query("select id from trips where origin={$ogn} AND destination={$dnn}");
      while($xyz=mysql_fetch_array($resultset)){
        echo "Your trip id is ".$xyz['id']."<br />";
        $tripid=$xyz['id'];
       }
       
       
      ?>
      </div>
      <?php
      //find id from bookings having booked for this trip
 $array_id=array();
 $i=0;
        
      $resultset=mysql_query("select * from bookings where trip_id={$tripid} AND date_id={$dt}");
      //echo $resultset."<br />";
if(!$resultset){
      //do nothing
         }
     while($xyz=mysql_fetch_array($resultset)){
    //   echo $xyz['id']." ";
       $array_id[$i]=$xyz['id'];
       $i++;
    //   echo"<br />";
       

       
    
     }
   // print_r($array_id);
   // echo "<br />";
//-----------------------------------------------------find total tickts booked by ids found above---------------------------------
$array_id_count=count($array_id);
$array_totaltckts=array();

for($j=0;$j<$array_id_count;$j++){
$resultset2=mysql_query("select * from bookings where id={$array_id[$j]}");
$abc=mysql_fetch_array($resultset2);
$array_totaltckts[$j]=$abc['totaltckts'];
      
      }
     // print_r($array_totaltckts);
     // echo"<br/>";
       $total_tickets_booked=array_sum($array_totaltckts);
       $total_tickets_available=(30-$total_tickets_booked);
      //echo $total_tickets_available;
      ?>
      

 
        
        
          </body>
  
</html>
<?php
    mysql_close($connection);
?>
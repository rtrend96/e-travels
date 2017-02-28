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
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    
    <body bgcolor="940C0F">
    
       <!-- <pre><?php print_r($_POST); ?></pre> -->
       <?php
       $first_name=$_POST['fname'];
       $last_name=$_POST['lname'];
       $address=$_POST['add'];
       $state=$_POST['state'];
       $pincode=$_POST['pin'];
       $landline=$_POST['land'];
       $mobile=$_POST['mob'];
       $card_no=$_POST['cardno'];
       $age=$_POST['age'];
       $username=$_POST['uname'];
       $password=$_POST['pwd'];
       $password_confirm=$_POST['pwdc'];
       
       ?>
       
       <?php
        
       $query="INSERT INTO members (
fname,lname,address,state,pin,landline,mobile,credit_card_no,age,uname,pwd
) VALUES(
'{$first_name}','{$last_name}','{$address}','{$state}',{$pincode},{$landline},{$mobile},{$card_no},{$age},'{$username}','{$password}'
)";

mysql_query($query);
    ?>
       <div id="content">
      <?php
       echo "HELLO {$first_name} {$last_name} you have been successfully registered!<br />";
       
       ?>
	   <a href='login.php'>Login</a></br>
       </div>
    </body>
</html>
<?php
    mysql_close($connection);
?>
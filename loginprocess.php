<?php
session_start();
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
        <title></title>
    </head>
    
    <body bgcolor="940c0f">
    
    <?php
    
    ?>
    
    

        <?php
       $username=$_POST['un'];
     $password=$_POST['pw'];
        ?>
        
        <?php
        $resultset=mysql_query("select * from members where uname='{$username}' AND pwd='{$password}' ");
        //echo $resultset;
        $x=mysql_fetch_array($resultset);
        if($x==0){
            
                 $resultset=mysql_query("select * from members where uname='{$username}' ");
        //echo $resultset;
        $y=mysql_fetch_array($resultset);
        //print_r($y);
            if($y==0){
                echo "<font size='4' color='wheat'>enter valid username and password</font>"; //username validation
            }else{
                echo "<font size='4' color='wheat'>password invalid </font>";
            }
            //echo "if loop";
        }else{
            $_SESSION['user']="$username";
			//echo "else loop";

            echo '<script> location.href="profile.php" </script>' ;
        }
        
        
         ?>
         
    </body>
</html>
<?php
    mysql_close($connection);
?>
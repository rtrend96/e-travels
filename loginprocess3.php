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
    
    <body>
    
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
                echo "enter valid username and password"; //username validation
            }else{
                echo "password invalid";
            }
            
        }else{
            $_SESSION['user']="$username";

            echo '<script> location.href="show.php" </script>' ;
        }
        
        
         ?>
         
    </body>
</html>
<?php
    mysql_close($connection);
?>
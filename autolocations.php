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
       for($y=1; $y<=12; $y++){
        $x=1;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=2;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=3;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=4;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=5;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=6;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=7;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=8;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=9;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=10;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=11;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}

 for($y=1; $y<=12; $y++){
        $x=12;
        $query="INSERT INTO trips (origin,destination,cost_adult,cost_child) VALUES('{$x}','{$y}',5000,2500)";
        mysql_query($query);
}
       ?>
    </body>
</html>
<?php
    mysql_close($connection);
?>
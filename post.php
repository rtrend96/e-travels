<?php 
   $conn=mysql_connect("localhost","root","");
   $db= mysql_select_db("abc",$conn);
?>




<?php
   $name =$_POST['user'];
   $company= $_POST['comp'];
   # echo "my name is $name<br/> and im the ceo of my company {$company};
   $sql="INSERT into bbc values('$name','$company')";
   $qury=mysql_query($sql);
   if(!$qury)
      echo mysql_error();
   else 
  {    echo "successfully inserted ";

      echo"<a href='show.php'>View Result</a>";
  }
?>
<?php 
 
  include_once("db.php"); 
  session_start();
 
?>
 
<?php
 
     $uname = $_POST['name'];
     $pass = $_POST['pwd'];
 
     $sql = "SELECT count(*) FROM phplogin WHERE(
     username='".$uname."' and  password='".$pass."')";
 
 
#     SELECT count(*) FROM phplogin WHERE(
#     username='$uname' and  password='$pass');
 
      $qury = mysql_query($sql);
 
      $result = mysql_fetch_array($qury);
 
      if($result[0]>0)
      {
        echo "Successful Login!";
        $_SESSION['userName'] = $uname;
        echo "<br />Welcome ".$_SESSION['userName']."!";
        echo "<br /><a href='signupform.php'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
        echo "<br /><a href='logout.php'>LogOut</a>";
      }
      else
      {
        echo "Login Failed";
        echo "<br /><a href='signupform.php'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
      }
?>
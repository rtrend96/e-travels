<html>
<head>
</head>
<body bgcolor="#940C0F">

<center>
<?php
include('cn.php');

// you have to open the session first
session_start();

// remove all the variables in the session
session_unset();

// destroy the session
session_destroy();

echo '<font color="wheat" size="6">You have been successfully logged out.<br/>
      Return to <a href="login.php"><font color="wheat" size="6">login screen</font></a>.<br/>
      Or  <a href="index.html"><font color="wheat" size="6"> Home </font></a></font>  ';
?>
</center>
</body>
</html>
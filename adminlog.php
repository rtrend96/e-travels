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
<HTML>
<head>  
<LINK REL=STYLESHEET HREF=css1.CSS TYPE=TEXT/CSS>

</head>
<body bgcolor="#940C0F">



<img src=etravel1.bmp>
<hr color=blanchedalmond>
<a href=indiantourist.html><font color=wheat>HOME</a>
<pre>
<h2><font color=blanchedalmond>                                     
                                          LOGIN</h2></font></pre>

 <TABLE class=t cellSpacing=5 cellPadding=7 align=right border=1 TITLE="SIGN IN WITH YOUR etravels ACCOUNT">
			
	<TR>
	<TD borderColor=#e8eefa align=middle bgColor="#700C0F">
			<font color="wheat">
			<FORM name="loginform"  id="loginform" method=Post action="loginprocess3.php">
							
			<b>Username : <INPUT type=text size=18 name=un><BR><BR></b>
			<b>Password : <INPUT type=password size=18 name=pw><BR><BR></b>
			<INPUT type="submit" value="SIGN IN" onCLICK=log()><BR><hr>
                        </FORM>
          
	</TR>
			
</TABLE>



<br>
<img src="bus1.jpg"> 
<Marquee><h2> <font color=blanchedalmond> Why To Be In line, When You Can Book Your Tickets ONLINE...</Font> </marquee>

</body>
</html>
<?php
    mysql_close($connection);
?>
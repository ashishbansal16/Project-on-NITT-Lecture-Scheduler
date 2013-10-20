<html>
<head>
<title>Lecture Scheduler</title>
<link href="Css/home2.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color:#17171A">
<div id="logo">
<img src="Images/Nitt-logo.png"/>
</div>
<div id="homepage">
<center>
<img src="Images/cooltext1243513370.png"/>
</center>
</div>
<div id="container" style="background:none;">
<center>
<div class="login">
<font face="Ebrima" size="+1">
<?php
				
				
				if(isset($_SESSION['success']))
				{
				echo "Hi  ".$_SESSION['user']; 
					
					?>
                    
                    <a href="logout.php"><button style="float:right; margin-left:0px;">LOGOUT</button></a>
                    <?php
				}
				else
				{
					if(isset($_SESSION['fail']))
 {
	 echo "Wrong Username or Password";
 }			
					
                ?>    
               
<p align="center"><font face="Ebrima" size="+2" color="#999999">------------ Login ------------</font></p>
<form method="post" action="checklogin.php">

<label for="username">Username:</label>
<input type="text" id="username" name="username" required><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Login" name="submit">
</form>
</font>
<?php
				}
				?>
               
</div>
</center>
</div>
<div id="footer">
<ul class="bot_menu">
   
   <li><a href="https://www.nitt.edu/home/" target="_blank">NITT Home Page</a></li>
   <li style="padding-left:20px;"><a href="https://vayu.nitt.edu/" target="_blank">Webmail</a></li>
    <li style="padding-left:20px;"><a href="http://www.connectnit.org/index.php" target="_blank">Connect NIT</a></li>
    <li style="padding-left:20px;"><a href="http://www.nitt.edu/prm/ShowResult.htm" target="_blank">Results</a></li>
     <li style="padding-left:20px;"><a href="http://recal.nitt.edu/" target="_blank">Alumini</a></li>
   </ul>
</div>
</body>
</html>
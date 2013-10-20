<?php
include('databaseconnect.php');
session_start();
?>
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
<div id="container">
<center>
<?php
				
				
				if(isset($_SESSION['success']))
				{
				echo "<font face='Ebrima' color='#EB4141'>Hi  ".$_SESSION['user']."</font>"; 
					
					?>
                    
                    <a href="logout.php"><button>Logout</button></a>
                    <?php
				}
				else
				{
					if(isset($_SESSION['fail']))
 {
	 echo "Wrong Username or Password";
 }			
				}
                ?>   
<div class="login">
<font face="Ebrima" size="+1">
 
               
<p align="center"><font face="Ebrima" size="+2" color="#999999">------------ Search ------------</font></p>
<form method="post" action="faculty.php">

<label for="username">Faculty Name:</label>
<input type="text" id="name" name="name" required><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="search" name="submit">
</form>
</font>

               
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

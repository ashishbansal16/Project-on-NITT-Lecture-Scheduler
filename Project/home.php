<?php
include('databaseconnect.php');
?>
<html>
<head>
<title>Lecture Scheduler</title>
<link href="home.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:#17171A">
<div id="homepage">
<img src="4.png"/>
</div>

<div id="index">
<div class="login">
<font face="Ebrima" size="+1" color="#CCCCCC">
<?php
				if(isset($_SESSION['pp']))
				{
					unset($_SESSION['success']);
				}
				
				if(isset($_SESSION['success']))
				{
				echo "Hi  ".$_SESSION['user']; 
					
					?>
                    
                    <a href="reg/logout.php"><button style="float:right; margin-left:0px;">LOGOUT</button></a>
                    <?php
				}
				else
				{
					if(isset($_SESSION['fail']))
 {
	 echo "Wrong Username or Password";
 }			
					
                ?>    
								
<form method="post" action="checklogin.php">
<label for="username">Username:</label>
<input type="text" id="username" name="username" required><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Login">
</form>
</font>
<?php
				}
				?>
                </div>
                </div>

<div class="footer">

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
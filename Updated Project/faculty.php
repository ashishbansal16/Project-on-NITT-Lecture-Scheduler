<?php
include('databaseconnect.php');
session_start();
if(isset($_POST['submit']))
				{
					
					$name=$_POST['name'];
					$num=mysql_query("select * from faculty where name='$name'");
					$w=mysql_num_rows($num);
					if($w>0)
					{
						$row=mysql_fetch_array($num);
					}
?>
<html>
<head>
<title>Lecture Scheduler</title>
<link href="Css/faculty.css" rel="stylesheet" type="text/css">
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
<div class="image">
<img src="Images/174_avr (1).jpg"/>
</div>
<div id="context">
<font face="Ebrima" size="+1" color="#CCCCCC">

<p style="padding-left:10px; color:#FC0;"><?php echo $row['name'];?><br>
<?php echo $row['Designation'];?><br>
<?php echo $row['department'];?><br>
<?php echo $row['college'];?><br><br><br>
Contact No:<font color="#FFFFFF"> <?php echo $row['contact_no'];?></font><br>
Email: <font color="#FFFFFF"><?php echo $row['email'];?></font><br>
Qualifications: <font color="#FFFFFF"><?php echo $row['about'];?></font><br>
</p>
</font>
<a href="table.php"><input type="submit" value="Click Here For Schedule"></a>
                </div>
     <?php

				}
?>       
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

<?php
include('databaseconnect.php');
session_start();
if(isset($_POST['submit']))
				{
					
				$name=$_SESSION['name'];
					$num=mysql_query("select * from schedule where name='$name'")or die(mysql_error());
					$w=mysql_num_rows($num);
					
					
				}
?>

<html>
<head>
<title>Lecture Scheduler</title>
<link href="Css/table.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:#17171A">
<div id="logo">
<a href="https://www.nitt.edu/home/" target="_blank"><img src="Images/Nitt-logo.png"/></a>
</div>
<div id="homepage">
<center>
<img src="Images/cooltext1243513370.png"/>
</center>
</div>

<div id="container">

<font face="Ebrima" size="+1" color="#CCCCCC">
<div class="table">
<a href="check.php"><button>Home</button></a>
<h3><font face="Ebrima" size="+2" color="#acd6ef">Schedule</font></h3>
<table class="schedule" id="lb">
<tr><th>Days</th>
<th>MCA I Year</th>
<th>MCA II Year</th>
<th>MCA III Year</th>
</tr>
<?php

for($i=0;$i<$w;$i++)
{



echo '
<tr><th>'.mysql_result($num,$i,'days').'</th><td>'.mysql_result($num,$i,'first_year').'</td><td>'.mysql_result($num,$i,'second_year').'</td><td>'.mysql_result($num,$i,'third_year').'</td></tr>';


}
?>

</table>
</font>
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

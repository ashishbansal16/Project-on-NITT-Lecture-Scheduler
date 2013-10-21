<?php
session_start();
if (isset($_POST['submit']))
{
include("databaseconnect.php");
$unm=$_POST['username'];
$pass=$_POST['password'];
$row="select * from login where username='$unm' AND password='$pass'";
$i=mysql_query($row);
$n=mysql_num_rows($i);
if($n>0)
{
	$_SESSION['success']=true;
	$_SESSION['user']=$unm;
	header('location:check.php');
}
else
{
	$_SESSION['fail']=true;
	header('location:home2.php');
}
}

?>
<?php
session_start();
if (isset($_POST['submit']))
{
include("databaseconnect.php");
$unm=$_POST['username'];
$pass=$_POST['password'];
$row="select * from login";
$i=mysql_query($row);
$n=mysql_num_rows($i);
$f=0;
?>

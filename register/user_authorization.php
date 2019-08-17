<?php
require'db_conn.php';
session_start();

$uname=$_SESSION["un1"];
$pass=$_SESSION["ps1"];

$q1=mysql_query("select * from admin");
$row=mysql_fetch_assoc($q1);
$un=$row["uname"];
$ps=$row["pass"];


if($uname!=$un && $pass!=$ps && $uname=="")
{

   echo"<script>window.location='session_expire.php';</script>";
}

$nowt=time();

if($nowt>$_SESSION["expt"])
{
  session_destroy();
  echo"<script>window.location='session_expire.php';</script>";
}
else
{
  $_SESSION["expt"]=$nowt+10*60;
}



?>
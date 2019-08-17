<?php
require'db_conn.php';

$uid=$_POST["uid"];
$pass=$_POST["ps"];
$utp=$_POST["utp"];


if($utp=="admin")
{
$q1=mysql_query("select * from admin");
$row=mysql_fetch_assoc($q1);
$un=$row["uname"];
$ps=$row["pass"];
if($un==$uid && $pass==$ps)
{
    session_start();
  $_SESSION["un1"]=$uname;
   $_SESSION["ps1"]=$pass;
  $_SESSION["st"]=time();
 $_SESSION["expt"]=$_SESSION["st"]+20;

   echo"<script>window.location='admin/adminhome.php';</script>";
}
else
{
  echo"Invalid username or password";
}
}
else if($utp=="register")
{
$q2=mysql_query("select * from register Where email='$uid'");
$row=mysql_fetch_assoc($q2);
$uid1=$row["email"];
$ps1=$row["ps"];
$id=$row["id"];

if($uid==$uid1 && $pass==$ps1)
{

  session_start();
  $_SESSION["un1"]=$uid;
   $_SESSION["ps1"]=$pass;
  $_SESSION["id"]=$id;
  $_SESSION["st"]=time();
 $_SESSION["expt"]=$_SESSION["st"]+20;

   echo"<script>window.location='register/adminhome.php';</script>";
}
else
{
  echo"Invalid username or password";
}
}




?>
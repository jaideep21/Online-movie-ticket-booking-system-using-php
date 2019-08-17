<?php
require'db_conn.php';

if($_POST["cid1"])
{
  $cname=$_POST["cid1"];

  $q1=mysql_query("select*from register where ct='$cname'");
  echo"<ul>";
while($rows=mysql_fetch_assoc($q1))
{
  $nc=$rows['nc'];
    $uid=$rows['id'];
     $ns=$rows['ns'];
  echo"<li><a href='view_list.php?cn=$nc&uid=$uid&city=$cname&ns=$ns'  style='float:left;font-family:arial;font-size:25px;font-weight:bold;'>$nc</a></li><br>";

}
echo"</ul>";
}

?>
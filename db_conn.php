<?php
 $dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="otbs";
$conn=mysql_connect("$dbhost","$dbuser","$dbpass") or die ("could not connect to mysql");
$db=mysql_select_db($dbname,$conn);
?>
<?php
echo"
<html>
<head>
<title>Add City</title>
</head>
<body topmargin='100'>
<form method='POST' name='login'>
<center>
<h2>Add City</h2>
<table border='1' width='600' cellpadding='5' cellspacing='0' style='font-family:arial;color:red;font-size:15px;font-weight:bold;'>
<tr><td>Enter City Name<td><input type='text' name='city' style='width:270px;height:35px;border-radius:10px;background:pink;'>
<td><input type='submit' name='ct' value='Add' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'></td></tr>
";
require'db_conn.php';

if(isset($_POST["ct"]))
{

$city=$_POST["city"];


 $q1=mysql_query("insert into city values('$city','')");

  if($q1)
  { echo"<script>alert('Added successfully');</script>";
  }

else
{
  echo"<script>alert('Sorry ! try again');</script>";
}

}

echo"
</table>  <br>";

 $q1=mysql_query("select * from city order by id desc");
 echo"<center><table border='1' cellpadding='5' cellspacing='0' width='600' >
 <tr height='40' bgcolor='red'>
 <th>#<th>City Name</th></tr>";
       while($rows=mysql_fetch_assoc($q1))
   {
   $cname=$rows["cname"];
    $id=$rows["id"];
    echo"<tr><th><input type='checkbox' name='chk[]' value='$id'><td>$cname</td></tr>";
   }

echo"
<tr><th colspan='2'><input type='submit' name='del' value='Remove' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'>

</table>

</center>
</body>
</html>
";

if(isset($_POST["del"]))
{
  for($i=0;$i<count($_POST["chk"]);$i++)
  {
    if($_POST["chk"][$i]!="")
    {
      $delid=$_POST["chk"][$i];
      $q1=mysql_query("delete from city where id='$delid'");

      if($q1)
      {
        echo"<script>alert('Deleted successfully....');</script>";
        echo"<script>window.location='add_city.php';</script>";
      }
      else
      {
        echo"<script>alert('Sorry ! try again....');</script>";
      }

    }
  }
}

?>
<?php

   require'db_conn.php';
   session_start();
  $uid=$_SESSION["id"];

 echo"
<html>
<body>
<form method='POST' name='emp'>
<center>
<input type='date' name='dt'>
&nbsp &nbsp <input type='submit' name='ser' style='width:80px;height:32px;'>
";
if(isset($_POST["ser"]))
{
  $dt=$_POST["dt"];
  $q1=mysql_query("select * from booking where uid='$uid' and dt='$dt'  order by id desc");
}
else
{
  $q1=mysql_query("select * from booking where uid='$uid' order by id desc");

}
      $nr=mysql_numrows($q1);
      
echo"
<h4>Total Booking : $nr</h4>
<table border='1' cellpadding='5' cellspacing='0' width='1000' ><tr height='40' bgcolor='red'>
 <th>#<th>BookingNo <th>Movie Name<th>Price<th>Mode of Payment <th> Date<th> Timimg <th> Sit  <th>Name <th>Email <th> Contact No. </th></tr>";
       while($rows=mysql_fetch_assoc($q1))
   {
   $id=$rows["id"];
      $bno=$rows["bno"];
         $mn=$rows["mn"];
            $pr=$rows["pr"];
               $mp=$rows["mp"];
              $dt=$rows["dt"];
               $tm=$rows["tm"];
                $na=$rows["na"];
                 $sit=$rows["sit"];
                 $email=$rows["em"];
                  $cno=$rows["cn"];
 echo"
 <tr><td><input type='checkbox' name='chk[]' value='$id'><td>$bno<td>$mn<td>$pr<td>$mp<td>$dt<td>$tm<td>$sit<td>$na<td>$email<td>$cno</td></tr>";
 }
echo"  <tr><td align='center' colspan='10'><input type='submit' value='Remove' name='del' style='width:120px;height:32px;'></td></tr>
 </table></center>

</body>
</form>
</html>
";

if(isset($_POST["del"]))
{
  for($i=0;$i<count($_POST["chk"]);$i++)
  {
    if($_POST["chk"][$i]!="")
    {
      $delid=$_POST["chk"][$i];

      $q1=mysql_query("delete from booking where id='$delid'");

      if($q1)
      {
        echo"<script>alert('Deleted successfully....');</script>";
        echo"<script>window.location='view_booking.php';</script>";
      }
      else
      {
        echo"<script>alert('Sorry ! try again....');</script>";
      }

    }
  }
}

?>
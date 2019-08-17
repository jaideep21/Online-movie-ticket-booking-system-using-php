<?php

   require'db_conn.php';
      $q1=mysql_query("select * from register");
      $nr=mysql_numrows($q1);

 $i=1;
 echo"
<html>
<body>
<form method='POST' name='emp'>
<center>
<h3> No. of Records: $nr </h3>
<table border='1' cellpadding='5' cellspacing='0' width='1000' ><tr height='40' bgcolor='red'>
<th>Contact Person <th>Contact No.<th>Email <th> Password<th> Address <th> City  <th>Name of Cinema's <th>No. of Sit</th></tr>";
($rows=mysql_fetch_assoc($q1));
  {
    $id=$rows["id"];
      $cp=$rows["cp"];            
         $cno=$rows["cno"];
            $email=$rows["email"];
              $adr=$rows["adr"];
               $ct=$rows["ct"];
                $nc=$rows["nc"];
                 $ns=$rows["ns"];
                 $sts=$rows["sts"];
                  $ps=$rows["ps"];
  echo"
 <tr><td>$cp<td>$cno<td>$email<td>$ps<td>$adr<td>$ct<td>$nc<td>$ns";
 }
 
echo"
 </table></center>

</body>
</form>
</html>
";



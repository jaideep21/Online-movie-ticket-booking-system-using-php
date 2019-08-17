<?php
require'db_conn.php';

if($_POST["mnid"])
{
  $mnid=$_POST["mnid"];

  $q1=mysql_query("select*from movie where id='$mnid'");
while($rows=mysql_fetch_array($q1,MYSQL_ASSOC))
{
  $pr=$rows['price'];
  echo"<input type='text' name='price' value='$pr' style='width:270px;height:35px;border-radius:10px;background:pink;'>
       <select name='dic'  style='width:100px;height:35px;border-radius:10px;background:pink;'>
<option value='0'>Discount</option>
<option value='5'>5</option>
<option value='10'>10</option>
<option value='15'>15</option>
</select>";
}
}

?>
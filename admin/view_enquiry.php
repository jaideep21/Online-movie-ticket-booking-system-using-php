<?php

   require'db_conn.php';
      $q1=mysql_query("select * from enquiry order by id desc");
      $nr=mysql_numrows($q1);
      
 $i=1;
 echo"
<html>
<body>
<form method='POST' name='enq'>
<center>
<h3> No. of Records: $nr </h3>
<table border='1' cellpadding='5' cellspacing='0' width='1000' ><tr height='40' bgcolor='red'>
 <th>#<th>Name <th>City<th>Contact No.<th>Email <th> Query</th></tr>";
       while($rows=mysql_fetch_assoc($q1))
   {
   $id=$rows["id"];
      $cna=$rows["na"];
         $cno=$rows["cn"];
            $email=$rows["em"];
              $qr=$rows["qr"];
               $ct=$rows["ct"];

 echo"
 <tr><th><input type='checkbox' name='chk[]' value='$id'><td>$cna<td>$ct<td>$cno<td>$email<td>$qr
";
 }
echo" <tr><td colspan='6' align='center'>
<input type='button' value='CheckAll' onclick='checkall()' style='width:90px;height:35px;' />
<input type='button' value='UnCheckAll' onclick='uncheckall()' style='width:90px;height:35px;' />
<input type='submit' name='del' value='Remove' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'>
</td></tr>
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

      $q1=mysql_query("delete from enquiry where id='$delid'");

      if($q1)
      {
        echo"<script>alert('Deleted successfully....');</script>";
        echo"<script>window.location='view_enquiry.php';</script>";
      }
      else
      {
        echo"<script>alert('Sorry ! try again....');</script>";
      }

    }
  }
}




?>

<script>
// check all
function checkall()
{
var fname="emp";
var chkname="chk[]";
var form=document.forms[fname];
var nochk=form[chkname].length;

for($i=0;$i<nochk;$i++)
{
  form[chkname][$i].checked=true;
}
}

// uncheck all
function uncheckall()
{
var fname="emp";
var chkname="chk[]";
var form=document.forms[fname];
var nochk=form[chkname].length;                     

for($i=0;$i<nochk;$i++)
{
  form[chkname][$i].checked=false;
}
}




</script>
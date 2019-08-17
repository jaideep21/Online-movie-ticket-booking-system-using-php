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
<table border='1' cellpadding='5' cellspacing='0' width='1100' ><tr height='40' bgcolor='red'>
 <th>#<th>Contact Person <th>Contact No.<th>Email <th> Password<th> Address <th> City  <th>Name of Cinema's <th>No. of Sit<th> Status <th>Action<th> Remove</th></tr>";

      while($rows=mysql_fetch_assoc($q1))
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
 <tr><th><input type='checkbox' name='chk[]' value='$id'><td>$cp<td>$cno<td>$email<td>$ps<td>$adr<td>$ct<td>$nc<td>$ns
 <td>";
 if($sts=="Activate")
 {
 echo"<font color='green'><b>$sts</b></font>";
 }
 else
 {
    echo"<font color='red'><b>$sts</b></font>";
 }

echo"<td>";

if($sts=="Activate")
{
 echo"<a href='?dctid=$id'><font color='red'><b>Deactivate</b></font></a>";
}
else
{
 echo"<a href='?actid=$id'><font color='red'><b>Activate</b></font></a>";
}

 echo"<td align='center'><a href='?delid=$id'><img src='cross.png'></a>
 ";
 }
echo" <tr><td colspan='12' align='center'>
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

      $q1=mysql_query("delete from register where id='$delid'");

      if($q1)
      {
        echo"<script>alert('Deleted successfully....');</script>";
        echo"<script>window.location='view_register.php';</script>";
      }
      else
      {
        echo"<script>alert('Sorry ! try again....');</script>";
      }

    }
  }
}


// delete through cross icon

if(isset($_GET["delid"]))
{
  $delid=$_GET["delid"];

   $q1=mysql_query("delete from register where id='$delid'");

      if($q1)
      {
        echo"<script>alert('Deleted successfully....');</script>";
        echo"<script>window.location='view_register.php';</script>";
      }
      else
      {
        echo"<script>alert('Sorry ! try again....');</script>";
      }

}


// deacativate status

if(isset($_GET["dctid"]))
{
  $dctid=$_GET["dctid"];

  $q0=mysql_query("update register set sts='Deactivate' where id='$dctid'");

      if($q0)
      {
        echo"<script>alert('Deactivated successfully....');</script>";
        echo"<script>window.location='view_register.php';</script>";
      }
      else
      {
        echo"<script>alert('Sorry ! try again....');</script>";
      }

}


// Activate status

if(isset($_GET["actid"]))
{
  $actid=$_GET["actid"];

  $q0=mysql_query("update register set sts='Activate' where id='$actid'");

      if($q0)
      {
        echo"<script>alert('Activated successfully....');</script>";
        echo"<script>window.location='view_register.php';</script>";
      }
      else
      {
        echo"<script>alert('Sorry ! try again....');</script>";
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
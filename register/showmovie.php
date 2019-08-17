
  <script src="jquery-1.11.js"></script>

<script type='text/javascript'>
$(document).ready(function(){


	$('#mn').change(function()
	{

     var mn= document.getElementById('mn').value;

       var st='mnid='+mn;
        $.ajax
        (
            {
                url: 'select_price.php',
                type: 'POST',
                data:st,
             	success: function(html)
			{

				$('#pr').html(html);

			}
            }
         )
	});

 	});
</script>



<?php
require'db_conn.php';
echo"
<html>
<head>
<title>SHOW MOVIE</title><style>
table,th,td{
            border:5px solid black:
}
</style>
</head>
<body topmargin='100'>
<form method='POST' name='login'>
<center>
<h2>SHOW MOVIE</h2>
<table border='1' width='400' cellpadding='5' cellspacing='0' style='font-family:arial;color:red;font-size:15px;font-weight:bold;'>
<tr><td><input type='date' name='dt' style='width:400px;height:35px;border-radius:10px;background:pink;'>
<tr><td>
<select name='mn' id='mn' style='width:400px;height:35px;border-radius:10px;background:pink;'>
<option value=''>Select Movie</option>
";
session_start();
$id=$_SESSION["id"];

 $q1=mysql_query("select * from movie where uid='$id'");
 while($rows=mysql_fetch_assoc($q1))
   {
   $mn=$rows["mname"];
      $id=$rows["id"];
   echo"<option value='$id'>$mn</option>";
   }
echo"</select>
</td></tr>
<tr><td id='pr'>
<tr><td><input type='text' name= 'd1' placeholder=' Duration1' style='width:270px;height:35px;border-radius:10px;background:pink;'>
<tr><td><input type='text' name= 'd2' placeholder=' Duration2' style='width:270px;height:35px;border-radius:10px;background:pink;'>
<tr><td><input type='text' name= 'd3' placeholder=' Duration3' style='width:270px;height:35px;border-radius:10px;background:pink;'>
<tr><td><input type='text' name= 'd4' placeholder=' Duration4' style='width:270px;height:35px;border-radius:10px;background:pink;'>
<tr><td><input type='submit' name='ct' value='Add' style='width:400px;height:35px;border-radius:10px;background:blue;color:white;'></td></tr>
";


if(isset($_POST["ct"]))
{
 session_start();
$uid=$_SESSION["id"];
$dt=$_POST["dt"];
$mid=$_POST["mn"];
$price=$_POST["price"];
$dic=$_POST["dic"];
$d1=$_POST["d1"];
$d2=$_POST["d2"];
$d3=$_POST["d3"];
$d4=$_POST["d4"];
$tp=$price-($price*$dic/100);

 $q1=mysql_query("insert into showmovie values('$uid','$dt','$mid','$tp','$dic','$d1','$d2','$d3','$d4','')");

  if($q1)
  { echo"<script>alert('Submitted successfully');</script>";
  }

else
{
  echo"<script>alert('Sorry ! try again');</script>";
}

}

echo"
</table><br> ";

 $q2=mysql_query("select * from showmovie where uid='$uid' order by id desc");
 echo"<center><table border='1' cellpadding='5' cellspacing='0' width='900' >
 <tr height='40' bgcolor='red'><center>
 <th>#<th>Date <th> Movie name <th> Price <th> Time1 <th> Time2 <th> Time3 <th> Time4 </th></tr>";
       while($rows=mysql_fetch_assoc($q2))
   {
   $dt=$rows["dt"];
      $mid=$rows["mid"];
     $d1=$rows["d1"];
     $d2=$rows["d2"];
     $d3=$rows["d3"];
     $d4=$rows["d4"];
    $price=$rows["price"];

     $id=$rows["id"];
 // get movie name by above id
  $q0=mysql_query("select * from movie where id='$mid'");
  while($rows=mysql_fetch_assoc($q0))
   {
     $mname=$rows["mname"];
   }



    echo"<tr><th><input type='checkbox' name='chk[]' value='$id'><td>$dt<td>$mname<td>$price<td>$d1<td>$d2<td>$d3<td>$d4</td></tr>";
   }

echo"
<tr><th colspan='5' align='center'><input type='submit' name='del' value='Remove' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'>
 <input type='button' value='CheckAll' onclick='checkall()' style='width:90px;height:35px;' />
<input type='button' value='UnCheckAll' onclick='uncheckall()' style='width:90px;height:35px;' /></tr>
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
      $q1=mysql_query("delete from showmovie where id='$delid'");

      if($q1)
      {
        echo"<script>alert('Deleted successfully....');</script>";
        echo"<script>window.location='showmovie.php';</script>";
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
var fname="login";
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
var fname="login";
var chkname="chk[]";
var form=document.forms[fname];
var nochk=form[chkname].length;

for($i=0;$i<nochk;$i++)
{
  form[chkname][$i].checked=false;
}
}
</script>
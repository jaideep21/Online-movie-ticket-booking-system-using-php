<?php
echo"
<html>
<head>
<title>Add City</title>
</head>
<body topmargin='100'>
<form method='POST' name='movie' enctype='multipart/form-data'>
<center>
<h2>Add Movie</h2>
<table border='1' width='600' cellpadding='5' cellspacing='0' style='font-family:arial;color:red;font-size:15px;font-weight:bold;'>
<tr><td><input type='text' name='mn' Placeholder=' Movie name' style='width:100%;height:35px;border-radius:10px;background:pink;'>
<tr> <td><select name='mtp' style='width:100%;height:35px;border-radius:10px;background:pink;'>
<option value=''>Select Type</option>
<option value='Adult'>Adult</option>
<option value='Universal'>Universal</option>
</select>
</td></tr>
<tr><td><input type='file' name='img'  style='width:100%;height:35px;border-radius:10px;background:pink;'>
<tr><td><input type='text' name='pr' Placeholder=' Movie Price' style='width:100%;height:35px;border-radius:10px;background:pink;'>
<tr><td><input type='submit' name='mv' value='Add' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'></td></tr>
";
require'db_conn.php';
 session_start();
$id=$_SESSION["id"];
if(isset($_POST["mv"]))
{
$mn=$_POST["mn"];
$pr=$_POST["pr"];
$mtp=$_POST["mtp"];

  $fileName = $_FILES['img']['name'];
   $tmpName = $_FILES['img']['tmp_name'];

$i=1;
while(file_exists("upload/$fileName"))
{
$fileName=substr($fileName,0,strpos($fileName,"."))."$i".strstr($fileName,".");
$i++;
}

$filePath = "upload/".$fileName;

if(move_uploaded_file($tmpName,$filePath))
{
}

$orig_image = imagecreatefromjpeg($filePath);
$image_info = getimagesize($filePath);
$width_orig  = $image_info[0]; // current width as found in image file
$height_orig = $image_info[1]; // current height as found in image file
$width = 200; // new image width
$height = 180; // new image height
$destination_image = imagecreatetruecolor($width, $height);
imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
// This will just copy the new image over the original at the same filePath.
imagejpeg($destination_image, $filePath, 50);



 $q1=mysql_query("insert into movie values('$mn','$mtp','$fileName','$pr','$id','')");

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

 $q1=mysql_query("select * from movie where uid='$id' order by id desc");
 echo"<center><table border='1' cellpadding='5' cellspacing='0' width='600' >
 <tr height='40' bgcolor='red'>
 <th>#<th>Movie name <th>Type  <th> Price <th> Images</th></tr>";
    while($rows=mysql_fetch_assoc($q1))
{

   $mn=$rows["mname"];
     $img=$rows["img"];
      $mtp=$rows["mtp"];
       $price=$rows["price"];
    $id=$rows["id"];
    echo"<tr><th><input type='checkbox' name='chk[]' value='$id'><td>$mn<td>$mtp<td>$price<td><img src='upload/$img'></td></tr>";
}

echo" 

<tr><th colspan='5'><input type='submit' name='del' value='Remove' style='width:90px;height:35px;border-radius:10px;background:blue;color:white;'>
<input type='button' value='CheckAll' onclick='checkall()' style='width:90px;height:35px;' />
<input type='button' value='UnCheckAll' onclick='uncheckall()' style='width:90px;height:35px;' /><tr>

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
      $q1=mysql_query("delete from movie where id='$delid'");

      if($q1)
      {
        echo"<script>alert('Deleted successfully....');</script>";
        echo"<script>window.location='movie.php';</script>";
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
var fname="movie";
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
var fname="movie";
var chkname="chk[]";
var form=document.forms[fname];
var nochk=form[chkname].length;

for($i=0;$i<nochk;$i++)
{
  form[chkname][$i].checked=false;
}
}
</script>
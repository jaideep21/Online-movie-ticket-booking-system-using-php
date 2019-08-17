
  <script src="jquery-1.11.js"></script>
   <script language ="JavaScript" type="text/javascript">
$(document).ready(function () {
    $(".num").click(function () {
              $(this).css('background-color', 'red');
              $(this).css('color', 'white');

        var sitd = document.getElementById("dis").value;
        var bid = this.id;

        var x=sitd+""+bid+",";
        document.getElementById("dis").value=x;

    });

});

</script>

<?php
echo"
<html>
<head><title>Online Ticket Booking System</title>
<link href='style.css' rel='stylesheet'>
</head>
<body bgcolor='gray' topmargin='0' bottommargin='0'>
<form method='POST'>
<center>
<div class='main'>
";
require'mymenu.php';
echo"
<div class='content'>
<table width='900' border='1' cellpadding='5' cellspacing='0'><br>
<br>
<tr><th height='40' bgcolor='E7E5E3' colspan='2'><h3>Contact Us :</h3> </th></tr>
<tr><th ><br>Office :<td> 200/ 2nd. Floor jd Complex, Raipur , Chhattisgarh </th></tr>
<tr><th ><br>Telephone :<td> 0771-4554545 </th></tr>
<tr><th ><br>Email :<td> info@otbs.com </th></tr>
<tr><th ><br>Website:<td> www.otbs.com </th></tr>

</table>
</div>

<div class='footer'>&copy 2018 , All right reserved &nbsp &nbsp Design & Developved by Abc Designer</div>
</div>
</center>
</body>
</html>
";
?>
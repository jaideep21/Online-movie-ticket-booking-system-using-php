  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>

   <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1050;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>




 <script src="jquery-1.11.js"></script>

<script type='text/javascript'>
$(document).ready(function(){


	$('#city').change(function()
	{

     var cid= document.getElementById('city').value;

       var st='cid1='+cid;
        $.ajax
        (
            {
                url: 'clist.php',
                type: 'POST',
                data:st,
             	success: function(html)
			{

				$('#mylist').html(html);

			}
            }
         )
	});

 	});
</script>

<?php
echo"
<html>
<head><title>Online Ticket Booking System</title>
<link href='style.css' rel='stylesheet'>
</head>
      <center>  
<body background='img/001.jpg' img width='1050' height='1000' topmargin='0' bottommargin='0'>
   <div class='main'>

<div class='header'>

<a href='log.php'>
<div class='logo'><center>OTB</center></div></a>
<div class='ttl'><font color='white'>ONLINE TICKET BOOKING SYSTEM</font></div>
</div>
<div class='mymenu'>
<a href='enquiry.php' style='text-decoration:none;'><div class='btn'>Enquiry</div></a>
<a href='support.php' style='text-decoration:none;'><div class='btn'>Support</div></a>
<a href='index.php' style='text-decoration:none;'><div class='btn'>Home</div></a>


</div>
<div class='slider'> ";
?>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1050px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1050px;height:300px;overflow:hidden;">

            <div data-p="170.00">
                <img data-u="image" src="img/Bollywood-1.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/images (8).jpeg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/online img.jpg" />
            </div>
             <div data-p="170.00">
                <img data-u="image" src="img/images (9).jpeg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>

</div>
<?php
echo"  </u>
<div class='leftcont'>
<br>
 <select name='city' id='city' style='width:90%;height:35px;border-radius:5px;'>

 <option value=''>Select City</option>";
require'db_conn.php';
 $q1=mysql_query("select * from city order by id desc");
        while($rows=mysql_fetch_assoc($q1))
   {
   $cname=$rows["cname"];
    $id=$rows["id"];

    echo"
    <option value='$cname'>$cname</option>";
   }

echo"</select>
<br>
<br>
<IMG HEIGHT='300' width='290' SRC='online-ticket-bookings.jpg'>
<div id='mylist' style=''>

</div>
</div>

<div class='rightcont'>
<FONT SIZE='10' COLOR='black'><u><b>About us</u></FONT><BR><br>
  <div class='abt'>
  <table border='1' width='600' height='300'>
<td><FONT SIZE='6'COLOR='RED' style='arial'><center>
E-ticket system is basically providing the customers an anytime And
anywhere service <br>for booking the seat in the cinema hall and to
gather information about the movies online.
                    </center>
                    </border>
                    </table>

   </div>

</div>
</center>
</body>
</html>
";
?>
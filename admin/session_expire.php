<?php

session_start();
session_destroy();

echo"<center>Your session has been expired.  <br> <a href='../index.php' target='_parent'>Click here to again login </a></center>";
?>
<?php
session_start();
session_destroy();
echo "<script>window.open('adminhome.php','_self')</script>";
?>
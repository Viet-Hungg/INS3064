<?php
//creating a database connection $link a variable use for just connection class
$link=mysqli_connect("localhost","root","11",) or die(mysqli_error($link));
mysqli_select_db($link,"LoginReg") or die(mysqli_error($link)); 
?>

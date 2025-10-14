<?php
session_start();

/* connect to database check user*/
$con = mysqli_connect('localhost', 'root', '11'); 
mysqli_select_db($con, 'loginreg'); 

/* create variables to store data */
$name = $_POST['user'];
$pass = $_POST['password'];

/* select data from DB */
$s = "select * from userreg where name='$name'";
$studentid = $_POST['studentid'];   
$dob = $_POST['dob'];              
$country = $_POST['country'];
/* result variable to store data */
$result = mysqli_query($con, $s);

/* check for duplicate names and count records */
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "Username Exists";
} else {
$reg = "INSERT INTO userreg (name, password, `student id`, DoB, country)
            VALUES ('$name', '$pass', '$studentid', '$dob', '$country')";
                mysqli_query($con, $reg);
    echo "registration successful";
    header("Location: login.php");
    exit();
}
?>

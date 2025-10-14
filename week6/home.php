<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
    exit();
}

$con = mysqli_connect('localhost', 'root', '11', 'loginreg', 3306);
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];
$s = "SELECT * FROM userreg WHERE name='$username'";
$result = mysqli_query($con, $s);
$userData = mysqli_fetch_assoc($result);
?>

<html lang='en'>
<head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
    <div class="card" style="margin-top: 50px; padding: 20px;">
        <h2>Chi tiết Hồ sơ</h2>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($userData['name']); ?></p>
            <p><strong>Student ID:</strong> <?php echo htmlspecialchars($userData['student id']); ?></p>
            <p><strong>DoB:</strong> <?php echo htmlspecialchars($userData['DoB']); ?></p>
            <p><strong>Country:</strong> <?php echo htmlspecialchars($userData['country']); ?></p>
    </div>
</div>
</body>
</html>
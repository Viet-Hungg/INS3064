<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title> 
</head>
<body>
    <table border =1> 
    <?php
    for ($i=0;$i <5; $i++){
        echo" 
        <tr> 
        <td>$i</td>
        ";
    }
    $name = "Mr. A";
    $age = 20;
    $course = array("Java","C","PHP");
    echo "Name: " . $name . ", age: " . $age .
        "<br/>3rd course is: " . $course[2] . "<br/>";
    $x = 10;
    $y = 11;
    echo "x = " . $x . "<br/>";
    echo "y = " . $y . "<br/>";
    echo "x / y = " . ($x / $y) . "<br/>";
    echo "x * y = " . ($x * $y) . "<br/>";
    echo "x++ = " . ($x++) . "<br/>";
    echo "++y = " . (++$y) . "<br/>";
    $x =10;
    $y =11;
    echo "x == y:" . ($x == $y) . "<br/>";
    echo "x != y:" . ($x !=$y) . "<br/>";
    echo "x < y:" . ($x < $y) . "<br/>";
    echo "x > y:" . ($x > $y) . "<br/>";
    echo "x <= y:" . ($x <= $y) . "<br/>";
    echo "x >= y:" . ($x >=$y) . "<br/>";

    ?>
</body>
</html>

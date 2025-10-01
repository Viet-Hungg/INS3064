<?php
include "connection.php";
$id=$_GET["id"];
$res=mysqli_query($link,"SELECT * FROM laptops WHERE id=$id");
$row=mysqli_fetch_array($res);
?>

<form action="" method="post">
    <input type="text" name="brand" value="<?php echo $row['brand']; ?>"><br>
    <input type="text" name="model" value="<?php echo $row['model']; ?>"><br>
    <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
    <input type="text" name="stock" value="<?php echo $row['stock']; ?>"><br>
    <input type="text" name="release_year" value="<?php echo $row['release_year']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if(isset($_POST["update"]))
{
    mysqli_query($link,"UPDATE laptops SET brand='$_POST[brand]', model='$_POST[model]', price='$_POST[price]', stock='$_POST[stock]', release_year='$_POST[release_year]' WHERE id=$id");
    ?>
    <script type="text/javascript">
    window.location="index.php";
    </script>
    <?php
}
?>

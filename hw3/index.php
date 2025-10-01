<?php
include "connection.php";
?>

<html lang="en">
<head>
    <title>Laptop Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
    <h2>Laptop data form</h2>
    <form action="" name="form1" method="post">
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
        </div>
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" placeholder="Enter model" name="model">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" class="form-control" id="stock" placeholder="Enter stock" name="stock">
        </div>
        <div class="form-group">
            <label for="release_year">Release Year:</label>
            <input type="text" class="form-control" id="release_year" placeholder="Enter release year" name="release_year">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
        <button type="submit" name="update" class="btn btn-default">Update</button>
        <button type="submit" name="delete" class="btn btn-default">Delete</button>
    </form>
</div>
</div>

<div class="col-lg-12">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Release Year</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($link)) {
            $res=mysqli_query($link,"SELECT * FROM laptops");
        }
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["brand"]."</td>";
            echo "<td>".$row["model"]."</td>";
            echo "<td>".$row["price"]."</td>";
            echo "<td>".$row["stock"]."</td>";
            echo "<td>".$row["release_year"]."</td>";
            echo "<td><a href='edit.php?id=".$row["id"]."'><button type='button' class='btn btn-success'>Edit</button></a></td>";
            echo "<td><a href='delete.php?id=".$row["id"]."'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>

<?php
if(isset($_POST["insert"]))
{
    mysqli_query($link,"INSERT INTO laptops VALUES (NULL,'$_POST[brand]' ,'$_POST[model]','$_POST[price]','$_POST[stock]','$_POST[release_year]')");
   ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}

if(isset($_POST["delete"]))
{
    mysqli_query($link,"DELETE FROM laptops WHERE brand='$_POST[brand]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}

if(isset($_POST["update"]))
{
    mysqli_query($link,"UPDATE laptops SET model='$_POST[model]', price='$_POST[price]', stock='$_POST[stock]', release_year='$_POST[release_year]' WHERE brand='$_POST[brand]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}
?>
</html>

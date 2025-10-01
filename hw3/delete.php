<?php
include "connection.php";
$id = $_GET["id"];
mysqli_query($link,"DELETE FROM laptops WHERE id=$id");
?>
<script type="text/javascript">
window.location="index.php";
</script>

<?php
require_once("db.php");
$sql = "DELETE FROM orders WHERE id_order='" . $_GET["order"] . "'";
mysqli_query($conn,$sql);
header("Location:dashboard.php");
?>
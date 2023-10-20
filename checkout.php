<?php
include './Admin/conf/config.php';
session_start();

$id =  $_SESSION["id_member"];

$query = mysqli_query($conn, "INSERT INTO `orders_history` (`invoice`, `id_member`, `id_item`, `qty`, `price`, `date`)
SELECT `invoice`, `id_member`, `id_item`, `qty`, `price`, `date`
FROM `orders`
WHERE `id_member` = '$id';");

$queryDelete = mysqli_query($conn, "DELETE FROM orders WHERE id_member = '$id'");

header("Location: ./dashboard.php");

?>
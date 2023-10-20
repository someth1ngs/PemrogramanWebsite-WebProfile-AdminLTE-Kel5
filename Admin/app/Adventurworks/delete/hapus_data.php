<?php
include '../../../conf/config.php';
$id = $_GET['id'];

$queryDelete = mysqli_query($conn, "DELETE FROM orders_history WHERE id_order = '$id'");

header("Location: ../data-Sales-Fact.php");
?>

<?php
include '../../../conf/config.php';
$id = $_GET['kode'];
$invoice = $_GET['Invoice'];
$id_member = $_GET['member'];
$id_item = $_GET['item'];
$qty = $_GET['Quantity'];
$total = $_GET['Total'];
$date = date('Y-m-d'); // Mengambil tanggal saat ini



$query2 = "UPDATE orders_history SET invoice = '$invoice', 
id_member = '$id_member', 
id_item = '$id_item', 
qty = '$qty', 
price = '$total',
date = '$date'
WHERE id_order = '$id';";
$result2 = mysqli_query($conn, $query2);

// echo $invoice, '||', $id_member, '||', $id_item, '||', $qty, '||', $total, '||', $date;

if ($result2) {
    header("Location: ../data-Sales-Fact.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
<?php
include '../../../conf/config.php';
$invoice = $_GET['Invoice'];
$id_member = $_GET['member'];
$id_item = $_GET['item'];
$qty = $_GET['Quantity'];
$total = $_GET['Total'];
$date = date('Y-m-d'); // Mengambil tanggal saat ini

// $query1 = mysqli_query($conn, "SELECT id_order FROM orders ORDER BY id_order DESC LIMIT 1");
// $lastKodeOrder = mysqli_fetch_assoc($query1)['id_order'];
// $nextNumber = $lastKodeOrder + 1;
// $nextKodeOrder = $nextNumber; // Membuat id_order baru

$query2 = mysqli_query($conn, "INSERT INTO orders_history (invoice, id_member, id_item, qty, price, date) VALUES ('$invoice', '$id_member', '$id_item', '$qty', '$total', '$date')");
if ($query2) {
  header("Location: ../data-Sales-Fact.php");
  exit;
} else {
  echo "Error: " . mysqli_error($conn);
}
?>

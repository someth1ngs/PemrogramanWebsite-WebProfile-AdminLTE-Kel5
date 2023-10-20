<?php 
include 'db.php';
$id_Member = $_GET['member'];
$id_Item = $_GET['item'];

$result = mysqli_query($conn, "SELECT * FROM items WHERE id_item = '$id_Item'");
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$id_Item = $row['id_item'];
$price = $row['price'];

$query = "SELECT invoice FROM orders ORDER BY invoice DESC LIMIT 1";
$result = mysqli_query($conn, $query);
$nextKodeInvoice = 'O001'; // Default value jika tidak ada invoice sebelumnya
    
$query1 = mysqli_query($conn, "SELECT id_order FROM orders ORDER BY id_order DESC LIMIT 1");
$lastKodeOrder = mysqli_fetch_assoc($query1)['id_order'];
$nextNumber = $lastKodeOrder + 1;
$nextKodeOrder = $nextNumber; // Membuat id_order baru

if (is_array($resultArray) && count($resultArray) > 0) {
    $lastKodeOrder = $resultArray[0]['id_order'];
    $nextNumber = $lastKodeOrder + 1;
    $nextKodeOrder = $nextNumber; // Membuat id_member baru
}

// Lakukan koneksi ke database dan eksekusi query INSERT di sini
$insert = mysqli_query($conn, "INSERT INTO orders VALUES ($nextKodeOrder, '$nextKodeInvoice', '$id_Member', '$id_Item', '1', '$price', CURDATE())");
if ($insert) {
    echo "
    <script>
    alert('BERHASIL DITAMBAHKAN KE KERANJANG');
    window.location = './dashboard.php';
    </script>
    ";
    die;
}
?>
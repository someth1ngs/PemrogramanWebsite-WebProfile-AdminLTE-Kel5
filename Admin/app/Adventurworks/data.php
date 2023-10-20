<?php
require('koneksi.php');

$sql = "SELECT i.name AS product_name, SUM(o.qty) AS total_quantity
FROM orders_history o
JOIN items i ON o.id_item = i.id_item
GROUP BY i.id_item;";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "product_name" => $row['product_name'],
        "total_quantity" => $row['total_quantity']
    ));
}

$data = json_encode($hasil);
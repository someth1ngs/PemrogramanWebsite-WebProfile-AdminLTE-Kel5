<?php
include '../conf/config.php';

$sql = "SELECT p.PName as PName, s.order_qty as qty
FROM product p
JOIN sales_fact s on p.Product_id = s.product_id
ORDER BY s.order_qty DESC
LIMIT 5;";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($$result)) {
    array_push($hasil,array(
        "PName"=>$row['PName'],
        "qty"=>$row['qty'],
    ));
}
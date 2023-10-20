<?php
require('koneksi.php');

$sql1 = "(SELECT p.PName, SUM(sf.order_qty) AS total_qty, '2001' AS year
FROM sales_fact sf
JOIN product p ON sf.product_id = p.Product_id
WHERE sf.time_id >= 1 AND sf.time_id <= 229
GROUP BY p.PName
LIMIT 5)

UNION ALL

(SELECT p.PName, SUM(sf.order_qty) AS total_qty, '2002' AS year
FROM sales_fact sf
JOIN product p ON sf.product_id = p.Product_id
WHERE sf.time_id >= 230 AND sf.time_id <= 594
GROUP BY p.PName
LIMIT 5)

UNION ALL

(SELECT p.PName, SUM(sf.order_qty) AS total_qty, '2003' AS year
FROM sales_fact sf
JOIN product p ON sf.product_id = p.Product_id
WHERE sf.time_id >= 595 AND sf.time_id <= 959
GROUP BY p.PName
LIMIT 5)

UNION ALL

(SELECT p.PName, SUM(sf.order_qty) AS total_qty, '2004' AS year
FROM sales_fact sf
JOIN product p ON sf.product_id = p.Product_id
WHERE sf.time_id >= 960 AND sf.time_id <= 1215
GROUP BY p.PName
ORDER BY `total_qty` ASC
LIMIT 5);";

$result1 = mysqli_query($conn, $sql1);

$pendapatan = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($pendapatan, array(
        "PName" => $row['PName'],
        "total_qty" => $row['total_qty'],
        "year" => $row['year']
    ));
}

$data1 = json_encode($pendapatan);

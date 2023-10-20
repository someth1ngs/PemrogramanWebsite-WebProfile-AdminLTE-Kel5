<?php
require('koneksi.php');

$sql = "SELECT t.tahun, SUM(sf.line_total) as line_total
FROM sales_fact sf
JOIN time t ON sf.time_id = t.time_id
GROUP BY t.tahun";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "tahun" => $row['tahun'],
        "line_total" => $row['line_total']
    ));
}

$data3 = json_encode($hasil);
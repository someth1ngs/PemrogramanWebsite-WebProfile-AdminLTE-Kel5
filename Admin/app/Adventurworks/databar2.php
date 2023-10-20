<?php
require('koneksi.php');

$sql = "SELECT t.tahun as Tahuns, sf.shipmentmethodID as Metode, COUNT(*) AS UsageCounts
FROM shipment_fact sf
JOIN time t ON sf.time_id = t.time_id
GROUP BY t.tahun, sf.shipmentmethodID
ORDER BY sf.shipmentmethodID;";



$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "UsageCounts" => $row['UsageCounts'],
        "Tahuns" => $row['Tahuns'],
        "Metode" => $row['Metode']
    ));
}

$data2 = json_encode($hasil);
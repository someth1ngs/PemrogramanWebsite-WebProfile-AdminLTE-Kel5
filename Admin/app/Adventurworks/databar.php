<?php
require('koneksi.php');

$sql = "SELECT sf.shipmentmethodID AS Metode, COUNT(*) AS UsageCount, sm.Name AS Nama
FROM shipment_fact sf
INNER JOIN shipmethod sm ON sf.shipmentmethodID = sm.ShipMethodID
GROUP BY sf.shipmentmethodID, sm.Name
ORDER BY UsageCount DESC;";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "Metode" => $row['Metode'],
        "UsageCount" => $row['UsageCount'],
        "Nama" => $row['Nama']
    ));
}

$data = json_encode($hasil);
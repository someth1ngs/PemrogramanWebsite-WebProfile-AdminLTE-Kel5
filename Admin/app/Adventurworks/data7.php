<?php
require('koneksi.php');

$sql = "SELECT territory.Group AS contingen, 
SUM(fact_sales.freight)  AS freight
FROM `fact_sales` 
JOIN territory ON territory.TerritoryID = fact_sales.TerritoryID 
GROUP BY territory.Group;";
$result = mysqli_query($conn, $sql);
$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "contingen" => $row['contingen'],
        "freight" => $row['freight']
    ));
}

$data7 = json_encode($hasil);

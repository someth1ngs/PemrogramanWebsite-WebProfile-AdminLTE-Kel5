<?php
require('koneksi.php');

$sql1 = "SELECT territory.Group AS Grup, 
                time.tahun AS tahun, 
                SUM(fact_sales.freight) AS freight 
         FROM fact_sales 
         JOIN territory ON territory.TerritoryID = fact_sales.TerritoryID 
         JOIN Time ON time.time_id = fact_sales.time_id 
         GROUP BY territory.Group, time.tahun";



$result1 = mysqli_query($conn, $sql1);

$pendapatan = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($pendapatan, array(
        "freight" => $row['freight'],
        "tahun" => $row['tahun'],
        "Grup" => $row['Grup']
    ));
}

$data8 = json_encode($pendapatan);

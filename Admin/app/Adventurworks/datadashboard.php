<?php
require('koneksi.php');

$sql1 = "SELECT  
FORMAT(SUM(fs.price), 0) AS sub_total, 
MIN(YEAR(fs.date)) AS MinTahun, 
MAX(YEAR(fs.date)) AS MaxTahun       
FROM orders_history fs";

$result1 = mysqli_query($conn, $sql1);


$datadashboard1 = array();


while ($row = mysqli_fetch_array($result1)) {
    array_push($datadashboard1, array(
        "TotalSubTotal" => $row['sub_total'],
        "MinTahun" => $row['MinTahun'],
        "MaxTahun" => $row['MaxTahun']
    ));
}



$data1 = json_encode($datadashboard1);


$sql1 = "SELECT COUNT(id_order) AS SalesReason FROM orders_history;";

$result1 = mysqli_query($conn, $sql1);

$datadashboard2 = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($datadashboard2, array(
        "SalesReason" => $row['SalesReason']
    ));
}

$data2 = json_encode($datadashboard2);

$sql1 = "SELECT COUNT(DISTINCT `id_member`) AS 'Group' FROM `orders_history`;";

$result1 = mysqli_query($conn, $sql1);

$datadashboard3 = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($datadashboard3, array(
        "Group" => $row['Group']
    ));
}

$data3 = json_encode($datadashboard3);


$sql2 = "SELECT MONTHNAME(MIN(fs.date)) AS MinTahun, 
MONTHNAME(MAX(fs.date)) AS MaxTahun       
FROM orders_history fs";

$result2 = mysqli_query($conn, $sql2);

$datadashboard2 = array();

while ($row1 = mysqli_fetch_array($result2)) {
    array_push($datadashboard2, array(
        "MinTahun" => $row1['MinTahun'],
        "MaxTahun" => $row1['MaxTahun']
    ));
}

$data4 = json_encode($datadashboard2);
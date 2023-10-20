<?php
require('koneksi.php');

$sql = "SELECT YEAR(HireDate) AS Year, COUNT(*) AS TotalHireDate
FROM employee
GROUP BY Year;";

$result = mysqli_query($conn,$sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil,array(
        "Year"=>$row['Year'],
        "TotalHireDate"=>$row['TotalHireDate'],
    ));
}

$data4 = json_encode($hasil);
?>
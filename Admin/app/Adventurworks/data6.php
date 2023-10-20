
<?php
require('koneksi.php');

$sql1 = "SELECT `Group`, Countryname, COUNT(*) AS total_per_group
FROM address
GROUP BY `Group`, Countryname;";

$result = mysqli_query($conn,$sql1);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil,array(
        "Groups"=>$row['Group'],
        "Countryname"=>$row['Countryname'],
        "total_per_group"=>$row['total_per_group'],
    ));
}

$data6 = json_encode($hasil);

?>

<?php
require('koneksi.php');

$sql = "SELECT `Group`, Count(*) as Total
FROM address
GROUP BY `Group`;
";

$result = mysqli_query($conn,$sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil,array(
        "Group"=>$row['Group'],
        "Total"=>$row['Total'],
    ));
}

$data5 = json_encode($hasil);

?>
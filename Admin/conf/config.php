<?php
 $conn = mysqli_connect('localhost', 'root', '', 'phpsamples');
if(!$conn) {
    die("Koneksi Gagal: " + mysqli_connect_error());
}
else{
    echo "Koneksi Berhasil";
}
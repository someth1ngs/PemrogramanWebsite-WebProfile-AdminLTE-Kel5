<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
if(mysqli_num_rows($query)==1){
    header("Location: ../app/adventurworks");
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
}
else if($username == '' && $password == ''){
    header("Location: ../index.php?error=2");
}
else{
    header("Location: ../index.php?error=1");
}
?>
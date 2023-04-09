<?php
session_start();
include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn,"select * from admin where username = '$username' and password = '$password'");
$sqlsiswa = mysqli_query($conn,"select * from siswa where username = '$username' and password = '$password'");

if (mysqli_num_rows($sql)==1){
    $_SESSION['username']=$username;
    header('location:user/admin');
}elseif (mysqli_num_rows($sqlsiswa) == 1) {
    $_SESSION['username']=$username;
    header('location:user/siswa');
}
else {
    header('location:index.php');
}
?>
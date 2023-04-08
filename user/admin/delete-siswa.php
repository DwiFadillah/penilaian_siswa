<?php
session_start();
include '../../config/koneksi.php';

$nis = $_GET['nis'];


$sql = mysqli_query($conn,"DELETE FROM siswa WHERE `siswa`.`nis` = '$nis'");
    header('location:data-siswa.php');

?>
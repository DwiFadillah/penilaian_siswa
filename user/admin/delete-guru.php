<?php
session_start();
include '../../config/koneksi.php';

$nip = $_GET['nip'];


$sql = mysqli_query($conn,"DELETE FROM guru WHERE `guru`.`nip` = '$nip'");
    header('location:data-guru.php');

?>
<?php
session_start();
include '../../config/koneksi.php';

$nis_get = $_GET['nis'];
$nis_baru = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$kd_kelas = $_POST['kd_kelas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

$sql = mysqli_query($conn,"UPDATE `siswa` SET `nis` = '$nis_baru', `nama_siswa` = '$nama_siswa', `tgl_lahir` = '$tgl_lahir', `alamat` = '$alamat ', `kd_kelas` = '$kd_kelas', `username` = '$username', `password` = '$password', `telp` = '$telp' WHERE `siswa`.`nis` = '$nis_get';");
    header('location:data-siswa.php');

?>
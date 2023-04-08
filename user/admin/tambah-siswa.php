<?php
session_start();
include '../../config/koneksi.php';

$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$kd_kelas = $_POST['kd_kelas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

$sql = mysqli_query($conn,"INSERT INTO `siswa` (`nis`, `nama_siswa`, `tgl_lahir`, `alamat`, `kd_kelas`, `username`, `password`, `telp`) VALUES ('$nis', '$nama_siswa', '$tgl_lahir', '$alamat', '$kd_kelas', '$username', '$password', '$telp');");
    header('location:data-siswa.php');

?>
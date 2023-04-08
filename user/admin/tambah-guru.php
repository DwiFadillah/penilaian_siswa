<?php
session_start();
include '../../config/koneksi.php';

$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$kd_matpel = $_POST['kd_matpel'];
$nama_matpel = $_POST['nama_matpel'];

$sql = mysqli_query($conn,"INSERT INTO `guru` (`nip`, `nama_guru`, `tgl_lahir`, `alamat`, `telp`, `kd_matpel`, `nama_matpel`) 
VALUES ('$nip', '$nama_guru', '$tgl_lahir', '$alamat', '$telp', '$kd_matpel', '$nama_matpel');");
    header('location:data-guru.php');
?>
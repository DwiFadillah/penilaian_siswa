<?php
session_start();
include '../../config/koneksi.php';

$nip_get = $_GET['nip'];
$nip_baru = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$kd_matpel = $_POST['kd_matpel'];
$nama_matpel = $_POST['nama_matpel'];

$sql = mysqli_query($conn,"UPDATE `guru` SET `nip` = '$nip_baru', `nama_guru` = '$nama_guru', `tgl_lahir` = '$tgl_lahir', 
`alamat` = '$alamat ', `telp` = '$telp', `kd_matpel` = '$kd_matpel', `nama_matpel` = '$nama_matpel' WHERE `guru`.`nip` = '$nip_get';");
    header('location:data-guru.php');

?>
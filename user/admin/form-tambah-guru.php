<?php
session_start();
include '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
</head>
<body>
    <h1>Tambah Data Guru</h1>
    <form action="tambah-guru.php" method=post>
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_guru" id=""></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="telp" id=""></td>
            </tr>
            <tr>
                <td>Kode Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="kd_matpel" id=""></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="nama_matpel" id=""></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
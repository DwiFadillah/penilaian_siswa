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
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <form action="tambah-siswa.php" method=post>
        <table>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_siswa" id=""></td>
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
                <td>Kode Kelas</td>
                <td>:</td>
                <td><input type="text" name="kd_kelas" id=""></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" id=""></td>
            </tr>
            <tr>
                <td>Telpon</td>
                <td>:</td>
                <td><input type="text" name="telp" id=""></td>
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
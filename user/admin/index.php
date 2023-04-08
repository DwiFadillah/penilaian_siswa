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
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Dashboard Admin</h1>
    <a href="data-siswa.php">Data Siswa</a><br>
    <a href="data-guru.php">Data Guru</a><br>
    <a href="../../index.php">Logout</a>
</body>
</html>
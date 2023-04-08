<?php
session_start();
include '../../config/koneksi.php';
$nip = $_GET['nip'];
$sql = mysqli_query($conn, "select * from guru where nip = '$nip'");
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
</head>
<body>
    <h1>Edit Data Guru</h1>
    <form action="edit-guru.php?nip=<?php echo $nip; ?>" method=post>
        <table>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><input type="text" name="nip" id="" value="<?php echo $data['nip']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_guru" id="" value="<?php echo $data['nama_guru']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir" id="" value="<?php echo $data['tgl_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="telp" id=""value="<?php echo $data['telp']; ?>"></td>
            </tr>
            <tr>
                <td>Kode Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="kd_matpel" id="" value="<?php echo $data['kd_matpel']; ?>"></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="nama_matpel" id="" value="<?php echo $data['nama_matpel']; ?>"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Edit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
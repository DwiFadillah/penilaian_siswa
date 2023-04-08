<?php
session_start();
include '../../config/koneksi.php';
$nis = $_GET['nis'];
$sql = mysqli_query($conn, "select * from siswa where nis = '$nis'");
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <form action="edit-siswa.php?nis=<?php echo $nis; ?>" method=post>
        <table>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" id="" value="<?php echo $data['nis']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_siswa" id="" value="<?php echo $data['nama_siswa']; ?>"></td>
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
                <td>Kode Kelas</td>
                <td>:</td>
                <td><input type="text" name="kd_kelas" id=""value="<?php echo $data['kd_kelas']; ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id="" value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" id="" value="<?php echo $data['password']; ?>"></td>
            </tr>
            <tr>
                <td>Telpon</td>
                <td>:</td>
                <td><input type="text" name="telp" id="" value="<?php echo $data['telp']; ?>" ></td>
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
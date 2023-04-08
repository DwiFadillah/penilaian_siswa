<?php
session_start();
include '../../config/koneksi.php';
$sql = mysqli_query($conn, "select * from siswa")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="form-tambah-siswa.php">Tambah Data</a>
    <table>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Kode Kelas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Telepon</th>
            <th>Opsi</th>
        </tr>
        <?php
        while($data_siswa = mysqli_fetch_array($sql)){
            ?>
            <tr style="text-align:center;">
                <td style="width:100px;"><?php echo $data_siswa['nis']; ?></td>
                <td><?php echo $data_siswa['nama_siswa']; ?></td>
                <td><?php echo $data_siswa['tgl_lahir']; ?></td>
                <td><?php echo $data_siswa['alamat']; ?></td>
                <td><?php echo $data_siswa['kd_kelas']; ?></td>
                <td><?php echo $data_siswa['username']; ?></td>
                <td><?php echo $data_siswa['password']; ?></td>
                <td><?php echo $data_siswa['telp']; ?></td>
                <td>
                    <a href="form-edit-siswa.php?nis=<?php echo $data_siswa['nis']; ?>">Edit</a>
                    <a href="delete-siswa.php?nis=<?php echo $data_siswa['nis']; ?>">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="index.php">Back</a>
</body>
</html>
<?php
session_start();
include '../../config/koneksi.php';
$sql = mysqli_query($conn, "select * from kelas")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Kelas</title>
</head>
<body>
    <h1>Lihat Kelas</h1>
    <a href="form-tambah-siswa.php">Tambah Data</a>
    <table>
        <tr>
            <th>Kode Kelas</th>
            <th>Kelas</th>
            <th>NIP</th>
            <th>Guru</th>
            <th>Jumlah Siswa</th>
            <th>Opsi</th>
        </tr>
        <?php
        while($data_siswa = mysqli_fetch_array($sql)){
            ?>
            <tr style="text-align:center;">
                <td style="width:100px;"><?php echo $lihat_kelas['kd_kelas']; ?></td>
                <td><?php echo $data_siswa['nama_kelas']; ?></td>
                <td><?php echo $data_siswa['nip']; ?></td>
                <td><?php echo $data_siswa['nama_guru']; ?></td>
                <td><?php echo $data_siswa['jumlah_siswa']; ?></td>
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
<?php
session_start();
include '../../config/koneksi.php';
$sql = mysqli_query($conn, "select * from guru")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Guru</title>
</head>
<body>
    <h1>Data Guru</h1>
    <a href="form-tambah-guru.php">Tambah Data</a>
    <table>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Kode Mata Pelajaran</th>
            <th>Mata Pelajaran</th>
            <th>Opsi</th>
        </tr>
        <?php
        while($data_guru = mysqli_fetch_array($sql)){
            ?>
            <tr style="text-align:center;">
                <td style="width:100px;"><?php echo $data_guru['nip']; ?></td>
                <td><?php echo $data_guru['nama_guru']; ?></td>
                <td><?php echo $data_guru['tgl_lahir']; ?></td>
                <td><?php echo $data_guru['alamat']; ?></td>
                <td><?php echo $data_guru['telp']; ?></td>
                <td><?php echo $data_guru['kd_matpel']; ?></td>
                <td><?php echo $data_guru['nama_matpel']; ?></td>
                <td>
                    <a href="form-edit-guru.php?nip=<?php echo $data_guru['nip']; ?>">Edit</a>
                    <a href="delete-guru.php?nip=<?php echo $data_guru['nip']; ?>">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="index.php">Back</a>
</body>
</html>
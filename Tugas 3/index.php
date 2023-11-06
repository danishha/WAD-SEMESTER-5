<?php
require 'functions.php';
$eskrim = query("SELECT * FROM data_eskrim");
?>

<!DOCTYPE html>

<html>

<head>
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Es Krim</h1>

    <a href="tambah.php">Tambah Data Eskrim</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $eskrim as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"]; ?>">edit</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin akan menghapus data?');">hapus</a>
            </td>
            <td><img src="gambar/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>



    </table>


</body>
</html>

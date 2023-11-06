<?php
require 'functions.php';
$id = $_GET["id"];

$es = query("SELECT * FROM data_eskrim WHERE id = $id")[0];

// Latihan 5
if(isset($_POST["submit"])) {
    if(edit($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    } elseif(edit($_POST) == 0) {
        echo "
            <script>
                alert('tidak ada data yang diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
       echo "
            <script>
                alert('data gagal diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    }    
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Esktim</title>
</head>
<body>
    <h1>Edit Data Eskrim</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $es["id"] ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $es["nama"] ?>">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required
                value="<?= $es["harga"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required
                value="<?= $es["gambar"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">edit data</button>
            </li>
        </ul>
    </form>
</body>
</html>


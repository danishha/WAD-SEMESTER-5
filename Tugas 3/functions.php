<?php
// Latihan 1
$conn = mysqli_connect("localhost", "root", "", "toko_eskrim_campina");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Latihan 2
function tambah($data){
    global $conn; 
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO data_eskrim
                VALUES
                ('', '', '$nama', '$harga', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Latihan 6
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM data_eskrim WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Latihan 4
function edit($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE data_eskrim SET
                nama = '$nama',
                harga = '$harga',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?> 


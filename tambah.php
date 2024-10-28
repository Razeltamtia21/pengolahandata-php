<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="post" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label>NIM:</label>
        <input type="text" name="nim" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

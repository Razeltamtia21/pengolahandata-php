<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui.";
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
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form method="post" action="">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required>
        <br>
        <label>NIM:</label>
        <input type="text" name="nim" value="<?= $row['nim']; ?>" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

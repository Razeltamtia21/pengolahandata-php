<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

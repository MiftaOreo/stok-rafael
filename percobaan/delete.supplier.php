<?php
include 'koneksi.php'; 

$id = $_GET['id'];

$sql = "DELETE FROM vendor WHERE id='$id'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close(); 

header("Location: supplier.php");
exit();
?>

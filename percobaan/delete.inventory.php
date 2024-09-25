<?php
include 'koneksi.php'; 

$id_inventory = $_GET['id_inventory'];

$sql = "DELETE FROM inventory WHERE id_inventory='$id_inventory'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close(); 

header("Location: inventory.php");
exit();
?>

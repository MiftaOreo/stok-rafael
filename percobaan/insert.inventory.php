<?php
include 'koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_inventory = $koneksi->real_escape_string($_POST['id_inventory']);
    $nama_barang = $koneksi->real_escape_string($_POST['nama_barang']);
    $jenis_barang = $koneksi->real_escape_string($_POST['jenis_barang']);
    $harga_barang = $koneksi->real_escape_string($_POST['harga_barang']);
    $kuantitas_stok = $koneksi->real_escape_string($_POST['kuantitas_stok']);
    $lokasi = $koneksi->real_escape_string($_POST['lokasi']);
    $serial_number = $koneksi->real_escape_string($_POST['serial_number']);

    $sql = "INSERT INTO inventory (id_inventory, nama_barang, jenis_barang, harga_barang, kuantitas_stok, lokasi, serial_number) VALUES ('$id_inventory', '$nama_barang', '$jenis_barang', '$harga_barang', '$kuantitas_stok', '$lokasi', '$serial_number')";
    
    if ($koneksi->query($sql) === TRUE) {
        header("Location: inventory.php"); 
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Inventaris</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="main-content">
        <header>
            <h1>Tambah Inventaris</h1>
        </header>
        <main>
            <form action="insert.inventory.php" method="POST">
                <label for="id_inventory">ID Inventory:</label>
                <input type="text" id="id_inventory" name="id_inventory" required><br><br>

                <label for="nama_barang">Nama Barang:</label>
                <input type="text" id="nama_barang" name="nama_barang" required><br><br>

                <label for="jenis_barang">Jenis Barang:</label>
                <input type="text" id="jenis_barang" name="jenis_barang" required><br><br>

                <label for="harga_barang">Harga Barang:</label>
                <input type="text" id="harga_barang" name="harga_barang" required><br><br>

                <label for="kuantitas_stok">Kuantitas Stok:</label>
                <input type="number" id="kuantitas_stok" name="kuantitas_stok" required><br><br>

                <label for="lokasi">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" required><br><br>

                <label for="serial_number">Serial Number:</label>
                <input type="text" id="serial_number" name="serial_number" required><br><br>

                <input type="submit" value="Tambah Inventaris">
            </form>
        </main>
    </div>
</body>
</html>

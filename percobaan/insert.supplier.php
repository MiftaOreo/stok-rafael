<?php
include 'koneksi.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $koneksi->real_escape_string($_POST['id']);
    $nama = $koneksi->real_escape_string($_POST['nama']);
    $kontak = $koneksi->real_escape_string($_POST['kontak']);
    $nama_barang = $koneksi->real_escape_string($_POST['nama_barang']);
   
    $sql = "INSERT INTO vendor (id, nama, kontak, nama_barang) VALUES ('$id', '$nama', '$kontak','$nama_barang')";
    
    if ($koneksi->query($sql) === TRUE) {
        header("Location: supplier.php");
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
    <title>Tambah Supplier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="main-content">
        <header>
            <h1>Tambah Supplier</h1>
        </header>
        <main>
            <form action="insert.supplier.php" method="POST">
                <label for="id">ID :</label>
                <input type="text" id="id" name="id" required><br><br>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br><br>

                <label for="kontak">Kontak:</label>
                <input type="text" id="kontak" name="kontak" required><br><br>

                <label for="nama_barang">Nama barang:</label>
                <input type="text" id="nama_barang" name="nama_barang" required><br><br>

                <input type="submit" value="Tambah Supplier">
            </form>
        </main>
    </div>
</body>
</html>

<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $koneksi->real_escape_string($_POST['id']);
    $nama_gudang = $koneksi->real_escape_string($_POST['nama_gudang']);
    $lokasi = $koneksi->real_escape_string($_POST['lokasi']);
   
    $sql = "INSERT INTO storage_unit (id, nama_gudang, lokasi) VALUES ('$id', '$nama_gudang', '$lokasi')";
    
    if ($koneksi->query($sql) === TRUE) {
        header("Location: storage.php"); 
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
    <title>Tambah Storage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="main-content">
        <header>
            <h1>Tambah Storage</h1>
        </header>
        <main>
            <form action="insert.storage.php" method="POST">
                <label for="id">ID :</label>
                <input type="text" id="id" name="id" required><br><br>

                <label for="nama_gudang">Nama Gudang:</label>
                <input type="text" id="nama_gudang" name="nama_gudang" required><br><br>

                <label for="lokasi">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" required><br><br>

                <input type="submit" value="Tambah Storage">
            </form>
        </main>
    </div>
</body>
</html>

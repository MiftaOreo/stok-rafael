<?php
include 'koneksi.php'; 
$id_inventory = $_GET['id_inventory'];

$sql = "SELECT * FROM inventory WHERE id_inventory='$id_inventory'";
$result = $koneksi->query($sql);

if ($result->num_rows === 0) {
    die("Data tidak ditemukan.");
}

$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $koneksi->real_escape_string($_POST['nama_barang']);
    $jenis_barang = $koneksi->real_escape_string($_POST['jenis_barang']);
    $harga_barang = $koneksi->real_escape_string($_POST['harga_barang']);
    $kuantitas_stok = $koneksi->real_escape_string($_POST['kuantitas_stok']);
    $lokasi = $koneksi->real_escape_string($_POST['lokasi']);
    $serial_number = $koneksi->real_escape_string($_POST['serial_number']);

    $sql = "UPDATE inventory SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', harga_barang='$harga_barang', kuantitas_stok='$kuantitas_stok', lokasi='$lokasi', serial_number='$serial_number' WHERE id_inventory='$id_inventory'";
    
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
    <title>Update Inventaris</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="main-content">
        <header>
            <h1>Update Inventaris</h1>
        </header>
        <main>
            <form action="update.inventory.php?id_inventory=<?php echo $id_inventory; ?>" method="POST">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required><br><br>

                <label for="jenis_barang">Jenis Barang:</label>
                <input type="text" id="jenis_barang" name="jenis_barang" value="<?php echo $row['jenis_barang']; ?>" required><br><br>

                <label for="harga_barang">Harga Barang:</label>
                <input type="text" id="harga_barang" name="harga_barang" value="<?php echo $row['harga_barang']; ?>" required><br><br>

                <label for="kuantitas_stok">Kuantitas Stok:</label>
                <input type="number" id="kuantitas_stok" name="kuantitas_stok" value="<?php echo $row['kuantitas_stok']; ?>" required><br><br>

                <label for="lokasi">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" value="<?php echo $row['lokasi']; ?>" required><br><br>

                <label for="serial_number">Serial Number:</label>
                <input type="text" id="serial_number" name="serial_number" value="<?php echo $row['serial_number']; ?>" required><br><br>

                <input type="submit" value="Update Inventaris">
            </form>
        </main>
    </div>
</body>
</html>

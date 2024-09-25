<?php
include 'koneksi.php'; 

$id = $_GET['id'];

$sql = "SELECT * FROM storage_unit WHERE id='$id'";
$result = $koneksi->query($sql);

if ($result->num_rows === 0) {
    die("Data tidak ditemukan.");
}

$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $koneksi->real_escape_string($_POST['id']);
    $nama_gudang = $koneksi->real_escape_string($_POST['nama_gudang']);
    $lokasi = $koneksi->real_escape_string($_POST['lokasi']);

    $sql = "UPDATE storage_unit SET id='$id', nama_gudang='$nama_gudang', lokasi='$lokasi' WHERE id='$id'";
    
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
    <title>Update Storage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="main-content">
        <header>
            <h1>Update Storage</h1>
        </header>
        <main>
            <form action="update.storage.php?id=<?php echo $id; ?>" method="POST">
                <label for="id">id:</label>
                <input type="text" id="id" name="id" value="<?php echo $row['id']; ?>" required><br><br>

                <label for="nama_gudang">nama_gudang:</label>
                <input type="text" id="nama_gudang" name="nama_gudang" value="<?php echo $row['nama_gudang']; ?>" required><br><br>

                <label for="lokasi">lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" value="<?php echo $row['lokasi']; ?>" required><br><br>

                <input type="submit" value="Update storages">
            </form>
        </main>
    </div>
</body>
</html>

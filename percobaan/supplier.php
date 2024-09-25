<?php
include 'koneksi.php'; 

$sql = "SELECT * FROM vendor";
$result = $koneksi->query($sql);

if (!$result) {
    die("Query gagal: " . $koneksi->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css"> 
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .action-buttons a {
            text-decoration: none;
            color: #1161ee;
            padding: 5px 10px;
            border: 1px solid #1161ee;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .action-buttons a:hover {
            background-color: #e8e8e8;
        }
        .warning {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fas fa-user-shield"></i> Admin</h2>
        </div>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> dashboard</a></li>
            <li><a href="inventory.php"><i class="fas fa-clipboard-list "></i> inventory</a></li>
            <li><a href="storage.php"><i class="fas fa-boxes "></i> storage</a></li>
            <li><a href="supplier.php"><i class="fas fa-truck"></i> supplier</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Storage</h1>
            <div class="search-wrapper">
                <input type="search" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="user-wrapper">
                <img src="https://via.placeholder.com/40" alt="profile picture">
                <div>
                    <h4>Rapaboy</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <main>
            <h2>Daftar Storage</h2>
            <a href="insert.supplier.php" class="action-buttons">Tambah Data</a>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID </th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Nama barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        $no = 1;
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['kontak'] . "</td>";
                            echo "<td>" . $row['nama_barang'] . "</td>";
                            echo "<td class='action-buttons'>";
                            echo "<a href='update.supplier.php?id=" . $row['id'] . "'>Edit</a>";
                            echo "<a href='delete.supplier.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9'>Tidak ada data inventaris.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>

<?php
$koneksi->close(); 
?>

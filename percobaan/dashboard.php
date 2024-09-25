<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
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
            <h1>Dashboard</h1>
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

    </div>
</body>
</html>

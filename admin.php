<?php
session_start();
include "koneksi.php";

// Cek Login
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

// 1. Ambil data User
$u_user = $_SESSION['username'];
$user = $conn->query("SELECT * FROM user WHERE username='$u_user'")->fetch_assoc();

// 2. Statistik Data
$jml_artikel = $conn->query("SELECT count(*) as total FROM artikel")->fetch_assoc()['total'];

// Cek tabel gallery (antisipasi error jika tabel belum dibuat)
$cek_gal = $conn->query("SHOW TABLES LIKE 'gallery'");
$jml_gallery = 0;
if($cek_gal->num_rows > 0){
    $jml_gallery = $conn->query("SELECT count(*) as total FROM gallery")->fetch_assoc()['total'];
}
?>

<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <title>Admin Dashboard - Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body { background-color: #0f0f0f; }
        .card-stat { transition: transform 0.3s; border: none; }
        .card-stat:hover { transform: translateY(-5px); }
        .welcome-box {
            background: linear-gradient(45deg, #8B0000, #1a1a1a);
            border-radius: 15px;
            padding: 30px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .profile-img {
            width: 100px; height: 100px; object-fit: cover;
            border: 3px solid white; box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="p-4">
    <div class="container">
        <nav class="navbar navbar-dark bg-transparent border-bottom border-secondary mb-4">
            <span class="navbar-brand mb-0 h1 fw-bold">WEBSITE FILM / SERIAL</span>
            <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
        </nav>

        <div class="welcome-box shadow mb-5">
            <div>
                <h1 class="display-6 fw-bold">Halo, <?= $user['username'] ?>!</h1>
                <p class="lead mb-0">Selamat datang di Halaman Admin.</p>
                <a href="profil.php" class="btn btn-sm btn-light mt-3"><i class="fa-solid fa-user-pen"></i> Edit Profil</a>
            </div>
            <div class="d-none d-md-block">
                <?php if (!empty($user['foto']) && file_exists($user['foto'])): ?>
                    <img src="<?= $user['foto'] ?>" class="rounded-circle profile-img">
                <?php else: ?>
                    <img src="https://via.placeholder.com/100" class="rounded-circle profile-img">
                <?php endif; ?>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card card-stat bg-secondary text-white h-100 p-3">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="display-4 fw-bold"><?= $jml_artikel ?></h2>
                            <p class="card-text text-uppercase">Total Artikel</p>
                        </div>
                        <i class="fa-solid fa-newspaper display-1 opacity-25"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-stat bg-secondary text-white h-100 p-3">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="display-4 fw-bold"><?= $jml_gallery ?></h2>
                            <p class="card-text text-uppercase">Total Poster</p>
                        </div>
                        <i class="fa-solid fa-images display-1 opacity-25"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-stat bg-dark border border-secondary text-white h-100 p-3">
                    <div class="card-body text-center d-flex flex-column justify-content-center">
                        <p class="text-muted">Akses Website</p>
                        <a href="index.php" class="btn btn-outline-light w-100">Lihat Halaman Utama</a>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mb-3 border-start border-4 border-danger ps-3 text-white">Menu Manajemen</h4>
        <div class="row g-3">
            <div class="col-md-6">
                <a href="kelola_artikel.php" class="btn btn-dark w-100 p-4 border border-secondary text-start">
                    <i class="fa-solid fa-pen-to-square text-danger me-2"></i> Kelola Artikel Film
                </a>
            </div>
            <div class="col-md-6">
                <a href="kelola_gallery.php" class="btn btn-dark w-100 p-4 border border-secondary text-start">
                    <i class="fa-solid fa-image text-warning me-2"></i> Kelola Gallery / Poster
                </a>
            </div>
        </div>

        <footer class="mt-5 text-center text-muted small">
            &copy; 2026 Zabrina FILM Panel.
        </footer>
    </div>
</body>
</html>
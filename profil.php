<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

$username = $_SESSION['username'];
// Mengambil data user (ingat tabelnya 'user')
$data = $conn->query("SELECT * FROM user WHERE username = '$username'")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pass = $_POST['password'];
    $foto = $_FILES['foto']['name'];

    // Update Password (MD5 sesuai login.php)
    if (!empty($pass)) {
        $pass_md5 = md5($pass);
        $conn->query("UPDATE user SET password = '$pass_md5' WHERE username = '$username'");
    }

    // Update Foto
    if ($foto != "") {
        $target = "img/" . basename($foto); // Pastikan folder 'img' ada
        move_uploaded_file($_FILES['foto']['tmp_name'], $target);
        $conn->query("UPDATE user SET foto = '$target' WHERE username = '$username'");
    }
    
    echo "<script>alert('Profil berhasil diupdate!'); window.location='profil.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <title>Edit Profil Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container p-5">
    <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
        <h3 class="text-center mb-4">Profil Administrator</h3>
        
        <div class="text-center mb-3">
            <?php if($data['foto']): ?>
                <img src="<?= $data['foto'] ?>" width="120" height="120" class="rounded-circle border border-danger border-3 object-fit-cover">
            <?php else: ?>
                <img src="https://via.placeholder.com/120" class="rounded-circle">
            <?php endif; ?>
        </div>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class="form-control" value="<?= $data['username'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label>Ganti Password Baru</label>
                <input type="password" name="password" class="form-control" placeholder="(Biarkan kosong jika tidak diganti)">
            </div>
            <div class="mb-3">
                <label>Ganti Foto Profil</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-danger">Simpan Perubahan</button>
                <a href="admin.php" class="btn btn-secondary">Kembali ke Dashboard</a>
            </div>
        </form>
    </div>
</body>
</html>
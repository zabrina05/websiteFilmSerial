<?php
session_start();
include "koneksi.php";

// Cek Login
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

// Hapus Data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM gallery WHERE id='$id'");
    header("location:kelola_gallery.php");
}
?>

<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <title>Kelola Poster Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="p-5">
    <div class="container">
        <h2 class="mb-4 text-danger"><i class="bi bi-film"></i> Manajemen Poster Film</h2>
        <a href="admin.php" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>
        <a href="tambah_gallery.php" class="btn btn-danger mb-3">Tambah Poster Baru</a>

        <input type="text" id="keyword_gallery" class="form-control mb-3" placeholder="Cari judul film...">

        <table class="table table-bordered table-striped">
            <thead>
                <tr><th>No</th><th>Judul Film</th><th>Poster</th><th>Sinopsis Singkat</th><th>Aksi</th></tr>
            </thead>
            <tbody id="tabel-gallery">
                <?php
                $result = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
                $no = 1;
                while($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><img src="<?= $row['gambar'] ?>" width="80" class="rounded"></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td>
                        <a href="edit_gallery.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="kelola_gallery.php?hapus=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus poster ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#keyword_gallery').on('keyup', function() {
                $('#tabel-gallery').load('ajax_kelola_gallery.php?keyword=' + $(this).val());
            });
        });
    </script>
</body>
</html>
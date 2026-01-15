<?php
session_start();
include "koneksi.php";

// Kalau user iseng buka login.php padahal sudah login, lempar ke index2.html
if (isset($_SESSION['username'])) {
  header("location:index2.html");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = md5($_POST['password']); // Enkripsi MD5 sesuai tugasmu

  $stmt = $conn->prepare("SELECT username FROM user WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $hasil = $stmt->get_result();
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  if (!empty($row)) {
    // 1. Buat Session
    $_SESSION['username'] = $row['username'];
    
    // 2. INI KUNCINYA: Lempar ke file HTML
    header("location:admin.php"); 
    exit;
  } else {
    // Kalau salah, tetap di login tapi kasih alert pakai JS
    echo "<script>alert('Username atau Password Salah!'); window.location='login.php';</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Website Film/Serial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  </head>
  <body class="bg-danger-subtle">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card border-0 shadow rounded-5">
            <div class="card-body">
              <div class="text-center mb-3">
                <i class="bi bi-person-circle h1 display-4"></i>
                <p>Website Film/Serial</p>
                <hr />
              </div>
              <form action="" method="post">
                <input type="text" name="username" class="form-control my-4 py-2 rounded-4" placeholder="Username" required />
                <input type="password" name="password" class="form-control my-4 py-2 rounded-4" placeholder="Password" required />
                <div class="text-center my-3 d-grid">
                  <button class="btn btn-danger rounded-4">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
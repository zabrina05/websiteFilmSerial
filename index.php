<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Film / Serial</title>
    <link rel="icon" href="logo icon" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMD/CDtJ6g5/mJ+hpvGq2d+V7t0N7a/SjP6h4s0P8s8gI+gq2b09p4f8JzU/A1Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
      section[id] {
        scroll-margin-top: 100px;
      }

      body {
        line-height: 1.6;
        position: relative;
      }

      .gallery-item img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        display: block;
        margin-top: 10px;
      }

      [data-bs-theme="dark"] body {
        background-color: #212529;
        color: #e9ecef;
      }
      [data-bs-theme="dark"] .main-header {
        background-color: #343a40;
        border-bottom: 4px solid #0de1f0;
      }
      [data-bs-theme="dark"] .navbar {
        background-color: #343a40 !important;
        border-bottom: 1px solid #495057;
      }
      [data-bs-theme="dark"] .navbar-nav .nav-link {
        color: #e9ecef;
      }
      [data-bs-theme="dark"] .navbar-nav .nav-link:hover,
      [data-bs-theme="dark"] .navbar-nav .nav-link.active {
        color: #0dcaf0;
      }
      [data-bs-theme="dark"] h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        color: #0dcaf0;
      }
      [data-bs-theme="dark"] .card,
      [data-bs-theme="dark"] .gallery-item {
        background-color: #343a40;
        border: 1px solid #495057;
      }
      [data-bs-theme="dark"] form fieldset {
        background-color: #343a40;
        border: 1px solid #495057;
      }
      [data-bs-theme="dark"] form legend {
        color: #0dcaf0;
      }
      [data-bs-theme="dark"] footer {
        background-color: #343a40;
        color: #adb5bd;
        border-top: 1px solid #495057;
      }

      [data-bs-theme="light"] body {
        background-color: #f8f9fa;
        color: #212529;
      }
      [data-bs-theme="light"] .main-header {
        background-color: #e9ecef;
        border-bottom: 4px solid #0d6efd;
      }
      [data-bs-theme="light"] .navbar {
        background-color: #e9ecef !important;
        border-bottom: 1px solid #dee2e6;
      }
      [data-bs-theme="light"] .navbar-nav .nav-link {
        color: #212529;
      }
      [data-bs-theme="light"] .navbar-nav .nav-link:hover,
      [data-bs-theme="light"] .navbar-nav .nav-link.active {
        color: #0d6efd;
      }
      [data-bs-theme="light"] h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        color: #0d6efd;
      }
      [data-bs-theme="light"] .card,
      [data-bs-theme="light"] .gallery-item {
        background-color: #fff;
        border: 1px solid #dee2e6;
      }
      [data-bs-theme="light"] form fieldset {
        background-color: #fff;
        border: 1px solid #dee2e6;
      }
      [data-bs-theme="light"] form legend {
        color: #0d6efd;
      }
      [data-bs-theme="light"] footer {
        background-color: #e9ecef;
        color: #6c757d;
        border-top: 1px solid #dee2e6;
      }

      .card {
        height: 100%;
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
      }
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
      }

      #scrollToTopBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #0dcaf0;
        color: white;
        cursor: pointer;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
      }
      #scrollToTopBtn:hover {
        background-color: #0aa3b8;
      }

      #scrollToTopBtn svg {
        width: 24px;
        height: 24px;
        fill: currentColor;
      }
    </style>
  </head>

  <body data-bs-spy="scroll" data-bs-target="#navbar-main" data-bs-offset="120">
    <header class="main-header text-center">
      <h1>Website Film/Serial & Rekomendasi!!</h1>
      <p class="lead" id="currentDateTime"></p>
    </header>

    <nav id="navbar-main" class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavContent"
          aria-controls="navbarNavContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#articles">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="logout.php"
                style="color: red; font-weight: bold"
                >Logout</a
              >
            </li>
          </ul>

          <div class="d-flex ms-lg-3 mt-2 mt-lg-0">
            <button
              id="darkModeBtn"
              class="btn btn-sm btn-dark me-2"
              title="Dark Mode"
            >
              <i class="fas fa-moon"></i> Dark
            </button>
            <button
              id="lightModeBtn"
              class="btn btn-sm btn-light"
              title="Light Mode"
            >
              <i class="fas fa-sun"></i> Light
            </button>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <section id="home" class="container my-5">
        <div
          class="profile p-4 mb-5 rounded-3"
          style="background-color: #343a40"
        >
          <h2>Identitas Mahasiswa</h2>
          <p class="lead">Nama: Zabrina Miftah Zulaikha</p>
          <p class="lead">NIM: A11.2024.15826</p>
          <p class="lead">Jurusan: Teknik Informatika S1</p>
          <hr />
          <p>Selamat datang di dunia Film Dan Serial!!</p>
        </div>

        <div class="list-artikel mb-5">
          <h2>Daftar Genre Film/Serial</h2>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
              <article class="card">
                <div class="card-body">
                  <h3 class="card-title">Action</h3>
                  <p class="card-text">
                    Genre yang berfokus pada adegan fisik seperti perkelahian,
                    kejar-kejaran, dan ledakan.
                  </p>
                  <a href="#detail1" class="btn btn-primary btn-sm"
                    >Lihat Rekomendasi</a
                  >
                </div>
              </article>
            </div>
            <div class="col">
              <article class="card">
                <div class="card-body">
                  <h3 class="card-title">Horor</h3>
                  <p class="card-text">
                    Genre yang dirancang untuk menakut-nakuti melalui tema gelap
                    dan supranatural.
                  </p>
                  <a href="#detail2" class="btn btn-primary btn-sm"
                    >Lihat Rekomendasi</a
                  >
                </div>
              </article>
            </div>
            <div class="col">
              <article class="card">
                <div class="card-body">
                  <h3 class="card-title">Thriller</h3>
                  <p class="card-text">
                    Genre yang membangun ketegangan, kecemasan, dan kejutan.
                  </p>
                  <a href="#detail3" class="btn btn-primary btn-sm"
                    >Lihat Rekomendasi</a
                  >
                </div>
              </article>
            </div>
            <div class="col">
              <article class="card">
                <div class="card-body">
                  <h3 class="card-title">Romance</h3>
                  <p class="card-text">
                    Genre yang melibatkan kisah cinta romantis dan konflik
                    percintaan.
                  </p>
                  <a href="#detail4" class="btn btn-primary btn-sm"
                    >Lihat Rekomendasi</a
                  >
                </div>
              </article>
            </div>
          </div>
        </div>

        <hr class="my-5" />
        
        <section id="articles" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Artikel Terbaru Film/Serial</h2>
            
            <div class="row justify-content-center mb-5">
                <div class="col-md-6">
                    <input type="text" id="keyword" class="form-control form-control-lg" placeholder="Cari artikel (ketik: Action, Horror, dll)...">
                </div>
            </div>

            <div class="row g-4" id="article-container">
                
                <?php
                // Materi 1: READ DATA PHP (Tampilkan data awal saat load)
                include "koneksi.php";
                $sql = "SELECT * FROM artikel";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0">
                            <?php if($row['gambar'] != ""): ?>
                                <img src="<?= $row['gambar'] ?>" class="card-img-top" alt="img" style="height: 200px; object-fit: cover;">
                            <?php else: ?>
                                <div class="card-body text-center"><i class="bi bi-book-half fs-1 text-primary"></i></div>
                            <?php endif; ?>
                            
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $row['judul'] ?></h5>
                                <p class="card-text"><?= $row['isi'] ?></p>
                                <a href="<?= $row['link_ref'] ?>" class="btn btn-sm btn-outline-primary mt-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php 
                    } // end while
                } else {
                    echo "<p class='text-center'>Belum ada artikel.</p>";
                }
                ?>

            </div>
        </div>
    </section>


        <hr class="my-5" />

        <div id="detail1" class="mb-5">
          <h2>Rekomendasi Film/Serial Action</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">1. Venom : The Last Dance</h4>
                  <p class="card-text">Eddie Brock dan Venom dalam pelarian.</p>
                  <a
                    href="https://www.netflix.com/title/81680567"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">2. Demon Slayer</h4>
                  <p class="card-text">Musim Hashira Training Arc.</p>
                  <a
                    href="https://www.netflix.com/title/81091393"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">3. Jujutsu Kaisen</h4>
                  <p class="card-text">
                    Yuta Okkotsu bergabung Sekolah Jujutsu.
                  </p>
                  <a
                    href="https://www.netflix.com/title/81602834"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div id="detail2" class="mb-5">
          <h2>Rekomendasi Film/Serial Horor</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">1. Petaka Gunung Gede</h4>
                  <p class="card-text">Kisah nyata pendakian berujung teror.</p>
                  <a
                    href="https://www.netflix.com/title/82030221"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">2. Sumala</h4>
                  <p class="card-text">Legenda urban Semarang.</p>
                  <a
                    href="https://www.netflix.com/title/81971171"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">3. Pengabdi Setan</h4>
                  <p class="card-text">Keluarga dihantui sosok ibu.</p>
                  <a
                    href="https://www.netflix.com/title/81050768"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div id="detail3" class="mb-5">
          <h2>Rekomendasi Film/Serial Thriller</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">1. Dendam Malam Kelam</h4>
                  <p class="card-text">Thriller psikologis dosen.</p>
                  <a
                    href="https://www.netflix.com/title/82057593"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">2. Until Dawn</h4>
                  <p class="card-text">Bertahan hidup dari pembunuh.</p>
                  <a
                    href="https://www.netflix.com/title/81095950"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">3. Wednesday</h4>
                  <p class="card-text">Misteri di Nevermore Academy.</p>
                  <a
                    href="https://www.netflix.com/title/81231974"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div id="detail4" class="mb-5">
          <h2>Rekomendasi Film/Serial Romance</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">1. Komang</h4>
                  <p class="card-text">Kisah cinta Raim Laode.</p>
                  <a
                    href="https://www.netflix.com/title/82064627"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">2. Lovely Runner</h4>
                  <p class="card-text">Kembali ke masa lalu.</p>
                  <a
                    href="https://www.netflix.com/title/81914565"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">3. Descendants of the Sun</h4>
                  <p class="card-text">Kisah cinta Kapten dan Dokter.</p>
                  <a
                    href="https://www.netflix.com/title/80123798"
                    class="btn btn-outline-light btn-sm"
                    target="_blank"
                    >Tonton Sekarang</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr class="my-5 border-3 border-secondary" />

      <section id="gallery" class="py-5 text-white">
        <div class="container">
            <h2 class="text-center mb-4">Gallery Film & Serial</h2>
            <div class="row g-4">
                <?php
                include "koneksi.php";
                $sql_g = "SELECT * FROM gallery";
                $res_g = $conn->query($sql_g);
                while($g = $res_g->fetch_assoc()){
                ?>
                <div class="col-md-4">
                    <div class="card bg-black text-white border-0 h-100 shadow">
                        <img src="<?= $g['gambar'] ?>" class="card-img-top" style="height: 250px; object-fit: cover; opacity: 0.8;">
                        <div class="card-body p-2">
                            <h6 class="card-title text-center small"><?= $g['judul'] ?></h6>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

      <hr class="my-5 border-3 border-secondary" />

      <section id="kontak" class="container my-5">
        <h2 class="text-center">Form Buku Tamu Penonton Film</h2>
        <div class="row justify-content-center mt-4">
          <div class="col-lg-8">
            <form action="#" method="post">
              <fieldset class="p-4 p-md-5 rounded-3">
                <legend class="fs-4 fw-bold mb-4 text-center">
                  Isi Buku Tamu Pecinta Film
                </legend>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap:</label
                  ><input
                    type="text"
                    class="form-control"
                    id="nama"
                    name="nama"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label
                  ><input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="tgl_lahir" class="form-label"
                    >Tanggal Lahir:</label
                  ><input
                    type="date"
                    class="form-control"
                    id="tgl_lahir"
                    name="tgl_lahir"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="telepon" class="form-label">Nomor Telepon:</label
                  ><input
                    type="tel"
                    class="form-control"
                    id="telepon"
                    name="telepon"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="film" class="form-label"
                    >Film/Serial Favorit:</label
                  ><input
                    type="text"
                    class="form-control"
                    id="film"
                    name="film"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="genre" class="form-label">Genre Favorit:</label
                  ><select class="form-select" id="genre" name="genre">
                    <option>Action</option>
                    <option>Horror</option>
                    <option>Thriller</option>
                    <option>Romance</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="rating" class="form-label"
                    >Rating Film (1-10):</label
                  ><input
                    type="number"
                    class="form-control"
                    id="rating"
                    name="rating"
                    min="1"
                    max="10"
                  />
                </div>
                <div class="mb-3">
                  <label for="kesan" class="form-label"
                    >Kesan Setelah Menonton:</label
                  ><textarea
                    class="form-control"
                    id="kesan"
                    name="kesan"
                    rows="4"
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-lg mt-3">
                  Kirim
                </button>
              </fieldset>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="py-4 mt-5 text-center">
      <p>
        &copy; 2025 Tugas HTML Dasar.
        <a
          href="https://www.netflix.com/browse"
          class="text-decoration-none"
          target="_blank"
          >Netflix Official Website</a
        >
      </p>
    </footer>

    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-arrow-up"
        viewBox="0 0 16 16"
      >
        <path
          fill-rule="evenodd"
          d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"
        />
      </svg>
    </button>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        function updateDateTime() {
          const now = new Date();
          const options = {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
            timeZoneName: "short",
          };
          document.getElementById("currentDateTime").textContent =
            now.toLocaleDateString("id-ID", options);
        }
        updateDateTime();
        setInterval(updateDateTime, 1000);

        const htmlElement = document.querySelector("html");
        const darkModeBtn = document.getElementById("darkModeBtn");
        const lightModeBtn = document.getElementById("lightModeBtn");
        const profileDiv = document.querySelector(".profile");

        function setTheme(theme) {
          htmlElement.setAttribute("data-bs-theme", theme);
          localStorage.setItem("theme", theme);
          if (profileDiv) {
            profileDiv.style.backgroundColor =
              theme === "dark" ? "#343a40" : "#e9ecef";
          }
        }
        const storedTheme = localStorage.getItem("theme") || "dark";
        setTheme(storedTheme);

        if (darkModeBtn)
          darkModeBtn.addEventListener("click", () => setTheme("dark"));
        if (lightModeBtn)
          lightModeBtn.addEventListener("click", () => setTheme("light"));

        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        window.onscroll = function () {
          if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
          ) {
            scrollToTopBtn.style.display = "flex";
          } else {
            scrollToTopBtn.style.display = "none";
          }
        };
      });

      function topFunction() {
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Event ketika user mengetik di kolom pencarian
            $('#keyword').on('keyup', function() {
                var nilaiPencarian = $(this).val();

                // Fungsi .load() dari JQuery untuk mengambil data dari ajax_cari.php
                // Syntax: $(selector).load(URL + data);
                $('#article-container').load('ajax_cari.php?keyword=' + nilaiPencarian);
            });
        });
    </script>

  </body>
</html>

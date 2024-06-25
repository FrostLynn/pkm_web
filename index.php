<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $navKal = '<a class="nav-link " href="#kalkulasi">Kalkulasi</a>';
  $navLink = "<li class='nav-item'><a class='nav-link' href='dashboard.php'>Hello, $username!</a></li>";  
} else {
  $navKal = '';
  $navLink = "<li class='nav-item'><a class='nav-link' href='auth.php'>Login</a></li>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrowWise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets\img\icon-logo.png" alt="icon" style="width: 100px; height:auto;">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto fs-5 mx-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
              </li>
              <li class="nav-item">
                <?php echo $navKal; ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#edukasi">Edukasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <?php echo $navLink; ?>
              </li>
          </div>
        </div>
      </nav>
    <!--Navbar End-->

    <!--Home Start-->
    <section id="home">
        <div class="row align-items-center">
            <div class="col mx-5">
              <h3>Langkah Kecil, Tumbuh Besar</h3>
              <h2>Bersama Lawan <br> Stunting!</h2>
            </div>
            <div class="col-md-6 text-end">
                <img src="assets\img\baby.png" style="width: 500px; height:auto;" alt="Placeholder Image">
            </div>
        </div>
    </section>
    <!--Home End-->

<!-- Kalkulasi Start -->
<?php if (isset($_SESSION['username'])): ?>
<section id="kalkulasi" class="full-screen-section">
    <div class="container text-center my-5">
        <h2 class="mb-5" style="color:#606C38">Kalkulasi</h2>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card" style="outline:solid 8px #606C38 ;width: 45rem;">
                    <div class="card-body">
                        <form action="hasil_hitung.php" method="GET">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="form-nama" name="nama" placeholder="nama">
                                <label for="floatingInput">Nama Anak</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="form-kelamin" name="kelamin" aria-label="Floating label select">
                                    <option selected disabled>Pilih</option>
                                    <option value="0">Perempuan</option>
                                    <option value="1">Laki-Laki</option>
                                </select>
                                <label for="form-kelamin">Jenis Kelamin</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="form-umur" name="umur" placeholder="umur">
                                <label for="floatingInput">Usia (dalam bulan)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="form-bb" name="bb" placeholder="bb">
                                <label for="floatingInput">Berat badan (kg)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="form-tb" name="tb" placeholder="tb">
                                <label for="floatingInput">Tinggi badan (cm)</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="form-lk" name="lk" placeholder="lk">
                                <label for="floatingInput">Lingkar Kepala (cm)</label>
                            </div>
                            <div class="mt-3 d-grid gap-2">
                                <button type="submit" class="btn" id="submit-btn" style="background-color:#606C38; color:white;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Kalkulasi End -->



    <!--Edukasi Start-->
    <section id="edukasi" class="edukasi-section">
      <div class="container">
        <h2 class="my-5">Edukasi</h2>
        <div class="row my-5">
          <div class="col-md-2 offset-md-1 icon-container">
            <img src="assets\img\growth.jpg" class="rounded-circle" alt="Pertumbuhan">
            <h5>Pertumbuhan</h5>
            <p>Temukan langkah-langkah penting dalam perkembangan anak</p>
          </div>
          <div class="col-md-2 icon-container">
            <img src="assets\img\pohon.jpg" class="rounded-circle" alt="Perkembangan">
            <h5>Perkembangan</h5>
            <p>Temukan langkah-langkah penting dalam perkembangan anak</p>
          </div>
          <div class="col-md-2 icon-container">
            <img src="assets\img\daungarpu.jpg" class="rounded-circle" alt="Kebutuhan Gizi">
            <h5>Kebutuhan Gizi</h5>
            <p>Jelajahi informasi terbaru tentang kebutuhan gizi anak dengan kami</p>
          </div>
          <div class="col-md-2 icon-container">
            <img src="assets\img\life.jpg" class="rounded-circle" alt="Tips Sehat">
            <h5>Tips Sehat</h5>
            <p>Dapatkan wawasan berharga tentang tips kesehatan untuk anak-anak</p>
          </div>
          <div class="col-md-2 icon-container">
            <img src="assets\img\hijau.jpeg" class="rounded-circle" alt="Imunisasi">
            <h5>Imunisasi</h5>
            <p>Optimalkan kesehatan anak dengan jadwal imunisasi yang tepat</p>
          </div>
        </div>
      </div>
    </section>
    <!--Edukasi END-->

    <!--Artikel Start-->
    <section id="artikel" class="artikel-section">
      <div class="container">
        <h2 class="my-3">Artikel</h2>
        <div id="customCarousel" class="carousel slide custom-carousel" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/apa-itu-stunting" target="_blank"><img src="https://mysiloam-api.siloamhospitals.com/public-asset/website-cms/website-cms-16693456360918935.webp" class="d-block" alt="First Slide"></a>
              <div class="carousel-caption">
                <p>Mengenal Stunting - Pengertian, Penyebab, dan Pencegahannya</p>
                <p>siloamhospitals.com</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUJcmljayByb2xs" target="_blank"><img src="https://p2ptm.kemkes.go.id/uploads/VHcrbkVobjRzUDN3UCs4eUJ0dVBndz09/2017/stunting_01.png" class="d-block" alt="Second Slide"></a>
              <div class="carousel-caption">
                <p>Cegah Stunting dengan Perbaikan Pola Makan, Pola Asuh dan Sanitasi</p>
                <p>p2ptm.kemkes.go.id</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="https://diskes.jabarprov.go.id/informasipublik/detail_berita/ZEcxcTZrTitsU09JVXpFdlQydHJ3Zz09" target="_blank"><img src="https://diskes.jabarprov.go.id/assets/berita/fc09268ef1c43e4080ab6c0e0c914551.png" class="d-block" alt="Third Slide"></a>
              <div class="carousel-caption">
                <p>Dinkes Targetkan Jabar Zero New Stunting Pada 2023</p>
                <p>diskes.jabarprov.go.id</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="https://stunting.go.id/upaya-pengentasan-stunting-peluncuran-posyandu-ilp-di-mempawah-libatkan-berbagai-elemen-masyarakat/" target="_blank"><img src="assets\img\artikel1.png" class="d-block" alt="Fourth Slide"></a>
              <div class="carousel-caption">
                <p>Upaya Pengentasan Stunting: Peluncuran Posyandu ILP di Mempawah Libatkan Berbagai Elemen Masyarakat</p>
                <p>stunting.go.id</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!--Artikel END-->

    <!--Upload Start-->
    <section id="upload" class="upload-section my-5">
      <div class="container">
        <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item me-3" role="presentation">
            <button class="nav-link active" id="pills-artikel-tab" data-bs-toggle="pill" data-bs-target="#pills-artikel" type="button" role="tab" aria-controls="pills-artikel" aria-selected="true">Artikel</button>
          </li>
          <li class="nav-item ms-3" role="presentation">
            <button class="nav-link" id="pills-konsul-tab" data-bs-toggle="pill" data-bs-target="#pills-konsul" type="button" role="tab" aria-controls="pills-konsul" aria-selected="false">Konsultasi</button>
          </li>
        </ul>
        <div class="tab-content d-flex justify-content-center" id="pills-tabContent">
          <!-- Artikel Tab Content -->
        <div class="tab-pane fade show active" id="pills-artikel" role="tabpanel" aria-labelledby="pills-artikel-tab" tabindex="0">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="card" style="outline:solid 8px #606C38 ;width: 45rem;">
                        <div class="card-body">
                            <form action="upload_pdf.php" method="post" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="form-nama-artikel" name="nama" placeholder="nama">
                                    <label for="form-nama-artikel">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="form-notelp-artikel" name="notelp" placeholder="notelp">
                                    <label for="form-notelp-artikel">Nomor Telepon</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="form-email-artikel" name="email" placeholder="email">
                                    <label for="form-email-artikel">Email</label>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1" for="pdfUpload">Upload Artikel (PDF)</label>
                                    <input type="file" class="form-control" id="pdfUpload" name="pdf" accept=".pdf" placeholder="Upload PDF">
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn" style="background-color:#606C38; color:white;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <div class="tab-pane fade" id="pills-konsul" role="tabpanel" aria-labelledby="pills-konsul-tab" tabindex="0">
            <div class="row">
              <div class="col d-flex justify-content-center">
                <div class="card" style="outline:solid 8px #606C38 ;width: 45rem;">
                  <div class="card-body">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="form-nama-konsul" placeholder="nama">
                      <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="form-instansi-konsul" placeholder="instansi">
                      <label for="floatingInput">Instansi</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="form-alamat-konsul" placeholder="alamat">
                      <label for="floatingInput">Alamat Instansi</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="form-notelp-konsul" placeholder="notelp">
                      <label for="floatingInput">Nomor Telepon</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="form-email-kosnsul" placeholder="email">
                      <label for="floatingInput">Email</label>
                    </div>
                    <div class="mt-3 d-grid gap-2">
                      <button type="submit" class="btn" style="background-color:#606C38; color:white;">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Upload END-->

    <div class="modal fade" id="uploadSuccessModal" tabindex="-1" aria-labelledby="uploadSuccessModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="uploadSuccessModalLabel">Upload Successful</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            PDF anda telah berhasi diupload!<br>
            Tunggu konfirmasi dari kami
            agar artikel bisa ditampilkan.
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>

    <!--Footer Start-->
    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>GrowWise</h5>
                    <p>Langkah Kecil, Tumbuh Besar. Bersama Lawan Stunting!</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer END-->

<!--END OF BODY-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<!--<script>
  document.getElementById('submit-btn').addEventListener('click', function() {
    var nama = document.getElementById('form-nama').value;
    var umur = parseInt(document.getElementById('form-umur').value);
    var kelamin = parseInt(document.getElementById('form-kelamin').value);
    var tb = parseFloat(document.getElementById('form-tb').value);
    var lk = parseFloat(document.getElementById('form-lk').value);

    var zScoreDataTb = {
      'laki-laki': {
        0: { median: 49.8842, sd: 1.8931 },
        1: { median: 54.7244, sd: 1.9465 },
        2: { median: 58.4249, sd: 2.0005 },
        3: { median: 61.4292, sd: 2.0444 },
        4: { median: 63.886, sd: 2.0808 },
        5: { median: 65.9026, sd: 2.1115 },
        6: { median: 67.6236, sd: 2.1403 },
        7: { median: 69.1645, sd: 2.1711 },
        8: { median: 70.5994, sd: 2.2055 },
        9: { median: 71.9687, sd: 2.2433 },
        10: { median: 73.2812, sd: 2.2849 },
        11: { median: 74.5388, sd: 2.3293 },
        12: { median: 75.7488, sd: 2.3762 },
        13: { median: 76.9186, sd: 2.426 },
        14: { median: 78.0497, sd: 2.4773 },
        15: { median: 79.1458, sd: 2.5303 },
        16: { median: 80.2113, sd: 2.5844 },
        17: { median: 81.2487, sd: 2.6406 },
        18: { median: 82.2587, sd: 2.6973 },
        19: { median: 83.2418, sd: 2.7553 },
        20: { median: 84.1996, sd: 2.814 },
        21: { median: 85.1348, sd: 2.8742 },
        22: { median: 86.0477, sd: 2.9342 },
        23: { median: 86.941, sd: 2.9951 },
        24: { median: 87.8161, sd: 3.0551 },
        25: { median: 87.972, sd: 3.116 },
        26: { median: 88.8065, sd: 3.1757 },
        27: { median: 89.6197, sd: 3.2353 },
        28: { median: 90.412, sd: 3.2928 },
        29: { median: 91.1828, sd: 3.3501 },
        30: { median: 91.9327, sd: 3.4052 },
        31: { median: 92.6631, sd: 3.4591 },
        32: { median: 93.3753, sd: 3.5118 },
        33: { median: 94.0711, sd: 3.5625 },
        34: { median: 94.7532, sd: 3.612 },
        35: { median: 95.4236, sd: 3.6604 },
        36: { median: 96.0835, sd: 3.7069 },
        37: { median: 96.7337, sd: 3.7523 },
        38: { median: 97.3749, sd: 3.7976 },
        39: { median: 98.0073, sd: 3.8409 },
        40: { median: 98.631, sd: 3.8831 },
        41: { median: 99.2459, sd: 3.9242 },
        42: { median: 99.8515, sd: 3.9651 },
        43: { median: 100.4485, sd: 4.0039 },
        44: { median: 101.0374, sd: 4.0435 },
        45: { median: 101.6186, sd: 4.081 },
        46: { median: 102.1933, sd: 4.1194 },
        47: { median: 102.7625, sd: 4.1567 },
        48: { median: 103.3273, sd: 4.1941 },
        49: { median: 103.8886, sd: 4.2314 },
        50: { median: 104.4473, sd: 4.2677 },
        51: { median: 105.0041, sd: 4.3052 },
        52: { median: 105.5596, sd: 4.3417 },
        53: { median: 106.1138, sd: 4.3783 },
        54: { median: 106.6668, sd: 4.4149 },
        55: { median: 107.2188, sd: 4.4517 },
        56: { median: 107.7697, sd: 4.4886 },
        57: { median: 108.3198, sd: 4.5245 },
        58: { median: 108.8689, sd: 4.5616 },
        59: { median: 109.417, sd: 4.5977 },
        60: { median: 109.9638, sd: 4.6339}
      },
      'perempuan': {
        0: { median: 49.1477, sd: 1.8627 },
        1: { median: 53.6872, sd: 1.9542 },
        2: { median: 57.0673, sd: 2.0362 },
        3: { median: 59.8029, sd: 2.1051 },
        4: { median: 62.0899, sd: 2.1645 },
        5: { median: 64.0301, sd: 2.2174 },
        6: { median: 65.7311, sd: 2.2664 },
        7: { median: 67.2873, sd: 2.3154 },
        8: { median: 68.7498, sd: 2.365 },
        9: { median: 70.1435, sd: 2.4157 },
        10: { median: 71.4818, sd: 2.4676 },
        11: { median: 72.771, sd: 2.5208 },
        12: { median: 74.015, sd: 2.575 },
        13: { median: 75.2176, sd: 2.6296 },
        14: { median: 76.3817, sd: 2.6841 },
        15: { median: 77.5099, sd: 2.7392 },
        16: { median: 78.6055, sd: 2.7944 },
        17: { median: 79.671, sd: 2.849 },
        18: { median: 80.7079, sd: 2.9039 },
        19: { median: 81.7182, sd: 2.9582 },
        20: { median: 82.7036, sd: 3.0129 },
        21: { median: 83.6654, sd: 3.0672 },
        22: { median: 84.604, sd: 3.1202 },
        23: { median: 85.5202, sd: 3.1737 },
        24: { median: 86.4153, sd: 3.2267 },
        25: { median: 86.5904, sd: 3.2783 },
        26: { median: 87.4462, sd: 3.33 },
        27: { median: 88.283, sd: 3.3812 },
        28: { median: 89.1004, sd: 3.4313 },
        29: { median: 89.8991, sd: 3.4809 },
        30: { median: 90.6797, sd: 3.5296 },
        31: { median: 91.4428, sd: 3.5774 },
        32: { median: 92.189, sd: 3.6239 },
        33: { median: 92.919, sd: 3.6703 },
        34: { median: 93.633, sd: 3.7156 },
        35: { median: 94.3323, sd: 3.7598 },
        36: { median: 95.0174, sd: 3.8032 },
        37: { median: 95.6885, sd: 3.8459 },
        38: { median: 96.3471, sd: 3.8877 },
        39: { median: 96.9935, sd: 3.9289 },
        40: { median: 97.6289, sd: 3.9689 },
        41: { median: 98.2533, sd: 4.0086 },
        42: { median: 98.8677, sd: 4.0477 },
        43: { median: 99.4727, sd: 4.086 },
        44: { median: 100.0685, sd: 4.1238 },
        45: { median: 100.6557, sd: 4.1612 },
        46: { median: 101.235, sd: 4.1979 },
        47: { median: 101.807, sd: 4.2344 },
        48: { median: 102.3725, sd: 4.2705 },
        49: { median: 102.9319, sd: 4.3063 },
        50: { median: 103.486, sd: 4.3418 },
        51: { median: 104.0353, sd: 4.3769 },
        52: { median: 104.5807, sd: 4.4119 },
        53: { median: 105.1224, sd: 4.4466 },
        54: { median: 105.6604, sd: 4.4809 },
        55: { median: 106.195, sd: 4.5152 },
        56: { median: 106.7265, sd: 4.5493 },
        57: { median: 107.2548, sd: 4.5829 },
        58: { median: 107.7799, sd: 4.6166 },
        59: { median: 108.3023, sd: 4.6496 },
        60: { median: 109.4233, sd: 4.7566 }
      }
    };

    var zScoreDataLk = {
      'laki-laki': {
        0: { median: 34.4618, sd: 1.2703 },
        1: { median: 37.2759, sd: 1.1679 },
        2: { median: 39.1285, sd: 1.1727 },
        3: { median: 40.5135, sd: 1.1822 },
        4: { median: 41.6317, sd: 1.194 },
        5: { median: 42.5576, sd: 1.2074 },
        6: { median: 43.3306, sd: 1.2206 },
        7: { median: 43.9803, sd: 1.2332 },
        8: { median: 44.53, sd: 1.2451 },
        9: { median: 44.9998, sd: 1.2564 },
        10: { median: 45.4051, sd: 1.2668 },
        11: { median: 45.7573, sd: 1.2762 },
        12: { median: 46.0661, sd: 1.2848 },
        13: { median: 46.3395, sd: 1.2924 },
        14: { median: 46.5844, sd: 1.3002 },
        15: { median: 46.806, sd: 1.3068 },
        16: { median: 47.0088, sd: 1.3139 },
        17: { median: 47.1962, sd: 1.3201 },
        18: { median: 47.3711, sd: 1.3264 },
        19: { median: 47.5357, sd: 1.3324 },
        20: { median: 47.6919, sd: 1.3382 },
        21: { median: 47.8408, sd: 1.3443 },
        22: { median: 47.9833, sd: 1.3498 },
        23: { median: 48.1201, sd: 1.3555 },
        24: { median: 48.2515, sd: 1.3612 },
        25: { median: 48.3777, sd: 1.3667 },
        26: { median: 48.4989, sd: 1.3725 },
        27: { median: 48.6151, sd: 1.3778 },
        28: { median: 48.7264, sd: 1.3829 },
        29: { median: 48.8331, sd: 1.3878 },
        30: { median: 48.9351, sd: 1.3932 },
        31: { median: 49.0327, sd: 1.3979 },
        32: { median: 49.126, sd: 1.4026 },
        33: { median: 49.2153, sd: 1.4071 },
        34: { median: 49.3007, sd: 1.4115 },
        35: { median: 49.3826, sd: 1.4158 },
        36: { median: 49.4612, sd: 1.42 },
        37: { median: 49.5367, sd: 1.4242 },
        38: { median: 49.6093, sd: 1.4278 },
        39: { median: 49.6791, sd: 1.4318 },
        40: { median: 49.7465, sd: 1.4357 },
        41: { median: 49.8116, sd: 1.4391 },
        42: { median: 49.8745, sd: 1.4429 },
        43: { median: 49.9354, sd: 1.4461 },
        44: { median: 49.9942, sd: 1.4493 },
        45: { median: 50.0512, sd: 1.453 },
        46: { median: 50.1064, sd: 1.4561 },
        47: { median: 50.1598, sd: 1.4592 },
        48: { median: 50.2115, sd: 1.4622 },
        49: { median: 50.2617, sd: 1.4651 },
        50: { median: 50.3105, sd: 1.4681 },
        51: { median: 50.3578, sd: 1.471 },
        52: { median: 50.4039, sd: 1.4738 },
        53: { median: 50.4488, sd: 1.4766 },
        54: { median: 50.4926, sd: 1.4789 },
        55: { median: 50.5354, sd: 1.4817 },
        56: { median: 50.5772, sd: 1.4844 },
        57: { median: 50.6183, sd: 1.4872 },
        58: { median: 50.6587, sd: 1.4894 },
        59: { median: 50.6984, sd: 1.4921 },
        60: { median: 50.7375, sd: 1.4947 }

      },
      'perempuan': {
        0: { median: 33.8787, sd: 1.1844 },
        1: { median: 36.5463, sd: 1.1731 },
        2: { median: 38.2521, sd: 1.2118 },
        3: { median: 39.5328, sd: 1.2413 },
        4: { median: 40.5817, sd: 1.2657 },
        5: { median: 41.459, sd: 1.2861 },
        6: { median: 42.1995, sd: 1.3027 },
        7: { median: 42.829, sd: 1.317 },
        8: { median: 43.3671, sd: 1.3283 },
        9: { median: 43.83, sd: 1.3381 },
        10: { median: 44.2319, sd: 1.3464 },
        11: { median: 44.5844, sd: 1.3531 },
        12: { median: 44.8965, sd: 1.359 },
        13: { median: 45.1752, sd: 1.3638 },
        14: { median: 45.4265, sd: 1.3683 },
        15: { median: 45.6551, sd: 1.3724 },
        16: { median: 45.865, sd: 1.3755 },
        17: { median: 46.0598, sd: 1.3786 },
        18: { median: 46.2424, sd: 1.3813 },
        19: { median: 46.4152, sd: 1.3841 },
        20: { median: 46.5801, sd: 1.3867 },
        21: { median: 46.7384, sd: 1.3891 },
        22: { median: 46.8913, sd: 1.3913 },
        23: { median: 47.0391, sd: 1.3933 },
        24: { median: 47.1822, sd: 1.3952 },
        25: { median: 47.3204, sd: 1.3974 },
        26: { median: 47.4536, sd: 1.3994 },
        27: { median: 47.5817, sd: 1.4013 },
        28: { median: 47.7045, sd: 1.403 },
        29: { median: 47.8219, sd: 1.4045 },
        30: { median: 47.934, sd: 1.4059 },
        31: { median: 48.041, sd: 1.4071 },
        32: { median: 48.1432, sd: 1.4087 },
        33: { median: 48.2408, sd: 1.4096 },
        34: { median: 48.3343, sd: 1.4109 },
        35: { median: 48.4239, sd: 1.4116 },
        36: { median: 48.5099, sd: 1.4126 },
        37: { median: 48.5926, sd: 1.4136 },
        38: { median: 48.6722, sd: 1.4144 },
        39: { median: 48.7489, sd: 1.4152 },
        40: { median: 48.8228, sd: 1.4159 },
        41: { median: 48.8941, sd: 1.4165 },
        42: { median: 48.9629, sd: 1.417 },
        43: { median: 49.0294, sd: 1.4174 },
        44: { median: 49.0937, sd: 1.4178 },
        45: { median: 49.156, sd: 1.4186 },
        46: { median: 49.2164, sd: 1.4189 },
        47: { median: 49.2751, sd: 1.4191 },
        48: { median: 49.3321, sd: 1.4198 },
        49: { median: 49.3877, sd: 1.4199 },
        50: { median: 49.4419, sd: 1.4205 },
        51: { median: 49.4947, sd: 1.4205 },
        52: { median: 49.5464, sd: 1.421 },
        53: { median: 49.5969, sd: 1.421 },
        54: { median: 49.6464, sd: 1.4214 },
        55: { median: 49.6947, sd: 1.4218 },
        56: { median: 49.7421, sd: 1.4221 },
        57: { median: 49.7885, sd: 1.422 },
        58: { median: 49.8341, sd: 1.4223 },
        59: { median: 49.8789, sd: 1.4226 },
        60: { median: 49.9229, sd: 1.4228 }
      }
    };

    function calculateZScore(value, median, sd) {
      return (value - median) / sd;
    }

    var kelaminKey = kelamin === 1 ? 'laki-laki' : 'perempuan';

    var zTb = calculateZScore(tb, zScoreDataTb[kelaminKey][umur].median, zScoreDataTb[kelaminKey][umur].sd);
    var zLk = calculateZScore(lk, zScoreDataLk[kelaminKey][umur].median, zScoreDataLk[kelaminKey][umur].sd);

    var tbStatus = '';
    if (zTb < -3) {
      tbStatus = 'sangat pendek (severely stunted)';
    } else if (zTb >= -3 && zTb < -2) {
      tbStatus = 'pendek (stunted)';
    } else if (zTb >= -2 && zTb <= 2) {
      tbStatus = 'normal';
    } else {
      tbStatus = 'tinggi';
    }

    var lkStatus = '';
    if (zLk < -3) {
      lkStatus = 'sangat kecil (severely microcephaly)';
    } else if (zLk >= -3 && zLk < -2) {
      lkStatus = 'kecil (microcephaly)';
    } else if (zLk >= -2 && zLk <= 2) {
      lkStatus = 'normal';
    } else {
      lkStatus = 'besar (macrocephaly)';
    }

    //alert('Nama: ' + nama + '\nUmur: ' + umur + ' bulan\nJenis Kelamin: ' + (kelamin === 1 ? 'Laki-laki' : 'Perempuan') + '\nTinggi Badan: ' + tb + ' cm (' + tbStatus + ')\nLingkar Kepala: ' + lk + ' cm (' + lkStatus + ')');
  });
</script>-->


<?php if (isset($_GET['upload']) && $_GET['upload'] == 'success'): ?>
<script>
  var uploadSuccessModal = new bootstrap.Modal(document.getElementById('uploadSuccessModal'));
  uploadSuccessModal.show();
</script>
<?php endif; ?>
</body>
</html>
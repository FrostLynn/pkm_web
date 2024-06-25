<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $navLink = "<li class='nav-item'><a class='nav-link' href='dashboard.php'>Hello, $username!</a></li>";
} else {
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
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/icon-logo.png" alt="icon" style="width: 100px; height:auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#kalkulasi">Kalkulasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#edukasi">Edukasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <?php echo $navLink; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar End-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-artikel">
                        <div class="head-artikel">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#pertumbuhan">Pertumbuhan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#perkembangan">Perkembangan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#kebutuhangizi">Kebutuhan Gizi</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tipssehat">Tips Sehat</a></li>
                                <li class="nav-item"><a class="nav-link" href="#imunisasi">Imunisasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pertumbuhan">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Pentingnya Mengenali Tahapan Pertumbuhan Anak</h2>
                <div class="center-art">
                <p>Pertumbuhan anak adalah proses perubahan yang ditandai dengan bertambahnya ukuran fisik dan bentuk tubuh. Pertumbuhan anak dapat dinilai melalui pengukuran tinggi badan, berat badan, dan lingkar kepala.
                    Normal tidaknya pengukuran ataupun laju pertumbuhan dapat diketahui melalui standar pengukuran yang tersedia.
                Dari segi pertumbuhan tinggi badan anak yang sehat akan berkembang secara bertahap setiap tahun. Rata-rata pertambahan tingi badan yang ideal pada anak adalah:<br></p>
                <ul>
                    <li>Bayi usia 0–12 bulan: 25 cm</li>
                    <li>Anak usia 1–2 tahun: 13 cm</li>
                    <li>usia 2–3 tahun: 9 cm</li>
                    <li>Anak usia 4 tahun hingga masa pubertas: 5 cm setiap tahunnya</li>
                </ul>
                    <p>Namun perlu diingat bahwa tahapan pertumbuhan setiap anak berbeda-beda. Tinggi badan anak pun  sangat dipengaruhi oleh nutrisi yang ia terima di 1.000 hari pertama kehidupannya dan juga kondisi kesehatannya.
                    Idealnya, bayi baru lahir yang sehat akan memiliki berat badan sekitar 2,6–3,8 kg. Seiring bertambahnya usia, berat badan akan terus bertambah sesuai tahapan pertumbuhan anak. Berikut ini adalah rata-rata pertambahan berat badan pada anak yang perlu Bunda ketahui:<br></p>
                <ul>
                    <li>Bayi usia 0–6 bulan: 140–200 gram setiap minggu</li>
                    <li>Bayi usia 6–12 bulan: 85–140 gram setiap minggu</li>
                    <li>Anak usia 1–2 tahun: 2,5 kg setiap tahun</li>
                    <li>Anak usia 2–5 tahun: 2 kg setiap tahun</li>
                    <li>Anak usia 5 tahun hingga masa pubertas: 2–3 kg setiap tahunnya</li>
                </ul>
                   <p> Sama seperti tinggi badan, pertambahan berat badan pada anak juga tergantung pada asupan nutrisi dan kondisi kesehatannya. Untuk memudahkan Bunda, pastikan berat badan Si Kecil sudah jadi 3kali lipat berat badan lahirnya saat mencapai usia 1 tahun.
                    Selain tinggi dan berat badan, tolok ukur pertumbuhan anak yang perlu Bunda ketahui adalah lingkar kepala Si Kecil. Pemeriksaan ini penting dilakukan sebab ukuran lingkar kepala bayi yang tidak normal bisa menandakan adanya gangguan pertumbuhan otak.Berikut ini adalah rata-rata pertambahan lingkar kepala pada anak:<br></p>
                <ul>
                    <li>Bayi 0–3 bulan: 2cm setiap bulan</li>
                    <li>Bayi usia 4–6 bulan: 1 cm setiap bulan</li>
                    <li>Bayi usia 6–12 bulan: ½ cm setiap bulan</li>
                    <li>Anak usia 1–2 tahun: 2 cm dalam 1 tahun</li>    
                </ul>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-sideart" src="assets\img\art2.png" alt="icon logo"/>
            </div>
        </div>
    </div>
</section>

<section id="perkembangan">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Perkembangan Pada Anak</h2>
                <div class="center-art">
                <p>Mengapa Perkembangan Anak Usia Dini Penting? Periode ini merupakan waktu krusial dalam kehidupan anak, ketika mereka mengalami pertumbuhan dan perkembangan yang pesat dalam berbagai aspek, termasuk fisik, kognitif, sosial, dan emosional. Memahami perkembangan anak pada masa ini membantu orang
                     tua dan pengasuh memberikan dukungan yang sesuai untuk membantu anak mencapai potensi mereka.<br>
                    Tahap-tahap Perkembangan Anak Usia 0-5 Tahun:</p>  
                        <ul>
                            <a class="section1-title">1. Perkembangan Fisik</a> 
                            <li>Bayi (0-12 bulan):Pertumbuhan cepat, mulai dari mengangkat kepala hingga merangkak dan berjalan.</li>
                            <li>Balita (1-3 tahun): Menguasai keterampilan motorik kasar seperti berjalan dan berlari,serta motorik halus seperti memegang pensil.</li>
                            <li>Anak Pra-sekolah (3-5 tahun):Mengembangkan keterampilan motorik halus yang lebih halus seperti menggambar dengan detail, serta motorik kasar seperti melompat dan memanjat.</li>
                        </ul>
                        <ul>
                            <a class="section1-title">2. Perkembangan Kognitif dan Bahasa:</a> 
                            <li>Bayi: Membentuk koneksi otak awal, merespons suara, dan mulai mengenal wajah-wajah dekat</li>
                            <li>Balita: Memperluas kosakata, memahami perintah sederhana, dan mengembangkan pemahaman tentang objek permanen.</li>
                            <li>Anak Pra-sekolah: Berbicara dengan kalimat yang lebih panjang, mengikuti petunjuk yang lebih kompleks, dan membangun dasar untuk membaca dan menulis.</li>
                        </ul>
                        <ul>
                            <a class="section1-title">3. Perkembangan Sosial dan Emosional:</a> 
                            <li>Bayi: Mengembangkan ikatan dengan pengasuh, merasakan empati awal, dan belajar mengatur emosi dasar.</li>
                            <li>Balita: Bermain berdampingan dengan teman sebaya, belajar berbagi dan bekerja sama, serta mengekspresikan emosi dengan kata-kata.</li>
                            <li>Anak Pra-sekolah: Mulai memahami aturan sosial, memperluas lingkaran sosial, dan mulai memahami perspektif orang lain</li>
                        </ul>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img1-sideart" src="assets\img\art1.png" alt="icon logo"/>
            </div>
        </div>
    </div>
</section>

<section id="kebutuhangizi">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Kebutuhan Gizi Anak</h2>
                <div class="center-art">
                <p>Nutrisi yang tepat adalah kunci untuk mendukung pertumbuhan dan perkembangan optimal anak Anda<br>
                        Mengapa Kebutuhan Gizi Anak Usia Dini Penting?<br><br>
                        Periode usia dini adalah waktu yang krusial dalam pembentukan pola makan dan nutrisi yang baik. 
                        Nutrisi yang tepat pada masa ini dapat mempengaruhi perkembangan otak, sistem kekebalan tubuh, dan 
                        kesehatan secara keseluruhan sepanjang hidup anak.<br>
                        Kebutuhan Gizi pada Anak Usia 0-5 Tahun<br>
                    </p>
                <ul>
                    <a class="section1-title">1. Gizi Bayi (0-12 bulan):</a> 
                    <li>ASI atau formula susu bayi merupakan sumber nutrisi utama.</li>
                    <li>ASI secara eksklusif direkomendasikan selama enam bulan pertama kehidupan.</li>
                    <li>Pada usia 6 bulan, pemberian makanan pendamping ASI (MPASI) perlahan dimulai.</li>
                </ul>
                <ul>
                    <a class="section1-title">2. Gizi Balita (1-3 tahun):</a> 
                    <li>Diperlukan nutrisi yang kaya untuk mendukung pertumbuhan dan perkembangan fisik dan kognitif yang cepat.</li>
                    <li>Penting untuk memperkenalkan berbagai makanan sehat untuk memperluas pola makan mereka.</li>
                </ul>
                <ul>
                    <a class="section1-title">3. Gizi Anak Pra-sekolah (3-5 tahun):</a> 
                    <li>Kebutuhan gizi anak akan meningkat seiring dengan pertumbuhan mereka.</li>
                    <li>Makanan seimbang yang mencakup protein, karbohidrat, lemak, vitamin, dan mineral penting untuk mendukung aktivitas dan perkembangan mereka.</li>
                </ul>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-sideart" src="assets\img\art4.png" alt="icon logo"/>
            </div>
        </div>
    </div>
</section>

<section id="tipssehat">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Tips Yang Bisa Diikuti Untuk Memaksimalakan Tumbuh Kembang Anak </h2>
                <div class="center-art">
                <p>Beberapa tips yang dapat membantu Anda memberikan perawatan terbaik untuk anak Anda.
                        Pertumbuhan Anak
                    </p>
                <ol>
                    <a class="section1-title">Pertumbuhan anak</a> 
                    <li>Pantau Pertumbuhan: Perhatikan perkembangan fisik anak Anda, termasuk tinggi badan, berat badan, dan lingkar kepala. Konsultasikan dengan dokter anak jika Anda memiliki kekhawatiran tentang pertumbuhan mereka.</li>
                    <li>Berikan Nutrisi yang Seimbang: Pastikan anak Anda mendapatkan makanan sehat yang mencakup protein, karbohidrat, lemak, vitamin, dan mineral yang diperlukan untuk pertumbuhan yang optimal.</li>
                    <li>Ajak Anak untuk Aktif: Dorong anak Anda untuk berpartisipasi dalam aktivitas fisik yang sesuai dengan usia mereka, seperti bermain di luar, berjalan-jalan, atau bermain di taman bermain.</li>
                </ol>
                <ol>
                    <a class="section1-title">Perkembangan Anak</a> 
                    <li>Stimulasi Kognitif: Bicaralah dengan anak Anda secara teratur, bacakan cerita, dan ajak mereka bermain dengan mainan yang merangsang perkembangan kognitif mereka.</li>
                    <li>Berikan Kesempatan untuk Bereksplorasi: Biarkan anak Anda mengeksplorasi dunia di sekitar mereka dengan aman. Ini membantu mereka belajar dan memahami lingkungan mereka.</li>
                    <li>Perhatikan Interaksi Sosial: Ajak anak Anda untuk bermain dengan teman sebaya mereka. Interaksi sosial membantu mereka belajar berbagi, bekerja sama, dan berkomunikasi.</li>
                </ol>
                <ol>
                    <a class="section1-title">Kebutuhan Gizi Anak</a> 
                    <li>ASI atau Susu Formula: Berikan ASI secara eksklusif selama enam bulan pertama kehidupan. Jika tidak menyusui, pilih formula susu bayi yang sesuai.</li>
                    <li>Perkenalkan Makanan Pendamping ASI (MPASI): Mulailah memberikan makanan padat secara perlahan-lahan pada usia sekitar 6 bulan, termasuk buah-buahan, sayuran, sereal, dan protein.</li>
                    <li>Berikan Makanan Seimbang: Pastikan anak Anda mendapatkan makanan dari berbagai kelompok makanan, termasuk biji-bijian, protein, sayuran, buah-buah</li>
                </ol>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-sideart" src="assets\img\art3.png" alt="icon logo"/>
            </div>
        </div>
    </div>
</section>

<section id="imunisasi">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Imunisasi</h2>
                <div class="center-art">
                <p>Berdasarkan data dari Ikatan Dokter Anak Indonesia (IDAI), imunisasi mampu mencegah 2-3 juta kematian anak setiap tahun.<br><br>

Imunisasi anak adalah pemberian vaksin pada anak untuk melindungi mereka dari penularan penyakit tertentu. Vaksin terbuat dari kuman yang sudah melalui proses pelemahan atau bahkan dimatikan. <br><br>

Vaksinasi anak akan menguatkan sistem kekebalan tubuh sehingga merangsang terbentuknya zat antibodi. Dengan begitu, tubuh anak lebih kuat terhadap infeksi di masa mendatang. 
Tidak hanya menghindarkan anak dari serangan penyakit serius,  vaksinasi anak juga bisa melindungi masyarakat yang lebih luas. Sebab, imunisasi membantu meminimalkan terjadinya penyebaran penyakit.<br><br>

Di Indonesia, imunisasi rutin lengkap terdiri dari dua jenis, yaitu imunisasi dasar dan lanjutan. Jadwal imunisasi dasar dan lanjutan tersebut akan tergantung pada usia anak. 
Imunisasi dasar merupakan langkah pencegahan utama dari berbagai penyakit menular. Sedangkan imunisasi lanjutan bertujuan untuk menjaga imunitas anak tetap optimal seiring bertambahnya usia.<br><br>
 
Selain itu, ada juga imunisasi ulangan atau booster sebagai penguat kekebalan. Namun, tak semua jenis imunisasi memiliki booster. Sebab, ada jenis vaksin yang hanya diberikan sekali seumur hidup.
</p>
                </div>
            </div>
            <div class="col-md-6">
            <a class="section1-title">Berikut jadwal imunisasi rekomendasi IDAI tahun 2023</a> 
                        <li>Hepatitis B : 0 & 18 bulan </li> 
                        <li>Bacillus calmette guerin (BCG): 0–1 bulan</li>
                        <li>Difteri pertusis tetanus (DPT): 2, 3, dan 4 bulan</li>
                        <li>Hemophilus influenza type B (Hib): 2, 3, 4 bulan</li>
                        <li>Polio : 1, 2, 3, 4 bulan</li>
                        <li>Campak: 9, 12, 15 bulan</li>
                        <li>Rotavirun mulai dari usia 6 minggu</li>
                        <li>Pneumococcus (PCV): mulai dari 7–12 bulan</li>
                        <li>Influenza (flu): mulai dari usia 6 bulan</li>
                        <li>Vaksin mumps, measles, rubella (MMR): mulai dari 6 bulan</li>
                        <li>Vaksin Japanese encephalitis (JE): mulai umur 9 bulan</li>
                        <li>Vaksin Varisela: 1 tahun</li>
                        <li>Vaksin hepatitis A: mulai umur 1 tahun</li>
                        <li>Vaksin tifoid polisakarida: mulai umur 2 tahun </li>
                        <li>Vaksin human papilloma virus (HPV): 9-14 tahun</li>
                        <li>Vaksin dengue: 6-16 tahun</li>
                    </ol>
                    <ul>
                        <a class="section1-title">Pengulangan vaksin ini bertujuan untuk meningkatkan kekebalan terhadap penyakit tertentu.<br>
                            Beberapa jenis vaksinnya, meliputi:</a> 
                        <li>Polio. Pemberian imunisasi anak dosis 2 ketika anak menginjak 18 bulan.</li>
                        <li>Penyuntikan vaksin anak dosis 4 saat anak berusia 18 bulan dan dosis 5 saat anak berusia 5 tahun.</li>
                        <li>HiB. Pemberian vaksin anak dosis 4 ketika Si Kecil berusia antara 15–18 bulan.</li>
                        <li>PCV. Dosis 4 vaksin anak dapat berlaku dalam rentang usia 12–15 bulan.</li>
                        <li>Campak. Pemberian imunisasi anak dosis 2 saat anak berusia 18 bulan. Lanjut dosis 3 saat usianya 6–7 tahun.</li>
                    </ul>
            </div>
        </div>
    </div>
</section>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

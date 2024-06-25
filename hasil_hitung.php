<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perhitungan</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    a {
      text-decoration:none;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">

      <!-- Button to go back to the previous page -->
          <button onclick="history.back()" class="btn btn-secondary mb-3">Kembali</button>
        <?php
        // Mengambil nilai dari GET
        $nama = $_GET['nama'];
        $kelamin = $_GET['kelamin'];
        $umur = $_GET['umur'];
        $bb = $_GET['bb'];
        $tb = $_GET['tb'];
        $lk = $_GET['lk'];

        // Data z-score tinggi badan dan lingkar kepala
        $zScoreDataTb = [
            'laki-laki' => [
               0 => [  'median' => 49.8842, 'sd' => 1.8931 ],
               1 => [ 'median' => 54.7244, 'sd' => 1.9465 ],
               2 => [ 'median' => 58.4249, 'sd' => 2.0005 ],
               3 => [ 'median' => 61.4292, 'sd' => 2.0444 ],
               4 => [ 'median' => 63.886, 'sd' => 2.0808 ],
               5 => [ 'median' => 65.9026, 'sd' => 2.1115 ],
               6 => [ 'median' => 67.6236, 'sd' => 2.1403 ],
               7 => [ 'median' => 69.1645, 'sd' => 2.1711 ],
               8 => [ 'median' => 70.5994, 'sd' => 2.2055 ],
               9 => [ 'median' => 71.9687, 'sd' => 2.2433 ],
               10 => [ 'median' => 73.2812, 'sd' => 2.2849 ],
               11 => [ 'median' => 74.5388, 'sd' => 2.3293 ],
               12 => [ 'median' => 75.7488, 'sd' => 2.3762 ],
               13 => [ 'median' => 76.9186, 'sd' => 2.426 ],
               14 => [ 'median' => 78.0497, 'sd' => 2.4773 ],
               15 => [ 'median' => 79.1458, 'sd' => 2.5303 ],
               16 => [ 'median' => 80.2113, 'sd' => 2.5844 ],
               17 => [ 'median' => 81.2487, 'sd' => 2.6406 ],
               18 => [ 'median' => 82.2587, 'sd' => 2.6973 ],
               19 => [ 'median' => 83.2418, 'sd' => 2.7553 ],
               20 => [ 'median' => 84.1996, 'sd' => 2.814 ],
               21 => [ 'median' => 85.1348, 'sd' => 2.8742 ],
               22 => [ 'median' => 86.0477, 'sd' => 2.9342 ],
               23 => [ 'median' => 86.941, 'sd' => 2.9951 ],
               24 => [ 'median' => 87.8161, 'sd' => 3.0551 ],
               25 => [ 'median' => 87.972, 'sd' => 3.116 ],
               26 => [ 'median' => 88.8065, 'sd' => 3.1757 ],
               27 => [ 'median' => 89.6197, 'sd' => 3.2353 ],
               28 => [ 'median' => 90.412, 'sd' => 3.2928 ],
               29 => [ 'median' => 91.1828, 'sd' => 3.3501 ],
               30 => [ 'median' => 91.9327, 'sd' => 3.4052 ],
               31 => [ 'median' => 92.6631, 'sd' => 3.4591 ],
               32 => [ 'median' => 93.3753, 'sd' => 3.5118 ],
               33 => [ 'median' => 94.0711, 'sd' => 3.5625 ],
               34 => [ 'median' => 94.7532, 'sd' => 3.612 ],
               35 => [ 'median' => 95.4236, 'sd' => 3.6604 ],
               36 => [ 'median' => 96.0835, 'sd' => 3.7069 ],
               37 => [ 'median' => 96.7337, 'sd' => 3.7523 ],
               38 => [ 'median' => 97.3749, 'sd' => 3.7976 ],
               39 => [ 'median' => 98.0073, 'sd' => 3.8409 ],
               40 => [ 'median' => 98.631, 'sd' => 3.8831 ],
               41 => [ 'median' => 99.2459, 'sd' => 3.9242 ],
               42 => [ 'median' => 99.8515, 'sd' => 3.9651 ],
               43 => [ 'median' => 100.4485, 'sd' => 4.0039 ],
               44 => [ 'median' => 101.0374, 'sd' => 4.0435 ],
               45 => [ 'median' => 101.6186, 'sd' => 4.081 ],
               46 => [ 'median' => 102.1933, 'sd' => 4.1194 ],
               47 => [ 'median' => 102.7625, 'sd' => 4.1567 ],
               48 => [ 'median' => 103.3273, 'sd' => 4.1941 ],
               49 => [ 'median' => 103.8886, 'sd' => 4.2314 ],
               50 => [ 'median' => 104.4473, 'sd' => 4.2677 ],
               51 => [ 'median' => 105.0041, 'sd' => 4.3052 ],
               52 => [ 'median' => 105.5596, 'sd' => 4.3417 ],
               53 => [ 'median' => 106.1138, 'sd' => 4.3783 ],
               54 => [ 'median' => 106.6668, 'sd' => 4.4149 ],
               55 => [ 'median' => 107.2188, 'sd' => 4.4517 ],
               56 => [ 'median' => 107.7697, 'sd' => 4.4886 ],
               57 => [ 'median' => 108.3198, 'sd' => 4.5245 ],
               58 => [ 'median' => 108.8689, 'sd' => 4.5616 ],
               59 => [ 'median' => 109.417, 'sd' => 4.5977 ],
               60 => [ 'median' => 109.9638, 'sd' => 4.6339]
            ],
            'perempuan' => [
               0 => [ 'median' => 49.1477, 'sd' => 1.8627 ],
               1 => [ 'median' => 53.6872, 'sd' => 1.9542 ],
               2 => [ 'median' => 57.0673, 'sd' => 2.0362 ],
               3 => [ 'median' => 59.8029, 'sd' => 2.1051 ],
               4 => [ 'median' => 62.0899, 'sd' => 2.1645 ],
               5 => [ 'median' => 64.0301, 'sd' => 2.2174 ],
               6 => [ 'median' => 65.7311, 'sd' => 2.2664 ],
               7 => [ 'median' => 67.2873, 'sd' => 2.3154 ],
               8 => [ 'median' => 68.7498, 'sd' => 2.365 ],
               9 => [ 'median' => 70.1435, 'sd' => 2.4157 ],
               10 => [ 'median' => 71.4818, 'sd' => 2.4676 ],
               11 => [ 'median' => 72.771, 'sd' => 2.5208 ],
               12 => [ 'median' => 74.015, 'sd' => 2.575 ],
               13 => [ 'median' => 75.2176, 'sd' => 2.6296 ],
               14 => [ 'median' => 76.3817, 'sd' => 2.6841 ],
               15 => [ 'median' => 77.5099, 'sd' => 2.7392 ],
               16 => [ 'median' => 78.6055, 'sd' => 2.7944 ],
               17 => [ 'median' => 79.671, 'sd' => 2.849 ],
               18 => [ 'median' => 80.7079, 'sd' => 2.9039 ],
               19 => [ 'median' => 81.7182, 'sd' => 2.9582 ],
               20 => [ 'median' => 82.7036, 'sd' => 3.0129 ],
               21 => [ 'median' => 83.6654, 'sd' => 3.0672 ],
               22 => [ 'median' => 84.604, 'sd' => 3.1202 ],
               23 => [ 'median' => 85.5202, 'sd' => 3.1737 ],
               24 => [ 'median' => 86.4153, 'sd' => 3.2267 ],
               25 => [ 'median' => 86.5904, 'sd' => 3.2783 ],
               26 => [ 'median' => 87.4462, 'sd' => 3.33 ],
               27 => [ 'median' => 88.283, 'sd' => 3.3812 ],
               28 => [ 'median' => 89.1004, 'sd' => 3.4313 ],
               29 => [ 'median' => 89.8991, 'sd' => 3.4809 ],
               30 => [ 'median' => 90.6797, 'sd' => 3.5296 ],
               31 => [ 'median' => 91.4428, 'sd' => 3.5774 ],
               32 => [ 'median' => 92.189, 'sd' => 3.6239 ],
               33 => [ 'median' => 92.919, 'sd' => 3.6703 ],
               34 => [ 'median' => 93.633, 'sd' => 3.7156 ],
               35 => [ 'median' => 94.3323, 'sd' => 3.7598 ],
               36 => [ 'median' => 95.0174, 'sd' => 3.8032 ],
               37 => [ 'median' => 95.6885, 'sd' => 3.8459 ],
               38 => [ 'median' => 96.3471, 'sd' => 3.8877 ],
               39 => [ 'median' => 96.9935, 'sd' => 3.9289 ],
               40 => [ 'median' => 97.6289, 'sd' => 3.9689 ],
               41 => [ 'median' => 98.2533, 'sd' => 4.0086 ],
               42 => [ 'median' => 98.8677, 'sd' => 4.0477 ],
               43 => [ 'median' => 99.4727, 'sd' => 4.086 ],
               44 => [ 'median' => 100.0685, 'sd' => 4.1238 ],
               45 => [ 'median' => 100.6557, 'sd' => 4.1612 ],
               46 => [ 'median' => 101.235, 'sd' => 4.1979 ],
               47 => [ 'median' => 101.807, 'sd' => 4.2344 ],
               48 => [ 'median' => 102.3725, 'sd' => 4.2705 ],
               49 => [ 'median' => 102.9319, 'sd' => 4.3063 ],
               50 => [ 'median' => 103.486, 'sd' => 4.3418 ],
               51 => [ 'median' => 104.0353, 'sd' => 4.3769 ],
               52 => [ 'median' => 104.5807, 'sd' => 4.4119 ],
               53 => [ 'median' => 105.1224, 'sd' => 4.4466 ],
               54 => [ 'median' => 105.6604, 'sd' => 4.4809 ],
               55 => [ 'median' => 106.195, 'sd' => 4.5152 ],
               56 => [ 'median' => 106.7265, 'sd' => 4.5493 ],
               57 => [ 'median' => 107.2548, 'sd' => 4.5829 ],
               58 => [ 'median' => 107.7799, 'sd' => 4.6166 ],
               59 => [ 'median' => 108.3023, 'sd' => 4.6496 ],
               60 => [ 'median' => 109.4233, 'sd' => 4.7566 ]
            ]
          ];

        $zScoreDataLk = [
            'laki-laki' => [  
               0 => [ 'median' => 34.4618, 'sd' => 1.2703 ],
               1 => [ 'median' => 37.2759, 'sd' => 1.1679 ],
               2 => [ 'median' => 39.1285, 'sd' => 1.1727 ],
               3 => [ 'median' => 40.5135, 'sd' => 1.1822 ],
               4 => [ 'median' => 41.6317, 'sd' => 1.194 ],
               5 => [ 'median' => 42.5576, 'sd' => 1.2074 ],
               6 => [ 'median' => 43.3306, 'sd' => 1.2206 ],
               7 => [ 'median' => 43.9803, 'sd' => 1.2332 ],
               8 => [ 'median' => 44.53, 'sd' => 1.2451 ],
               9 => [ 'median' => 44.9998, 'sd' => 1.2564 ],
               10 => [ 'median' => 45.4051, 'sd' => 1.2668 ],
               11 => [ 'median' => 45.7573, 'sd' => 1.2762 ],
               12 => [ 'median' => 46.0661, 'sd' => 1.2848 ],
               13 => [ 'median' => 46.3395, 'sd' => 1.2924 ],
               14 => [ 'median' => 46.5844, 'sd' => 1.3002 ],
               15 => [ 'median' => 46.806, 'sd' => 1.3068 ],
               16 => [ 'median' => 47.0088, 'sd' => 1.3139 ],
               17 => [ 'median' => 47.1962, 'sd' => 1.3201 ],
               18 => [ 'median' => 47.3711, 'sd' => 1.3264 ],
               19 => [ 'median' => 47.5357, 'sd' => 1.3324 ],
               20 => [ 'median' => 47.6919, 'sd' => 1.3382 ],
               21 => [ 'median' => 47.8408, 'sd' => 1.3443 ],
               22 => [ 'median' => 47.9833, 'sd' => 1.3498 ],
               23 => [ 'median' => 48.1201, 'sd' => 1.3555 ],
               24 => [ 'median' => 48.2515, 'sd' => 1.3612 ],
               25 => [ 'median' => 48.3777, 'sd' => 1.3667 ],
               26 => [ 'median' => 48.4989, 'sd' => 1.3725 ],
               27 => [ 'median' => 48.6151, 'sd' => 1.3778 ],
               28 => [ 'median' => 48.7264, 'sd' => 1.3829 ],
               29 => [ 'median' => 48.8331, 'sd' => 1.3878 ],
               30 => [ 'median' => 48.9351, 'sd' => 1.3932 ],
               31 => [ 'median' => 49.0327, 'sd' => 1.3979 ],
               32 => [ 'median' => 49.126, 'sd' => 1.4026 ],
               33 => [ 'median' => 49.2153, 'sd' => 1.4071 ],
               34 => [ 'median' => 49.3007, 'sd' => 1.4115 ],
               35 => [ 'median' => 49.3826, 'sd' => 1.4158 ],
               36 => [ 'median' => 49.4612, 'sd' => 1.42 ],
               37 => [ 'median' => 49.5367, 'sd' => 1.4242 ],
               38 => [ 'median' => 49.6093, 'sd' => 1.4278 ],
               39 => [ 'median' => 49.6791, 'sd' => 1.4318 ],
               40 => [ 'median' => 49.7465, 'sd' => 1.4357 ],
               41 => [ 'median' => 49.8116, 'sd' => 1.4391 ],
               42 => [ 'median' => 49.8745, 'sd' => 1.4429 ],
               43 => [ 'median' => 49.9354, 'sd' => 1.4461 ],
               44 => [ 'median' => 49.9942, 'sd' => 1.4493 ],
               45 => [ 'median' => 50.0512, 'sd' => 1.453 ],
               46 => [ 'median' => 50.1064, 'sd' => 1.4561 ],
               47 => [ 'median' => 50.1598, 'sd' => 1.4592 ],
               48 => [ 'median' => 50.2115, 'sd' => 1.4622 ],
               49 => [ 'median' => 50.2617, 'sd' => 1.4651 ],
               50 => [ 'median' => 50.3105, 'sd' => 1.4681 ],
               51 => [ 'median' => 50.3578, 'sd' => 1.471 ],
               52 => [ 'median' => 50.4039, 'sd' => 1.4738 ],
               53 => [ 'median' => 50.4488, 'sd' => 1.4766 ],
               54 => [ 'median' => 50.4926, 'sd' => 1.4789 ],
               55 => [ 'median' => 50.5354, 'sd' => 1.4817 ],
               56 => [ 'median' => 50.5772, 'sd' => 1.4844 ],
               57 => [ 'median' => 50.6183, 'sd' => 1.4872 ],
               58 => [ 'median' => 50.6587, 'sd' => 1.4894 ],
               59 => [ 'median' => 50.6984, 'sd' => 1.4921 ],
               60 => [ 'median' => 50.7375, 'sd' => 1.4947 ]
        ],
            'perempuan' => [
               0 => [ 'median' => 33.8787, 'sd' => 1.1844 ],
               1 => [ 'median' => 36.5463, 'sd' => 1.1731 ],
               2 => [ 'median' => 38.2521, 'sd' => 1.2118 ],
               3 => [ 'median' => 39.5328, 'sd' => 1.2413 ],
               4 => [ 'median' => 40.5817, 'sd' => 1.2657 ],
               5 => [ 'median' => 41.459, 'sd' => 1.2861 ],
               6 => [ 'median' => 42.1995, 'sd' => 1.3027 ],
               7 => [ 'median' => 42.829, 'sd' => 1.317 ],
               8 => [ 'median' => 43.3671, 'sd' => 1.3283 ],
               9 => [ 'median' => 43.83, 'sd' => 1.3381 ],
               10 => [ 'median' => 44.2319, 'sd' => 1.3464 ],
               11 => [ 'median' => 44.5844, 'sd' => 1.3531 ],
               12 => [ 'median' => 44.8965, 'sd' => 1.359 ],
               13 => [ 'median' => 45.1752, 'sd' => 1.3638 ],
               14 => [ 'median' => 45.4265, 'sd' => 1.3683 ],
               15 => [ 'median' => 45.6551, 'sd' => 1.3724 ],
               16 => [ 'median' => 45.865, 'sd' => 1.3755 ],
               17 => [ 'median' => 46.0598, 'sd' => 1.3786 ],
               18 => [ 'median' => 46.2424, 'sd' => 1.3813 ],
               19 => [ 'median' => 46.4152, 'sd' => 1.3841 ],
               20 => [ 'median' => 46.5801, 'sd' => 1.3867 ],
               21 => [ 'median' => 46.7384, 'sd' => 1.3891 ],
               22 => [ 'median' => 46.8913, 'sd' => 1.3913 ],
               23 => [ 'median' => 47.0391, 'sd' => 1.3933 ],
               24 => [ 'median' => 47.1822, 'sd' => 1.3952 ],
               25 => [ 'median' => 47.3204, 'sd' => 1.3974 ],
               26 => [ 'median' => 47.4536, 'sd' => 1.3994 ],
               27 => [ 'median' => 47.5817, 'sd' => 1.4013 ],
               28 => [ 'median' => 47.7045, 'sd' => 1.403 ],
               29 => [ 'median' => 47.8219, 'sd' => 1.4045 ],
               30 => [ 'median' => 47.934, 'sd' => 1.4059 ],
               31 => [ 'median' => 48.041, 'sd' => 1.4071 ],
               32 => [ 'median' => 48.1432, 'sd' => 1.4087 ],
               33 => [ 'median' => 48.2408, 'sd' => 1.4096 ],
               34 => [ 'median' => 48.3343, 'sd' => 1.4109 ],
               35 => [ 'median' => 48.4239, 'sd' => 1.4116 ],
               36 => [ 'median' => 48.5099, 'sd' => 1.4126 ],
               37 => [ 'median' => 48.5926, 'sd' => 1.4136 ],
               38 => [ 'median' => 48.6722, 'sd' => 1.4144 ],
               39 => [ 'median' => 48.7489, 'sd' => 1.4152 ],
               40 => [ 'median' => 48.8228, 'sd' => 1.4159 ],
               41 => [ 'median' => 48.8941, 'sd' => 1.4165 ],
               42 => [ 'median' => 48.9629, 'sd' => 1.417 ],
               43 => [ 'median' => 49.0294, 'sd' => 1.4174 ],
               44 => [ 'median' => 49.0937, 'sd' => 1.4178 ],
               45 => [ 'median' => 49.156, 'sd' => 1.4186 ],
               46 => [ 'median' => 49.2164, 'sd' => 1.4189 ],
               47 => [ 'median' => 49.2751, 'sd' => 1.4191 ],
               48 => [ 'median' => 49.3321, 'sd' => 1.4198 ],
               49 => [ 'median' => 49.3877, 'sd' => 1.4199 ],
               50 => [ 'median' => 49.4419, 'sd' => 1.4205 ],
               51 => [ 'median' => 49.4947, 'sd' => 1.4205 ],
               52 => [ 'median' => 49.5464, 'sd' => 1.421 ],
               53 => [ 'median' => 49.5969, 'sd' => 1.421 ],
               54 => [ 'median' => 49.6464, 'sd' => 1.4214 ],
               55 => [ 'median' => 49.6947, 'sd' => 1.4218 ],
               56 => [ 'median' => 49.7421, 'sd' => 1.4221 ],
               57 => [ 'median' => 49.7885, 'sd' => 1.422 ],
               58 => [ 'median' => 49.8341, 'sd' => 1.4223 ],
               59 => [ 'median' => 49.8789, 'sd' => 1.4226 ],
               60 => [ 'median' => 49.9229, 'sd' => 1.4228 ]
            ]
          ];

        function calculateZScore($value, $median, $sd) {
            return ($value - $median) / $sd;
        }

        $kelaminKey = $kelamin == 1 ? 'laki-laki' : 'perempuan';

        $zTb = calculateZScore($tb, $zScoreDataTb[$kelaminKey][$umur]['median'], $zScoreDataTb[$kelaminKey][$umur]['sd']);
        $zLk = calculateZScore($lk, $zScoreDataLk[$kelaminKey][$umur]['median'], $zScoreDataLk[$kelaminKey][$umur]['sd']);

        $tbStatus = '';
        if ($zTb < -3) {
            $tbStatus = 'sangat pendek (severely stunted)';
        } else if ($zTb >= -3 && $zTb < -2) {
            $tbStatus = 'pendek (stunted)';
        } else if ($zTb >= -2 && $zTb <= 2) {
            $tbStatus = 'normal';
        } else {
            $tbStatus = 'tinggi';
        }

        $lkStatus = '';
        if ($zLk < -3) {
            $lkStatus = 'sangat kecil (severely microcephaly)';
        } else if ($zLk >= -3 && $zLk < -2) {
            $lkStatus = 'kecil (microcephaly)';
        } else if ($zLk >= -2 && $zLk <= 2) {
            $lkStatus = 'normal';
        } else {
            $lkStatus = 'besar (macrocephaly)';
        }

        // Tentukan apakah anak mengalami stunting berdasarkan z-score tinggi badan
        $stunting = ($zTb < -2);

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p>Tinggi Badan: $tb cm ($tbStatus)</p>";
        echo "<p>Lingkar Kepala: $lk cm ($lkStatus)</p>";

        // Rekomendasi tinggi dan berat badan berdasarkan umur
        echo "<h3 class='mt-3'>Rekomendasi Tinggi dan Berat Badan Berdasarkan Umur:</h3>";
        echo "<p>Umur: $umur bulan</p>";

        // Rekomendasi tinggi badan berdasarkan jenis kelamin
        $tinggi_rekomendasi_min = 0;
        $tinggi_rekomendasi_max = 0;

        if ($kelamin == 1) { // Laki-laki
            if ($umur >= 0 && $umur < 6) {
                $tinggi_rekomendasi_min = 45;
                $tinggi_rekomendasi_max = 67;
            } elseif ($umur >= 6 && $umur < 12) {
                $tinggi_rekomendasi_min = 67;
                $tinggi_rekomendasi_max = 72;
            } elseif ($umur >= 12 && $umur < 24) {
                $tinggi_rekomendasi_min = 72;
                $tinggi_rekomendasi_max = 83;
            } elseif ($umur >= 24 && $umur < 36) {
                $tinggi_rekomendasi_min = 83;
                $tinggi_rekomendasi_max = 90;
            } elseif ($umur >= 36 && $umur < 48) {
                $tinggi_rekomendasi_min = 90;
                $tinggi_rekomendasi_max = 97;
            } elseif ($umur >= 48 && $umur < 60) {
                $tinggi_rekomendasi_min = 97;
                $tinggi_rekomendasi_max = 110;
            } elseif ($umur >= 60) {
                $tinggi_rekomendasi_min = 110;
                $tinggi_rekomendasi_max = 120;
            }
        } else { // Perempuan
            if ($umur >= 0 && $umur < 6) {
                $tinggi_rekomendasi_min = 45;
                $tinggi_rekomendasi_max = 65;
            } elseif ($umur >= 6 && $umur < 12) {
                $tinggi_rekomendasi_min = 65;
                $tinggi_rekomendasi_max = 70;
            } elseif ($umur >= 12 && $umur < 24) {
                $tinggi_rekomendasi_min = 70;
                $tinggi_rekomendasi_max = 80;
            } elseif ($umur >= 24 && $umur < 36) {
                $tinggi_rekomendasi_min = 80;
                $tinggi_rekomendasi_max = 87;
            } elseif ($umur >= 36 && $umur < 48) {
                $tinggi_rekomendasi_min = 87;
                $tinggi_rekomendasi_max = 95;
            } elseif ($umur >= 48 && $umur < 60) {
                $tinggi_rekomendasi_min = 95;
                $tinggi_rekomendasi_max = 110;
            } elseif ($umur >= 60) {
                $tinggi_rekomendasi_min = 110;
                $tinggi_rekomendasi_max = 120;
            }
        }

        echo "<p>Rekomendasi Tinggi Badan: Antara $tinggi_rekomendasi_min cm hingga $tinggi_rekomendasi_max cm</p>";

        // Rekomendasi berat badan berdasarkan jenis kelamin
        $berat_rekomendasi_min = 0;
        $berat_rekomendasi_max = 0;

        if ($kelamin == 1) { // Laki-laki
            if ($umur >= 0 && $umur < 6) {
                $berat_rekomendasi_min = 3;
                $berat_rekomendasi_max = 8;
            } elseif ($umur >= 6 && $umur < 12) {
                $berat_rekomendasi_min = 8;
                $berat_rekomendasi_max = 9;
            } elseif ($umur >= 12 && $umur < 24) {
                $berat_rekomendasi_min = 9;
                $berat_rekomendasi_max = 12;
            } elseif ($umur >= 24 && $umur < 36) {
                $berat_rekomendasi_min = 11;
                $berat_rekomendasi_max = 14;
            } elseif ($umur >= 36 && $umur < 48) {
                $berat_rekomendasi_min = 13;
                $berat_rekomendasi_max = 16;
            } elseif ($umur >= 48 && $umur < 60) {
                $berat_rekomendasi_min = 15;
                $berat_rekomendasi_max = 18;
            } elseif ($umur >= 60) {
                $berat_rekomendasi_min = 17;
                $berat_rekomendasi_max = 20;
            }
        } else { // Perempuan
            if ($umur >= 0 && $umur < 6) {
                $berat_rekomendasi_min = 3;
                $berat_rekomendasi_max = 7;
            } elseif ($umur >= 6 && $umur < 12) {
                $berat_rekomendasi_min = 7;
                $berat_rekomendasi_max = 8;
            } elseif ($umur >= 12 && $umur < 24) {
                $berat_rekomendasi_min = 8;
                $berat_rekomendasi_max = 11;
            } elseif ($umur >= 24 && $umur < 36) {
                $berat_rekomendasi_min = 10;
                $berat_rekomendasi_max = 13;
            } elseif ($umur >= 36 && $umur < 48) {
                $berat_rekomendasi_min = 12;
                $berat_rekomendasi_max = 15;
            } elseif ($umur >= 48 && $umur < 60) {
                $berat_rekomendasi_min = 14;
                $berat_rekomendasi_max = 17;
            } elseif ($umur >= 60) {
                $berat_rekomendasi_min = 16;
                $berat_rekomendasi_max = 19;
            }
        }

        echo "<p>Rekomendasi Berat Badan: Antara $berat_rekomendasi_min kg hingga $berat_rekomendasi_max kg</p>";

        // Menampilkan pesan berdasarkan hasil perhitungan stunting
        if ($stunting) {
            echo "<div class='alert alert-danger' role='alert'>";
            echo "<h2 class='alert-heading'>Adik bernama $nama terindikasi mengalami stunting.</h2>";
            echo "<p>Stunting merupakan kondisi ketika pertumbuhan anak terhambat atau kondisi ketika tinggi badan anak lebih pendek dari standar tinggi badan dengan anak seusianya karena kurangnya asupan gizi atau malnutrisi.</p>";
            echo "<h2 class='alert-heading mb-3'>Hal yang dapat dilakukan oleh orang tua:</h2>";
            echo '<ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Konsultasikan dengan dokter atau ahli gizi</div>
                        Konsultasikan kondisi anak dengan dokter atau ahli gizi untuk mendapatkan evaluasi medis yang tepat serta dapatkan saran tentang asupan gizi yang dibutuhkan anak dan cara memperbaiki pola makan.
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Pertahankan gizi yang baik</div>
                        Pastikan anak mendapatkan <a href="https://telemed.ihc.id/artikel-detail-541-Nutrisi-Untuk-Menunjang-Pola-Makan-Sehat-Anak.html">makanan yang kaya akan nutrisi</a>, termasuk <a href="https://telemed.ihc.id/artikel-detail-1113-Manfaat-Protein-Untuk-Pertumbuhan-Dan-Kesehatan-Anak.html">protein</a>, vitamin, dan mineral dan fokus pada makanan yang mengandung zat besi, <a href="https://telemed.ihc.id/artikel-detail-1109-Manfaat-Kalsium-Untuk-Tumbuh-Kembang-Anak.html">kalsium</a>, <a href="https://telemed.ihc.id/artikel-detail-525-Vitamin-D.html">vitamin D</a>, dan lainnya yang mendukung pertumbuhan optimal.
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Pantau pertumbuhan anak</div>
                        Lakukan pemantauan pertumbuhan secara teratur dengan mengukur tinggi dan berat badan anak. Perhatikan apakah terdapat perbaikan atau perubahan pada pertumbuhan anak.
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Stimulasi perkembangan</div>
                        Berikan stimulasi permainan dan kegiatan yang mendukung perkembangan motorik dan kognitif anak. Seperti, baca buku bersama, mainkan permainan edukatif, dan dorong kegiatan kreatif.
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Perhatikan kesehatan umum anak</div>
                        Pastikan anak mendapatkan vaksinasi yang sesuai untuk usianya. Jaga kebersihan dan hindari paparan terhadap penyakit menular.
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Beri dukungan emosional</div>
                        Sediakan lingkungan yang positif dan penuh cinta. Serta, berikan dukungan emosional yang kuat agar anak merasa aman dan percaya diri.
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Libatkan keluarga dan masyarakat</div>
                        Ajak keluarga dan masyarakat setempat untuk mendukung upaya pemulihan anak stunting
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Pantau perkembangan dengan rutin</div>
                        Jadwalkan pertemuan rutin dengan dokter atau ahli gizi untuk memantau perkembangan anak
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Pentingnya ASI (Air Susu Ibu)</div>
                        Jika anak masih bayi, berikan ASI eksklusif selama enam bulan pertama kehidupannya, dan terus berikan ASI bersama makanan pendamping hingga usia 2 tahun atau lebih.
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Perhatikan kebutuhan khusus anak</div>
                        Beberapa anak stunting mungkin memiliki kebutuhan khusus, seperti terapi fisik atau terapi wicara. Konsultasikan dengan dokter untuk menentukan apakah anak memerlukan layanan ini.
                      </div>
                    </li>
                  </ol>';
            echo "";
            echo "</div>";
        } else {
            echo "<div class='alert alert-success' role='alert'>";
            echo "<h2 class='alert-heading'>Adik bernama $nama tidak terindikasi mengalami stunting.</h2>";
            echo "<p>$nama memiliki tinggi badan sesuai dengan standar usianya.</p>";
            echo "</div>";
        }
        ?>

        

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

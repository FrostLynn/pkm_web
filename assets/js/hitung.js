document.getElementById('submit-btn').addEventListener('click', function() {
    // Mengambil nilai dari input
    var nama = document.getElementById('form-nama').value;
    var kelamin = document.getElementById('form-kelamin').value;
    var umur = parseInt(document.getElementById('form-umur').value);
    var bb = parseFloat(document.getElementById('form-bb').value);
    var tb = parseFloat(document.getElementById('form-tb').value);

    // Lakukan perhitungan untuk menentukan apakah anak mengalami stunting atau tidak
    var stunting = false;
    if (umur >= 24 && umur <= 59) { // Umur 24 bulan sampai 59 bulan
      var tb_standar;
      if (kelamin == 0) { // Perempuan
        tb_standar = 76.5 + (umur - 24) * 0.65;
      } else { // Laki-laki
        tb_standar = 77.5 + (umur - 24) * 0.66;
      }
      if (tb < tb_standar) {
        stunting = true;
      }
    }

    // Redirect ke halaman hasil_hitung.php dengan hasil stunting
    window.location.href = 'hasil_hitung.php?nama=' + encodeURIComponent(nama) + '&stunting=' + stunting + '&umur=' + umur + '&kelamin=' + kelamin;
  });
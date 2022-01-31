<!-- Pertumbuhan penduduk di kota Bogor tahun ini adalah 30.000, tiap tahun bertambah 3%. 
Berapa tahun yang dibutuhkan untuk mencapai jumlah penduduk 100.000 ? Buat script looping 
dengan for atau while-do (Gunakan programming language yang familiar). (10 Point). -->

<?php

// pertumbuhan penduduk
// $penduduk = 30000;
$jumlahPenduduk = 30000;
$jumlahTahun = 1;
$totalPenambahan = 0;

while ($totalPenambahan <= 100000) {
    $totalPenambahan += $jumlahPenduduk + 0.3 * $jumlahPenduduk;
    // $jumlahPenduduk += $totalPenambahan;
    $jumlahTahun++;
    echo $totalPenambahan . '<br>';
}

echo $jumlahTahun;

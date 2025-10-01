<?php

// 1. Fungsi untuk menentukan bilangan terbesar
function cariTerbesar($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}

$nilaiA = 100;
$nilaiB = 150;
echo "Bilangan terbesar antara " . $nilaiA . " dan " . $nilaiB . " adalah " . cariTerbesar($nilaiA, $nilaiB);
echo "<br><br>";

// 2. Tampilkan Tanggal, Bulan, dan Tahun dengan getdate()
$tanggalSekarang = getdate();
$hari = $tanggalSekarang['mday'];
$bulan = $tanggalSekarang['mon'];
$tahun = $tanggalSekarang['year'];

// Tambahkan logika untuk format bulan agar sesuai dengan contoh 28-11-2012
if ($bulan < 10) {
    $bulan = '0' . $bulan;
}

echo "Tanggal saat ini (menggunakan getdate()): " . $hari . "-" . $bulan . "-" . $tahun;
echo "<br><br>";

// 3. Tampilkan Tanggal, Bulan, dan Tahun dengan date()
echo "Tanggal saat ini (menggunakan date()): " . date('d-m-Y');

?>
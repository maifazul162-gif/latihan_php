<?php
echo "<h3>MEMBUAT FUNGSI</h3>";

// Function without parameters
function hasilUjian($nilai) {
    if ($nilai >= 75) {
        echo "SELAMAT ANDA BERHASIL";
    } else {
        echo "MAAF ANDA GAGAL";
    }
}

$nilai = 90;
hasilUjian($nilai);

echo "<br><br>";
echo "<h3>FUNGSI DENGAN PARAMETER</h3>";

// Function with parameters and return value
function jumlah($a, $b) {
    return $a + $b;
}

$nilai1 = 10;
$nilai2 = 15;
echo "Hasil penjumlahan $nilai1 dan $nilai2 adalah " . jumlah($nilai1, $nilai2);

echo "<br><br>";
echo "<h3>FUNGSI BAWAAN</h3>";

// Built-in functions
$sekarang = getdate();

echo "<b>Detail Tanggal dan Waktu:</b><br>";
print_r($sekarang);
echo "<br><br>";

echo "Sekarang Tanggal: " . $sekarang["mday"];
echo "<br>";
echo "Bulan: " . $sekarang["month"];
echo "<br>";
echo "Tahun: " . $sekarang["year"];
?>
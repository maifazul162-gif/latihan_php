<?php

$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Mencetak nama buah pertama
echo "Nama buah pertama adalah: " . $buah[0][0] . "<br><br>";

// 2. Menghitung total nilai stok * harga untuk semua buah
$total_nilai = 0;
foreach ($buah as $item) {
    // Menghitung nilai per buah (harga * stok) dan menambahkannya ke total
    $total_nilai += $item[1] * $item[2];
}

echo "Total nilai keseluruhan stok buah adalah: Rp. " . number_format($total_nilai, 0, ',', '.');

?>
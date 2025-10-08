<?php

// Membuat array 2 dimensi berisi data 3 siswa
$data_siswa = [
    ['Siswa A', 85, 90],
    ['Siswa B', 78, 88],
    ['Siswa C', 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 adalah: " . $data_siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan perulangan (looping)
echo "--- Semua data siswa ---<br>";
foreach ($data_siswa as $siswa) {
    echo "Nama: " . $siswa[0] . ", Nilai Matematika: " . $siswa[1] . ", Nilai Bahasa: " . $siswa[2] . "<br>";
}

?>
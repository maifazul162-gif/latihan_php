<?php

// Membuat array 2 dimensi 3x3 berisi angka acak (1-9)
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

echo "<h3>Matriks 3x3 Acak:</h3>";
// Mencetak array dalam bentuk matriks menggunakan HTML table
echo "<table border='1' cellpadding='10' cellspacing='0'>";
foreach ($matriks as $baris) {
    echo "<tr>";
    foreach ($baris as $elemen) {
        echo "<td>" . $elemen . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// Menghitung jumlah total semua elemen
$total = 0;
foreach ($matriks as $baris) {
    foreach ($baris as $elemen) {
        $total += $elemen;
    }
}

echo "Jumlah total semua elemen dalam matriks adalah: " . $total;

?>
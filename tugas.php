<?php
// --- Tugas 1 ---
// Kenapa "90" + "80" bisa jadi 170?
// Karena PHP otomatis convert string angka ke integer kalau dipakai di operasi aritmatika.
$tugas1 = "90";
$tugas2 = "80";
$jumlah = $tugas1 + $tugas2; 

// --- Tugas 2 ---
// Bedanya / dan %
$pembagian = 10 / 3; // hasilnya 3.333...
$modulo = 10 % 3;    // hasilnya 1

// --- Tugas 3 ---
// Gabungkan string jadi "9080"
$gabung = $tugas1 . $tugas2; 

// --- String bawaan ---
$string1='Ini adalah string sederhana'; 
$string2='Ini adalah 
string yang bisa 
memiliksi beberapa 
baris'; 
$string3='Dia berkata: "I\'ll be back"'; 
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc'; 
$string5='Kalimat ini tidak akan pindah ke: \n baris baru'; 
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3'; 

// --- Output ---
echo "<h3>Tugas 1</h3>";
echo "Hasil dari '90' + '80' = " . $jumlah . "<br>";

echo "<h3>Tugas 2</h3>";
echo "Hasil 10 / 3 = " . $pembagian . "<br>";
echo "Hasil 10 % 3 = " . $modulo . "<br>";

echo "<h3>Tugas 3</h3>";
echo "Gabungan string tugas1 dan tugas2 = " . $gabung . "<br><br>";

echo "<h3>String Bawaan</h3>";
echo $string1; echo "<br>";  
echo $string2; echo "<br>";  
echo $string3; echo "<br>";  
echo $string4; echo "<br>";  
echo $string5; echo "<br>";  
echo $string6; 
?>
<?php
echo "<h2>Tabel 1 Karakter Khusus untuk Double Quoted String</h2>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Karakter</th><th>Fungsi / Arti</th></tr>";
echo "<tr><td>\\n</td><td>Pindah ke baris baru (newline / line break)</td></tr>";
echo "<tr><td>\\r</td><td>Carriage return (balik ke awal baris)</td></tr>";
echo "<tr><td>\\t</td><td>Tabulasi (spasi panjang seperti tombol Tab)</td></tr>";
echo "<tr><td>\\\"</td><td>Menampilkan tanda kutip dua (\") di dalam string</td></tr>";
echo "<tr><td>\\'</td><td>Menampilkan tanda kutip satu (') di dalam string</td></tr>";
echo "<tr><td>\\\\</td><td>Menampilkan tanda backslash (\\)</td></tr>";
echo "<tr><td>\\$</td><td>Menampilkan simbol dollar (\$) agar tidak terbaca sebagai variabel</td></tr>";
echo "</table>";

echo "<br><h2>Contoh Penggunaan</h2>";

$nama = "Maifazul";

// contoh \n (newline)
echo nl2br("Halo $nama\nSelamat datang!\n\n");

// contoh \t (tabulasi) → pakai <pre> biar spasi keliatan
echo "<pre>Nama:\t$nama</pre>";

// contoh \" (kutip dua di dalam string)
echo "Dia berkata: \"Aku akan kembali\"<br>";

// contoh \$ (simbol dollar bukan variabel)
echo "Harga: \$100<br>";

// contoh \\ (backslash)
echo "Lokasi file: C:\\xampp\\htdocs<br>";
?>
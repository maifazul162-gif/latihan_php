<?php
// Array 2 dimensi (tabel mahasiswa: nama, jurusan, angkatan)
$mahasiswa = [
["Andi", "Informatika", 2021],
["Budi", "Sistem Informasi", 2020],
["Citra", "Bisnis Digital", 2022]
];
// Akses elemen
echo $mahasiswa[0][0]; // Output: Andi
echo $mahasiswa[1][1]; // Output: Sistem Informasi
?>

138

Array Asosiatif Multidimensi
<?php
$produk = [
["nama" => "Laptop", "harga" => 7500000, "stok" => 10],
["nama" => "HP", "harga" => 3000000, "stok" => 15],
["nama" => "Tablet", "harga" => 2500000, "stok" => 7],
];
// Menampilkan semua produk
foreach ($produk as $p) {
echo "Nama: " . $p["nama"] . " | Harga: " . $p["harga"] . " | Stok: " .
$p["stok"] . "<br>";
}
?>
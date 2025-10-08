<?php

// Membuat array asosiatif multidimensi untuk 3 produk
$produk = [
    [
        'nama' => 'Smartphone Android',
        'kategori' => 'Elektronik',
        'harga' => 5500000,
        'rating' => 4.8
    ],
    [
        'nama' => 'Keyboard Gaming RGB',
        'kategori' => 'Aksesoris Komputer',
        'harga' => 1200000,
        'rating' => 4.5
    ],
    [
        'nama' => 'Headphone Noise Cancelling',
        'kategori' => 'Elektronik',
        'harga' => 3800000,
        'rating' => 4.9
    ]
];

// Cetak daftar semua produk
echo "<h3>Daftar Semua Produk:</h3>";
foreach ($produk as $item) {
    echo "Nama Produk: " . $item['nama'] . "<br>";
    echo "Kategori: " . $item['kategori'] . "<br>";
    echo "Harga: Rp " . number_format($item['harga'], 0, ',', '.') . "<br>";
    echo "Rating: " . $item['rating'] . "<br>";
    echo "<br>"; // Baris kosong untuk memisahkan setiap produk
}

// Tambahkan pemisah
echo "<hr>";

// Inisialisasi variabel untuk melacak produk dengan harga tertinggi
$produk_termahal = null;
$harga_tertinggi = 0;

// Looping untuk mencari produk dengan harga tertinggi
foreach ($produk as $item) {
    if ($item['harga'] > $harga_tertinggi) {
        $harga_tertinggi = $item['harga'];
        $produk_termahal = $item;
    }
}

// Cetak produk dengan harga tertinggi
if ($produk_termahal) {
    echo "<h3>Produk dengan Harga Tertinggi:</h3>";
    echo "Nama Produk: " . $produk_termahal['nama'] . "<br>";
    echo "Kategori: " . $produk_termahal['kategori'] . "<br>";
    echo "Harga: Rp " . number_format($produk_termahal['harga'], 0, ',', '.') . "<br>";
    echo "Rating: " . $produk_termahal['rating'] . "<br>";
} else {
    echo "Tidak ada produk yang ditemukan.";
}

?>
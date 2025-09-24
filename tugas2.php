<?php

// Contoh 1: Validasi Login Sederhana
$username_input = "pengguna";
$password_input = "rahasia";

$username_database = "pengguna";
$password_database = "rahasia";

echo "<h2>1. Validasi Login</h2>";
if ($username_input == $username_database && $password_input == $password_database) {
    echo "<p style='color: green;'>Login berhasil! Selamat datang, " . $username_input . ".</p>";
} else {
    echo "<p style='color: red;'>Username atau password salah.</p>";
}

echo "<hr>";

// Contoh 2: Akses Berdasarkan Peran Pengguna (Role-Based Access Control)
$user_role = "admin"; // Bisa diganti 'editor' atau 'user'

echo "<h2>2. Akses Berdasarkan Peran Pengguna</h2>";
if ($user_role == "admin") {
    echo "<p>Selamat datang, Admin! Anda dapat mengakses semua fitur.</p>";
    echo "<p>Tombol: Tambah Produk | Kelola Pengguna | Laporan Penjualan</p>";
} else if ($user_role == "editor") {
    echo "<p>Selamat datang, Editor! Anda dapat mengelola konten.</p>";
    echo "<p>Tombol: Kelola Produk | Edit Artikel</p>";
} else {
    echo "<p>Selamat datang, Pengguna Biasa! Anda hanya dapat melihat konten.</p>";
    echo "<p>Tombol: Lihat Produk | Baca Artikel</p>";
}

echo "<hr>";

// Contoh 3: Status Pesanan (E-commerce)
$order_status = "pending_payment"; // Bisa diganti 'processing', 'shipped', 'completed'

echo "<h2>3. Status Pesanan teabreak</h2>";
if ($order_status == "pending_payment") {
    echo "<p>Status Pesanan: <span style='color: orange;'>Menunggu Pembayaran</span>. Silakan selesaikan pembayaran Anda.</p>";
} else if ($order_status == "processing") {
    echo "<p>Status Pesanan: <span style='color: blue;'>Diproses</span>. Pesanan Anda sedang disiapkan.</p>";
} else if ($order_status == "shipped") {
    echo "<p>Status Pesanan: <span style='color: purple;'>Dikirim</span>. Pesanan Anda sedang dalam perjalanan.</p>";
} else if ($order_status == "completed") {
    echo "<p>Status Pesanan: <span style='color: green;'>Selesai</span>. Terima kasih telah berbelanja.</p>";
} else {
    echo "<p>Status Pesanan tidak diketahui.</p>";
}

?>
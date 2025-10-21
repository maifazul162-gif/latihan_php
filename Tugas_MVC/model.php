<?php
// model.php

function getAllBooks() {
    // Data buku disimpan dalam bentuk array asosiatif
    $books = [
        [
            "judul" => "Pemrograman Web Dasar",
            "pengarang" => "Andi Wijaya",
            "tahun" => 2022
        ],
        [
            "judul" => "Algoritma dan Struktur Data",
            "pengarang" => "Budi Santoso",
            "tahun" => 2021
        ],
        [
            "judul" => "Sistem Informasi Manajemen",
            "pengarang" => "Citra Dewi",
            "tahun" => 2020
        ]
    ];
    return $books;
}
?>

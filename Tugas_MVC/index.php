<?php
// index.php

// Memanggil model
require_once 'model.php';

// Mengambil data dari model
$books = getAllBooks();

// Memanggil view dan mengirim data
require_once 'view.php';
?>

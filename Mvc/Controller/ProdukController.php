<?php
require_once "model/produk.php";
require_once "view/produkview.php";
class ProdukController {
public function index() {
$model = new produk();
$view = new produkview();
// Ambil data dari model
$produkList = $model->getAllProduk();
// Kirim data ke view
$view->tampilkan($produkList);
}
}
?>
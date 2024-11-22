<?php
// index.php
include_once 'config.php';
include_once 'controller/BarangController.php';

$db = getDB();  // Koneksi ke database
$barangController = new BarangController($db);

// Menentukan aksi (action) yang diinginkan
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($action == 'add') {
    $barangController->add();  // Menambah barang
} else {
    $barangController->index();  // Menampilkan daftar barang
}
?>

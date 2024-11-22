<?php
// controller/BarangController.php
include_once __DIR__ . '/../model/Barang.php'; // Perbaikan path model

class BarangController {
    private $barangModel;

    public function __construct($db) {
        $this->barangModel = new Barang($db);
    }

    public function index() {
        $barangList = $this->barangModel->getAllBarang();
        include __DIR__ . '/../view/index.php';  // Perbaikan path view
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $namaBarang = $_POST['nama'];
            $this->barangModel->addBarang($namaBarang);
            header('Location: /');  // Redirect ke halaman utama setelah tambah barang
        }
    }
}
?>

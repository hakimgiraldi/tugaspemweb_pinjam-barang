<?php
// model/Barang.php
class Barang {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllBarang() {
        $query = "SELECT * FROM barang";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addBarang($nama) {
        $query = "INSERT INTO barang (nama) VALUES (:nama)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->execute();
    }
}
?>

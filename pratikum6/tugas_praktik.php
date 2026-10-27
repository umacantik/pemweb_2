<?php
require_once 'pbl_pengguna.php';

class Administrasi extends Pengguna {
    private $idPegawai;
    private $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian) {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "ID Pegawai: " . $this->idPegawai . "<br>";
        echo "Bagian: " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Tenaga Administrasi<br>";
    }
}

echo "<h2>Data Tenaga Administrasi</h2>";

$admin = new Administrasi(
    "Andi",
    "andi@gmail.com",
    "ADM001",
    "Akademik"
);

$admin->tampilkanData();
$admin->tampilkanPeran();
?>
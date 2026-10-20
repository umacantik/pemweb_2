<?php
class Mahasiswa {
    private $nama;

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
}
$mhs1 = new Mahasiswa();
$mhs1->setNama("Andi");

echo "Nama Mahasiswa: " . $mhs1->getNama();
?>
<?php
class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getNim() {
        return $this->nim;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getProdi() {
        return $this->prodi;
    }

}
$mhs1 = new Mahasiswa(
    "2301001",
    "Andi",
    "Sistem Informasi"
);

echo "NIM: " . $mhs1->getNim() ."<br>";
echo "Nama: " . $mhs1->getNama() ."<br>";
echo "Prodi: " . $mhs1->getProdi() ."<br>";

?>
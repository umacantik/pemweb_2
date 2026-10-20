<?php
class Mahasiswa {
    protected $prodi;

    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }
     public function getProdi() {
        return $this->prodi;
    }
}
$mhs1 = new Mahasiswa();
$mhs1->setProdi("Sistem Informasi");
echo $mhs1->getProdi();
?>
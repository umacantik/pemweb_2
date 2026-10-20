<?php
class Mahasiswa{
    public $nama;
    public $prodi;

    public function __construct()
{
    $this->nama="andi";
    $this->prodi="Sistem Informasi";
}
public function tampilkanData(){
    echo"Nama: " . $this->nama . "<br>";
    echo "Prodi: " . $this->prodi;
}
}
$mhs1= new Mahasiswa();
$mhs1->tampilkanData();
?>
<?php
class Pengguna {
    public function tampilkanPeran(){
        echo "Peran: Pengguna Sistem Informasi";
    }
}
class Mahasiswa extends Pengguna {
    public function tampilkanPeran(){
        echo "Peran: Mahasiswa";
    }
}
class Dosen extends Pengguna {
    public function tampilkanPeran(){
        echo "Peran: Dosen";
    }
}
$mhs = new Mahasiswa();
$dosen = new Dosen();

$mhs->tampilkanPeran();

echo "<br>";
$dosen->tampilkanPeran();
?>
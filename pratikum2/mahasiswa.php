<?php

// ==========================================
// PRAKTIKUM 6
// Menambahkan Method
// ==========================================

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br>";
    }
}


// Membuat object

$mhs1 = new Mahasiswa();

$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;


// Menampilkan data menggunakan method

echo "<h2>Praktikum 6 - Data Mahasiswa</h2>";

$mhs1->tampilkanData();


// ==========================================
// PRAKTIKUM 7
// Perbandingan Prosedural dan PBO
// ==========================================

echo "<hr>";

echo "<h2>Praktikum 7 - Perbandingan</h2>";

echo "<h3>Prosedural</h3>";

$nama = "Andi";

function tampilkanNama($nama)
{
    echo "Nama : " . $nama;
}

tampilkanNama($nama);


echo "<h3>PBO</h3>";

class MahasiswaNama
{
    public $nama;

    public function tampilkanNama()
    {
        echo "Nama : " . $this->nama;
    }
}

$mhsNama = new MahasiswaNama();
$mhsNama->nama = "Andi";

$mhsNama->tampilkanNama();


// ==========================================
// PRAKTIKUM 8
// Sistem Data Buku
// ==========================================

echo "<hr>";

echo "<h2>Praktikum 8 - Sistem Data Buku</h2>";

class Buku
{
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode . "<br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahun . "<br>";
    }
}


// Object buku pertama

$buku1 = new Buku();

$buku1->kode = "B001";
$buku1->judul = "Pemrograman PHP";
$buku1->penulis = "Andi";
$buku1->tahun = 2024;

$buku1->tampilkanData();


// ==========================================
// PRAKTIKUM 9
// Sistem Mahasiswa dan Grade
// ==========================================

echo "<hr>";

echo "<h2>Praktikum 9 - Sistem Mahasiswa</h2>";

class MahasiswaNilai
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }

    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}


// Object mahasiswa

$mhsNilai = new MahasiswaNilai();

$mhsNilai->nim = "23001";
$mhsNilai->nama = "Andi";
$mhsNilai->prodi = "Sistem Informasi";
$mhsNilai->nilai = 85;


// Menampilkan data dan grade

$mhsNilai->tampilkanData();

?>
<?php

// Praktikum 2
// Membuat Class Mahasiswa

class Mahasiswa
{
    // Property
    public $nim;
    public $nama;
    public $prodi;
    public $semester;
}


// Praktikum 3
// Membuat Object pertama

$mhs1 = new Mahasiswa();


// Praktikum 4
// Mengisi Property Object pertama

$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;


// Menampilkan data object pertama

echo "<h2>Data Mahasiswa 1</h2>";

echo "NIM : " . $mhs1->nim . "<br>";
echo "Nama : " . $mhs1->nama . "<br>";
echo "Prodi : " . $mhs1->prodi . "<br>";
echo "Semester : " . $mhs1->semester . "<br>";


// Praktikum 5
// Membuat Object kedua

$mhs2 = new Mahasiswa();

$mhs2->nim = "23002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;


// Menampilkan data object kedua

echo "<h2>Data Mahasiswa 2</h2>";

echo "NIM : " . $mhs2->nim . "<br>";
echo "Nama : " . $mhs2->nama . "<br>";
echo "Prodi : " . $mhs2->prodi . "<br>";
echo "Semester : " . $mhs2->semester . "<br>";

?>
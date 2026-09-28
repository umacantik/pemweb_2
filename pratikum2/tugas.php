<?php

class Mahasiswa
{
    // Property
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    // Constructor
    public function __construct($nim, $nama, $prodi, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->nilai = $nilai;
    }

    // Method menentukan grade
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

    // Method menampilkan data
    public function tampilkanData()
    {
        echo "NIM    : " . $this->nim . "<br>";
        echo "Nama   : " . $this->nama . "<br>";
        echo "Prodi  : " . $this->prodi . "<br>";
        echo "Nilai  : " . $this->nilai . "<br>";
        echo "Grade  : " . $this->tentukanGrade() . "<br>";
    }
}

// Membuat object
$mahasiswa1 = new Mahasiswa(
    "23001",
    "Andi",
    "Sistem Informasi",
    85
);

$mahasiswa2 = new Mahasiswa(
    "23002",
    "Budi",
    "Teknik Informatika",
    72
);

// Menampilkan data
echo "<h2>Data Mahasiswa</h2>";

$mahasiswa1->tampilkanData();

echo "<hr>";

$mahasiswa2->tampilkanData();

?>

<?php

// Class Kendaraan
class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status;

    public function __construct($nomor, $merk, $jenis, $status)
    {
        $this->nomor = $nomor;
        $this->merk = $merk;
        $this->jenis = $jenis;
        $this->status = $status;
    }

    // Method menampilkan data kendaraan
    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk             : " . $this->merk . "<br>";
        echo "Jenis            : " . $this->jenis . "<br>";
        echo "Status           : " . $this->status . "<br>";
    }

    // Method mengecek status kendaraan
    public function statusKendaraan()
    {
        if ($this->status == "Tersedia") {
            return "Kendaraan dapat disewa.";
        } else {
            return "Kendaraan sedang disewa.";
        }
    }
}


// Class Pelanggan
class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    public function __construct($id, $nama, $alamat)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    // Method menampilkan data pelanggan
    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama         : " . $this->nama . "<br>";
        echo "Alamat       : " . $this->alamat . "<br>";
    }

    // Method menyewa kendaraan
    public function sewaKendaraan($kendaraan)
    {
        if ($kendaraan->status == "Tersedia") {
            $kendaraan->status = "Disewa";

            echo $this->nama . " berhasil menyewa kendaraan "
                . $kendaraan->merk . ".<br>";
        } else {
            echo "Maaf, kendaraan sedang disewa.<br>";
        }
    }
}


// Membuat object kendaraan
$kendaraan1 = new Kendaraan(
    "K001",
    "Toyota Avanza",
    "Mobil",
    "Tersedia"
);

$kendaraan2 = new Kendaraan(
    "K002",
    "Honda Beat",
    "Motor",
    "Tersedia"
);


// Membuat object pelanggan
$pelanggan1 = new Pelanggan(
    "P001",
    "Andi",
    "Surabaya"
);

$pelanggan2 = new Pelanggan(
    "P002",
    "Budi",
    "Malang"
);


// Menampilkan data kendaraan
echo "<h2>Data Kendaraan</h2>";

$kendaraan1->tampilkanData();
echo $kendaraan1->statusKendaraan();

echo "<hr>";

$kendaraan2->tampilkanData();
echo $kendaraan2->statusKendaraan();


// Menampilkan data pelanggan
echo "<h2>Data Pelanggan</h2>";

$pelanggan1->tampilkanData();

echo "<hr>";

$pelanggan2->tampilkanData();


// Proses penyewaan
echo "<h2>Transaksi Rental</h2>";

$pelanggan1->sewaKendaraan($kendaraan1);

echo "<br>";

echo "Status kendaraan setelah disewa: "
    . $kendaraan1->statusKendaraan();

?>
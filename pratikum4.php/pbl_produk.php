<?php
class Produk
{
    public $kode;
    public $nama;
    public $harga;
    public $stok;
    public $diskon; 
    public $nilaiStok;

    public function __construct($kode, $nama, $harga, $stok, $diskon = 0)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon; // Default 0 jika tidak diisi
        $this->nilaiStok = $this->hitungNilaiStok();
    }

    public function hitungHargaDiskon()
    {
        $potongan = $this->harga * ($this->diskon / 100);
        return $this->harga - $potongan;
    }

    public function hitungNilaiStok()
    {
        return $this->hitungHargaDiskon() * $this->stok;
    }

    public function tampilData()
    {
        $hargaAkhir = $this->hitungHargaDiskon();

        echo "<h3>Data Produk</h3>";
        echo "Kode : " . $this->kode . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Harga Normal : Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Diskon : " . $this->diskon . "%<br>";
        echo "Harga Setelah Diskon : Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br>";
        echo "Stok : " . $this->stok . "<br>";
        echo "Nilai Total Stok : Rp " . number_format($this->nilaiStok, 0, ',', '.') . "<br>";
    }
}

$produk1 = new Produk(
    "p001",
    "Laptop acer",
    7000000,
    10,
    10
);

$produk2 = new Produk(
    "p002",
    "Mouse",
    70000,
    25
);

$produk1->tampilData();
echo "<hr>";
$produk2->tampilData();
?>
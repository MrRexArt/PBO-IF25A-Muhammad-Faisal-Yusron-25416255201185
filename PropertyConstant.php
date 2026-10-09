
<?php

class Produk {
    // Property
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    // Constant
    const PAJAK = 0.11;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Menghitung harga setelah pajak
    public function hitungTotalHarga() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

// Membuat objek produk
$produk1 = new Produk("P001", "Laptop", 10000000, 5);

// Menampilkan output
echo "Produk: " . $produk1->nama . "<br>";
echo "Harga: Rp" . number_format($produk1->harga, 0, ',', '.') . "<br>";
echo "Stok: " . $produk1->stok . "<br>";
echo "Pajak: " . (Produk::PAJAK * 100) . "%<br>";
echo "<br>";

echo "Total harga setelah pajak: Rp" .
    number_format($produk1->hitungTotalHarga(), 0, ',', '.');

?>

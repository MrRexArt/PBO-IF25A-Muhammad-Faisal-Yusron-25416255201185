<?php

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}

$produk = new Produk();
$produk ->kode = "P001";
$produk -> nama = "Laptop";
$produk -> harga = 10000000;
$produk -> stok = 5;



echo "Produk: " . $produk-> nama . "<br>";
echo "Harga: " . $produk->harga . "<br>";
echo "Stok: " . $produk-> stok . "<br>";
echo "Pajak: " . $produk->pajak() . "<br>  ";
echo "<br>";
echo "Total harga setelah pajak: Rp." . $produk->total();
?>
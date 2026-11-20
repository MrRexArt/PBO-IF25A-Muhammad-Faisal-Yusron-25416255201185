<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\produk;

$produk = new produk();

$produk->setKode('POO1')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStock(5);

echo "Produk: ". $produk->getNama();
echo "</br>";
echo "Harga: ". $produk->getHarga();
echo "</br>";
echo "Stock: ". $produk->getStock();
echo "</br>";
echo "Pajak: ". $produk->pajak() ."%";
echo "</br>";
echo "</br>";
echo "Total Harga Setelah Pajak: Rp.". $produk->total();
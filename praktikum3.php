<?php
class Produk {
    public static $jumlahProduk = 0;

    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {
    final public function prosesTransaksi($produkList) {
        $total = 0;

        echo "<h3>Daftar Produk:</h3>";
        foreach ($produkList as $produk) {
            echo "Nama: " . $produk->nama . " | Harga: " . $produk->harga . "<br>";
            $total += $produk->harga;
        }

        echo "<br>Total Bayar: " . $total;
        echo "<br>Transaksi diproses";
    }
}

$p1 = new Produk("Buku", 10000);
$p2 = new Produk("Pulpen", 5000);
$p3 = new Produk("Tas", 75000);

$p1->tambahProduk();
$p2->tambahProduk();
$p3->tambahProduk();

echo "Total Produk: " . Produk::$jumlahProduk;
echo "<hr>";

$transaksi = new Transaksi();
$transaksi->prosesTransaksi([$p1, $p2, $p3]);
?>
<?php
$harga_produk = 120000;
$diskon_persen = 20;
$diskon = 0;

if ($harga_produk > 100000) {
    $diskon = ($diskon_persen / 100) * $harga_produk;
}

$harga_setelah_diskon = $harga_produk - $diskon;

echo "Harga produk: Rp " . $harga_produk . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Harga yang harus dibayar setelah diskon: Rp " . $harga_setelah_diskon;
?>
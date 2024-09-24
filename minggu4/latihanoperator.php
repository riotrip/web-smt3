<?php
$total_kursi = 45;
$kursi_terisi = 28;

$kursi_kosong = $total_kursi - $kursi_terisi;
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Persentase kursi yang masih kosong: " . $persentase_kosong . "%";
?>
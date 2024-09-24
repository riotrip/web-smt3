<?php
$poin = [200, 150, 300, 100];

$totalPoin = 0;
$i = 0;

while ($i < 4) {
    $totalPoin += $poin[$i];
    $i++;
}

echo "Total skor pemain adalah: " . $totalPoin . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan?<br>";

if ($poin > 500) {
    echo "(YA)";
} else {
    echo "(Tidak)";
}
?>
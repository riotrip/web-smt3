<?php
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$jumlahSiswa = 0;
$totalNilai = 0;

foreach ($siswa as $data) {
    $jumlahSiswa++;
    $totalNilai += $data[1];
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . $rataRata . "<br>";

echo "Siswa dengan nilai di atas rata-rata:<br>";
foreach ($siswa as $data) {
    if ($data[1] > $rataRata) {
        echo $data[0] . " mendapatkan nilai " . $data[1] . "<br>";
    }
}
?>
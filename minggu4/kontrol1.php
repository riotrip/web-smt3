<?php
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$jumlah_nilai = 10;
for ($i = 0; $i < $jumlah_nilai - 1; $i++) {
    for ($j = 0; $j < $jumlah_nilai - $i - 1; $j++) {
        if ($nilai_siswa[$j] > $nilai_siswa[$j + 1]) {
            $temp = $nilai_siswa[$j];
            $nilai_siswa[$j] = $nilai_siswa[$j + 1];
            $nilai_siswa[$j + 1] = $temp;
        }
    }
}

$total_nilai = 0;
$nilai_terhitung = 0;

for ($i = 2; $i < $jumlah_nilai - 2; $i++) {
    $total_nilai += $nilai_siswa[$i];
    $nilai_terhitung++;
}

$rata_rata = $total_nilai / $nilai_terhitung;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $rata_rata;
?>
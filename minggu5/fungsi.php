<?php
// //fungsi
// function perkenalan()
// {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Rio<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }


// //fungsi parameter
// //memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();

// //memanggil fungsi
// function perkenalan($nama, $salam)
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Halo");
// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan($saya, $ucapanSalam);


// //fungsi default
// function perkenalan($nama, $salam = "Assalamualaikum")
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Halo");
// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan($saya);


// //fungsi nilai balik
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang)
// {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// echo "Umur saya adalah " . hitungUmur(2004, 2024) . " tahun";


// //fungsi dalam fungsi
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang)
// {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// function perkenalan($nama, $salam = "Assalamualaikum")
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";

//     //memanggil fungsi lain
//     echo "Umur saya adalah " . hitungUmur(2004, 2024) . " tahun<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi perkenalan
// perkenalan("Rio");
?>
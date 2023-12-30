<?php

// ARRAY
// variable yang mampu menampung banyak nilai
// element pada array boleh memiliki tipe data yg berbeda
// pasangan antara key dan value  
// key nya adalah index, yg dimulai dari 0

// cara lama 
$hari = array("Senin", "Selasa", "Rabu");

// cara baru 
$bulan = ["Januari", "Februari"];

// // menampilkan array
// // var_dump() / print_r()
// // echo $hari; salah
// // var_dump($hari);
// print_r($hari);

// // menampilkan 1 elemen pada array
// echo $bulan[0];
// echo $bulan[1];
// echo $hari[2];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>
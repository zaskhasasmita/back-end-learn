<?php

// Date
// untuk menampilkan tanggal dengan format tertentu
echo date("l, d M Y");

echo "<br>";///////////////////////////////

// Time
// akan menampilkan UNIX TimeStamp /EPOCH time
// detik yang sudah beralu sejak 1januari 1970
echo time();
echo date("l", time() + 60 * 60 * 24 * 100 ); // ngecek 100 hari ke depan

echo date("l", time() - 60 * 60 * 24 * 100 ); // ngecek 100 hari ke belakang
echo date("d M Y", time() - 60 * 60 * 24 * 100 ); // ngecek 100 hari ke belakang

echo "<br>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun

echo date("l", mktime(0,0,0,8,22,2001));


// strtotime

echo date("l", strtotime("22 aug 2001"));

// yg akan serin digunakan 
// ///// Date/ Time
// time()
// date()
// mktime()
// strtotime()


// /// String
// strlen()
// strcmp()
// explode()
// htmlspecialchars()

// /// Utility
// var_dump()
// isset()
// empty()
// die()
// sleep()





?>
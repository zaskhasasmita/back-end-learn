<?php
// ini adalah komentar
/*
    Ini Komentar
    Yang bisa banyak baris
*/

// Pertemuan 2 - PHP Dasar

// Sintaks PHP

// Standar Output
// echo, 
// print, 
// print_r(mencetak isi array)
// var_dump

echo "Zaskha Sasmita<br>";  
print "Zaskha Sasmita<br>";
print_r("Zaskha Sasmita<br>");
var_dump("Zaskha Sasmita");
echo 123;
echo true;
echo false;


// Penulisan Syntax PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


///////  Variable dan tipe data
//  Variable
// gaboleh diawali angka, tapi boleh ngandung angka
$nama = "Zaskha Sasmita";

echo "Tepangkeun nami abdi $nama";

//// Operator
// Aritmatika
// + - * / %
echo 1 + 2;
$x = 10;
$y = 20;
echo $x * $y ;

// Penggabung String
// .

$nama_depan = "Zaskha";
$nama_belakang = "Sasmita";
echo $nama_depan . " " . $nama_belakang ;


// Assignment
// = , +=, -=, *=, /=, %=, .=
$x = 1; 
$x += 5;

echo $x;

$nama = "Zaskha";
$nama .= " ";
$nama .= "Sasmita";
echo $nama;

// Perbandingan 
// <, >, <=, >=, ==, !=

var_dump(1<5);

// identitas
// === , !==
var_dump(1 === "1");


// Logika
// &&, ||, !
 $ex = 10;
 var_dump($ex < 20 && $x %2 == 0); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo Selamat Datang <?php echo $nama;?></h1>
    <p><?php echo "ini adalah Pragraf"?></p>

    <?php
        echo "<h2>Ini HTML di PHP</h2>"
    ?>
</body>
</html>
<?php

// $mahasiswa = [
//     ["Zaskha", "193040134", "Teknik Informatika", "zaskha@mail.com"],
//     ["Riki", "193040133", "Pertanian", "riki@mail.com"],
//     ["Bayyin", "193040132", "Teknik Elektro", "bayyin@mail.com"],
// ];



// ARRAY ASSOCIATIVE
// Key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Zaskha", 
        "nrp" => "193040134", 
        "jurusan" => "Teknik Informatika", 
        "email" => "zaskha@mail.com",
        "gambar" => "https://source.unsplash.com/100x100?people-a"
    ],
    [
        "nrp" => "193040133", 
        "nama" => "Riki", 
        "jurusan" => "Agro", 
        "email" => "riki@mail.com",
        "gambar" => "https://source.unsplash.com/100x100?people-b"
    ],
    [
        "nama" => "Bayyin", 
        "nrp" => "193040132", 
        "jurusan" => "Teknik Elektro", 
        "email" => "bayyin@mail.com",
        "gambar" => "https://source.unsplash.com/100x100?people-c"
        // "tugas" => [90, 80, 100],
    ],
];

echo $mahasiswa[0]["nama"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>
            <img src="<?= $mhs["gambar"] ?>" alt="">
        </li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NRP : <?= $mhs["nrp"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        <li>E-mail : <?= $mhs["email"] ?></li>
    </ul>
    <?php } ?>


</head>
<body>
    
</body>
</html>
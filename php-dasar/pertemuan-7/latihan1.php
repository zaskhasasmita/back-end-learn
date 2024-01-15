<?php

// Variable Scope / lingkup variable
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();

// SUPERGLOBALS
// variable Global Milik PHP
// Merupakan Array Associative
// var_dump($_SERVER);
// echo $_SERVER['SERVER_NAME'];

$mahasiswa = [
    [
        "nama" => "Zaskha", 
        "nrp" => "193040134", 
        "jurusan" => "Teknik Informatika", 
        "email" => "zaskha@mail.com",
        "gambar" => "https://source.unsplash.com/100x100?a",
    ],
    [
        "nrp" => "193040133", 
        "nama" => "Riki", 
        "jurusan" => "Agro", 
        "email" => "riki@mail.com",
        "gambar" => "https://source.unsplash.com/100x100?b",
    ],
    [
        "nama" => "Bayyin", 
        "nrp" => "193040132", 
        "jurusan" => "Teknik Elektro", 
        "email" => "bayyin@mail.com",
        "gambar" => "https://source.unsplash.com/100x100?c",
        // "tugas" => [90, 80, 100],
    ],
];


?>

<?php

// $_GET
// $_GET["nama"] = "Zaskha Sasmita";
// $_GET["nrp"] = "193040134";
var_dump($_GET);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <!-- <li><img src="<?php echo $mhs['gambar'];?>" alt=""></li> -->
            <li>
                <a href="latihan2.php?nama=<?=$mhs['nama']?>&nrp=<?=$mhs['nrp']?>&email=<?=$mhs['email']?>&jurusan=<?=$mhs['jurusan']?>"><?=$mhs['nama'];?></a>
            </li>
            <!-- <li><?=$mhs['nrp'];?></li> -->
        <?php endforeach;?>
    </ul>
</body>
</html>
<?php

$mahasiswa = [
    ["Zaskha", "193040134", "Teknik Informatika", "zaskha@mail.com"],
    ["Riki", "193040133", "Pertanian", "riki@mail.com"],
    ["Bayyin", "193040132", "Teknik Elektro", "bayyin@mail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    
    <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>NRP : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>E-mail : <?= $mhs[3] ?></li>
    </ul>
    <?php } ?>

</head>
<body>
    
</body>
</html>
<?php 

// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) || 
    !isset($_GET["email"]) || 
    !isset($_GET["jurusan"]) )  {
        // paksa untuk redirect ke halaman awal
        header("Location: latihan1.php");
        exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <a href="latihan1.php">back</a>
    
    <ul>
        <li><img src="https://source.unsplash.com/100x100" alt=""></li>
        <li><?=$_GET['nama']?></li>
        <li><?=$_GET['nrp']?></li>
        <li><?=$_GET['email']?></li>
        <li><?=$_GET['jurusan']?></li>
    </ul>

</body>
</html>
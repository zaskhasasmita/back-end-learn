<?php 
session_start();
    
if( !isset($_SESSION['login']) ) {
    header("Location: Login.php");
    exit;
} 
require 'functions.php';

// cek apakah tombol submit udah ditekan
if( isset($_POST['submit']) ) {

    // var_dump($_FILES); die;
    
    //cek apakah data berhasil ditambah atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data GAGAL ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    
    <h1>Tambah Data Mahasiswa</h1>

    <!-- action -->
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <!-- name nya harus sama dengan field yg ada di table database -->
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">E-Mail :</label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>
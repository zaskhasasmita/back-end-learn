<?php 
require 'functions.php';

// ambil data di url
$id = $_GET['id'];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit udah ditekan
if( isset($_POST['submit']) ) {
    
    //cek apakah data berhasil ubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data BERHASIL ubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data GAGAL ubah');
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
    <title>Ubah Data</title>
</head>
<body>
    
    <h1>Ubah Data Mahasiswa</h1>

    <!-- action -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar'] ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <!-- name nya harus sama dengan field yg ada di table database -->
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp'] ?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs['nama'] ?>">
            </li>
            <li>
                <label for="email">E-Mail :</label>
                <input type="email" name="email" id="email" required value="<?= $mhs['email'] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan'] ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <br>
                <img src="img/<?= $mhs['gambar'] ?>" width="50"> <br>
                <input type="file" name="gambar" id="gambar" >
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>
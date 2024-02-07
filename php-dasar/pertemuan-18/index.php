<?php 

    session_start();
    
    if( !isset($_SESSION['login']) ) {
        header("Location: Login.php");
        exit;
    } 

    require 'functions.php';

    // konfigurasi pagination 
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1 ;
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;


    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman"); 
    // $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC"); // berdasarkan id dibalik
    // $mahasiswa = query("SELECT * FROM mahasiswa WHERE nrp = '193040134'"); // bberdasarkan NRP 193040134
    
    // tombol cari ditekan
    if( isset($_POST['cari']) ) {
        if($_POST['keyword'] == "") {
            $mahasiswa = query("SELECT * FROM mahasiswa"); // semua
        } else {
            $mahasiswa = cari($_POST['keyword']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

   <a href="logout.php" style="float: right;">Logout</a>
    
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Cari Data..."
        autocomplete="off"><!-- ini kalo mau history pencarianyya di hilangkan  -->
        <button type="submit" name="cari">Search</button>
    </form>
    <br><br>

    <!-- navigasi -->

    <?php if($halamanAktif > 1) :?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif;?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
        <?php if( $i == $halamanAktif ) :?>
            <a href="?halaman=<?= $i ?>" style="font-weight: bold; color : red;"><?= $i ?></a>
        <?php else :?>
            <a href="?halaman=<?= $i ?>"><?= $i ?></a>
        <?php endif?>
    <?php endfor;?>

    <?php if($halamanAktif < $jumlahHalaman) :?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif;?>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1;?>
        <?php foreach($mahasiswa as $row) :?>
        <tr>
            <td><?= $i + $awalData; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id'] ?>">ubah</a> | 
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar'] ?>" alt="" width="50">
            </td>
            <td>
                <?= $row['nrp'] ?>
            </td>
            <td>
                <?= $row['nama'] ?>
            </td>
            <td>
                <?= $row['email'] ?>
            </td>
            <td>
                <?= $row['jurusan'] ?>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>

    </table>

</body>
</html>
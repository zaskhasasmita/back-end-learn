<?php 
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa"); // semua
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

   
    
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Cari Data..."
        autocomplete="off"><!-- ini kalo mau history pencarianyya di hilangkan  -->
        <button type="submit" name="cari">Search</button>
    </form>

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
            <td><?= $i ?></td>
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
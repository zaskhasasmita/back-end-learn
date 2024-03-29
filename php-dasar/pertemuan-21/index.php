<?php 

    session_start();
    
    if( !isset($_SESSION['login']) ) {
        header("Location: Login.php");
        exit;
    } 

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
    <style>

    .loader {
        width: 65px;
        position: absolute;
        top: 100px;
        z-index: -1;
        display: none;
    }

    .copyr {
        color: grey; 
        display: none;
    }
    

    @media print {
        .logout, .tambah, .form-cari, .aksi, .btncetak, .gambar, br {
            display: none;
        }

        .copyr {
            display: block;
        }
    }

    </style>
</head>
<body>

   <a href="logout.php" class="logout" style="float: right;">Logout</a>
    
    <h1>Daftar Mahasiswa</h1>

    
    <a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
    <br>
    <br>
    
    <form action="" method="post" class="form-cari">
        <input type="text" name="keyword" id="keyword" size="40" autofocus placeholder="Cari Data..."
        autocomplete="off"><!-- ini kalo mau history pencarianyya di hilangkan  -->
        <button type="submit" name="cari" id="tombol-cari">Search</button>
        
        <img src="img/loader.gif" class="loader">
        
    </form>
    <br>
    
    <button onclick="window.print()" class="btncetak">Cetak Halaman</button>
    <br>
    <br>

    <div id="container">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th class="aksi">Aksi</th>
                <th class="gambar">Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1;?>
            <?php foreach($mahasiswa as $row) :?>
            <tr>
                <td><?= $i ?></td>
                <td class="aksi">
                    <a href="ubah.php?id=<?= $row['id'] ?>">ubah</a> | 
                    <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
                <td class="gambar">
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
    </div>
    

    <p class="copyr"><i>&copy; Zaskha Sasmita 2024</i></p>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
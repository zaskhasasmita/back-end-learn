<?php 
    // //// koneksi ke database
    // // //// urutan parameter : 
    // 1. nama host            = 'localhost'
    // 2. username             = default nya 'root'
    // 3. password             = defautnya kosong ''
    // 4. nama database nya    = 'phpdasar' 
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");


    //ambil data dari table mahasiswa (query data nya)
    // parameter : 
    // 1. Koneksi ke database nya (mysqli_connect)
    // 2. query nya mau apa
    $result =   mysqli_query($conn, "SELECT * FROM mahasiswa");

    // if( !$result ) {
    //     echo mysqli_error($conn);
    // }

    // var_dump($result);

    // ambil data (fetch) mahasiswa dari object result 
        // mysqli_fetch_row()       // mengembalikan array numerik
        // mysqli_fetch_assoc()     // mengembalikan array associative
        // mysqli_fetch_array()     // mengembalikan array numerik dan associative (fleksible)
        // mysqli_fetch_object()    // 

    // while($mhs = mysqli_fetch_assoc($result) ) {
    //     var_dump($mhs['email']);
    // }

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
        <?php while( $row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="#">ubah</a> | 
                <a href="#">hapus</a>
            </td>
            <td>
                <img src="<?= $row['gambar'] ?>" alt="">
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
        <?php endwhile;?>

    </table>

</body>
</html>
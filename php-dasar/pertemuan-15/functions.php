<?php 
    // koneksi ke database
    $conn = mysqli_connect("127.0.0.1", "root", "", "phpdasar");

    // READ
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }

        return $rows;
    }

    // CREATE
    function tambah($data) {
        global $conn;

        // ambil data dari tiap elemen dalam form
        $nrp =  htmlspecialchars($data['nrp']);
        $nama =  htmlspecialchars($data['nama']);
        $email =  htmlspecialchars($data['email']);
        $jurusan =  htmlspecialchars($data['jurusan']);

        // UPLOAD GAMBAR DULU
        $gambar = upload();
        if(!$gambar) {
            return false;
        }

        //query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        //kembalikan angka affected rows
        return mysqli_affected_rows($conn);
    }

    // UPLOAD 
    function upload() {
        
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yg di upload
        if ( $error === 4 ) {
            echo "
                <script>
                    alert('pilih gambar dulu!');
                </script>
            ";
            return false; // gagalin fungsi nya
        }

        //cek apakah yg di upload nya gambar atau bukan 
        // explode()
        // end()
        // strtolower()
        // in_array()
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        // ambil dulu ekstensi nya
        $ekstensiGambar = explode('.', $namaFile); //  zaskha.jpg = ['zaskha', 'jpg'];
        $ekstensiGambar = strtolower(end($ekstensiGambar));// end = ngambil yg akhir bener bener akhir .jpg | strtolower = paksa jadi huruf kecil ekstensinya
        
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) { // gambar yg di upload ada ga di line 64?
            echo "
            <script>
                alert('tolong upload gambar!');
            </script>
        ";
        } 

        // cek jika ukuranya terlalu besar
        if ( $ukuranFile > 1000000 ) { // 1000000 (1jt) = 1MB
            echo "
            <script>
                alert('ukuran gambar kebesaran!');
            </script>
        ";
        }

        //lolos pengecekan, gambar siap diupload
        //generate nama baru
        //uniqid()
        // $namaFileBaru = uniqid();
        // $namaFileBaru .= '.';
        // $namaFileBaru .= $ekstensiGambar;
        $namaFileBaru = uniqid() . '.' . $ekstensiGambar;


        // move_uploaded_file()
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;

    }

    // DELETE
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    // UPDATE
    function ubah($data) {
        global $conn;

        // ambil data dari tiap elemen dalam form
        $id = $data['id'];
        $nrp =  htmlspecialchars($data['nrp']);
        $nama =  htmlspecialchars($data['nama']);
        $email =  htmlspecialchars($data['email']);
        $jurusan =  htmlspecialchars($data['jurusan']);
        $gambarLama = htmlspecialchars($data['gambarLama']);

        // cek apakah user pilih gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        //query update data
        $query = "UPDATE mahasiswa SET nama = '$nama', nrp = '$nrp', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
        mysqli_query($conn, $query);

        //kembalikan angka affected rows
        return mysqli_affected_rows($conn);
    }

    // CARI 
    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa 
        WHERE 
        nama LIKE '%$keyword%' OR 
        nrp LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' 
        ";

        return query($query);
    }

    //REGISTER
    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //cek username udah ada belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert('username sudah terdaftar. cari username lain');
                </script>
            ";
            return false;
        }

        //cek konfirmasi password
        if($password !== $password2) {
            echo "
                <script>
                    alert('password gak sesuai');
                </script>
            ";
            return false;
        }

        // enkripsi password nya
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

        return mysqli_affected_rows($conn);

    }
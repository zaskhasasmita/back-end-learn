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
        $gambar =  htmlspecialchars($data['gambar']);

        //query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        //kembalikan angka affected rows
        return mysqli_affected_rows($conn);
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
        $gambar =  htmlspecialchars($data['gambar']);

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
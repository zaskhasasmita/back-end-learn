<?php 

//cek tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] == "123123") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit();
    } else {
        //jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <h1>Login Admin</h1>

    
    <ul>
        <form action="" method="post">
            
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>

        </form>
    </ul>
    
    <?php if(isset($error)) :?>
        <p>username / password salah</p>
    <?php endif;?>
    
</body>
</html>
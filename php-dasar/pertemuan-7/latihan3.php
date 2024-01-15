<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if (isset($_POST["submit"])) : ?>
    <h1>Selamat Datang <?= $_POST["namasiganteng"] ?></h1>
    <?php endif;?>

    <form method="post"> <!-- tanpa attr action, defaut nya akan mengirim ke halaman ini sendiri, dan tanpa attr method, default nya akan get -->
    <!-- <form action="latihan4.php" method="post"> -->
        Masukan Nama : 
        <input type="text" name="namasiganteng">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>
</html>
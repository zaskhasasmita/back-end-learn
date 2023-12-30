<?php

// Perulangan pada Array
// for / foreach
$angka = [3,2,41,4,213,123,432,123];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            color:white;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- cara pertama -->
    <?php for( $i = 0; $i < count($angka); $i++ ) {?>
        <div class="kotak"><?=  $angka[$i] ?></div>      
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?= $a; ?></div>
        <?php } ?>
        
        <div class="clear"></div>
        
        <?php foreach($angka as $a) : ?>
            <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
            
</body>
</html>
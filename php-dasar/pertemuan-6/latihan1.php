<?php
    
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asosiative</title>
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
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

        <?php foreach($angka as $a) { ?>
            <?php foreach($a as $b) { ?>
                <div class="kotak"><?= $b; ?></div>
            <?php } ?>
            <div class="clear"></div>
        <?php } ?>
        
        
</body>
</html>
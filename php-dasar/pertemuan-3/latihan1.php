<?php

//// PENGULANGAN
// for
// while 
// do .. while
// foreach : Pengulangan Khusus Array
// ///////////

// for
for ( $i = 0; $i < 5; $i++ ) { 
    echo "Hello Zaskha (for)<br>";
}

// while
$a = 0;
while ($a < 5) {
    echo "Hello Zaskha (while)<br>";
    $a++;
}

// do while
$b = 0;
do {
    echo "Hello Zaskha (do..while)<br>";
    $b++;
} while ($b < 5);

$b = 10;
do {
    echo 'Hello Zaskha (do..while - Kalo $b False)<br>';
    $b++;
} while ($b < 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            // for ($i=1; $i <= 3 ; $i++) { 
            //     echo "<tr>";
            //     for ($j=1; $j <= 5; $j++) { 
            //         echo "<td>$i, $j</td>";
            //     }
            //     echo "</tr>";
            // }
        ?>

        <?php for($i = 1; $i <= 5; $i++ ) : ?>
            <?php if($i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif;?>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
                </tr>

        <?php endfor;?>
    </table>

</body>
</html>
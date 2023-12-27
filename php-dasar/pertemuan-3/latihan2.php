<?php

// // PENGKONDISIAN / PERCABANGAN
// if else
// if, else if, if
// ternary
// switch

// if else, if (else if) else
$x = 20;
if( $x < 20 ) 
{
    echo "benar";
} 
else if ($x == 20) 
{
    echo "sama";
}
else {
    echo "salah";
}

echo "<br>";


// ternary
$umur = 25;
$status = ($umur >= 18) ? "Dewasa" : "anakanak";
echo $status;


echo "<br>";

// switch case

$hari = "Sabtu";
switch ($hari) {
    case "Senin":
        echo "Hari kerja";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari libur";
        break;
    default:
        echo "Hari tidak valid";
}


?>
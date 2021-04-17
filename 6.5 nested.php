<?php
$num1 = 26;
$num2 = 10;

if ($num1 > $num2) {
    if ($num1 > 50) {
        echo "Yes, Amader number 50 er cheye boro";
    } elseif ($num1 < 30) {
        if ($num1 == 25) {
            echo "It's 25";
        } else {
            echo "No it's not.";
        }
    } elseif ($num1 < 45) {
        echo "Yes, 45 er cheye choto.";
    } else {
        echo "Tomader ekta condition o hoy nai.";
    }
}
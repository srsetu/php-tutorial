<?php
$num = 1;

while ($num <= 20) :
    if ($num % 2 == 0 && $num % 5 == 0) :
        echo $num;
        echo PHP_EOL;
    endif;
    $num++;
endwhile;
<?php
// break

//for ($i = 1; $i < 100; $i++) {
//    if ($i % 13 == 0) break;
//    echo $i;
//    echo "\n";
//}

// continue

for ($i = 1; $i < 10; $i++) {
    if($i == 3 || $i == 5 || $i == 7) {
        continue;
    }
    echo $i;
    echo "\n";
}
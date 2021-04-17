<?php
//function greetings($name) {
//    echo "Hello, $name";
//}
//
//greetings('Setu');

function addition($a = 0, $b = 0) {
    $result = $a + $b;
    if ($result == 0) {
        echo "Please enter some values";
    } else {
        echo $result;
    }
}

addition(5, 10);
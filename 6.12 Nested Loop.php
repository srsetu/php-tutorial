<?php
$n=5;
for($i=1; $i<=$n; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo PHP_EOL;
}
for($i=$n; $i>=1; $i--)
{
    for($j=1; $j<=$i; $j++)
    {
        echo ' * ';
    }
    echo PHP_EOL;
}
?>
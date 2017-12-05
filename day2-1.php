<?php
$handle = fopen("day2.csv", "r");
$sum = 0;
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $split = str_getcsv($line, "\t");
        natsort($split);
        $sum += end($split) - reset($split);
    }

    fclose($handle);
}

print($sum);
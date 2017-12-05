<?php
$handle = fopen("day4.txt", "r");
$sum = 0;
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $split = str_getcsv($line, " ");

        if(count(array_unique($split)) == count($split))
        {
            $sum++;
        }
    }

    fclose($handle);
}
print($sum);
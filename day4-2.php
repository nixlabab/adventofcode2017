<?php
$handle = fopen("day4.txt", "r");
$sum = 0;
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $split = str_getcsv($line, " ");
        $lineArray = array();
        foreach ( $split as $word )
        {
            $ws = str_split($word);
            natsort($ws);
            array_push($lineArray, implode(" ", $ws));
        }

        if(count(array_unique($lineArray)) == count($lineArray))
        {
            $sum++;
        }

        unset($lineArray);
    }

    fclose($handle);
}
print($sum);
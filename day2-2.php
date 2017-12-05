<?php
$handle = fopen("day2-1.csv", "r");
$sum = 0;
$evenArr = array();
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $split = str_getcsv($line, "\t");
        foreach ( $split as $num )
        {
            foreach ( $split as $num2 ) {

                if (($num % $num2 == 0) && ($num != $num2)) {
                    array_push($evenArr, (int) $num);
                    array_push($evenArr, (int) $num2);
                }
            }
        }

        natsort($evenArr);
        $sum += (end($evenArr) / reset($evenArr));
        unset($evenArr);
        $evenArr = array();
    }

    fclose($handle);
}
print($sum);
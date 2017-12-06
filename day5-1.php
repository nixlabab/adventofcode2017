<?php
$handle = fopen("day5.txt", "r");
$sum = 0;
$arr = array();

if ($handle) {
    while (($step = fgets($handle)) !== false) {
        $arr[] = (int) $step;
    }
    fclose($handle);
}

$s = 0;
$p = 0;

while ($p >= 0 && $p < count($arr)) {
    $v = $arr[$p];
    $arr[$p]++;
    $p += $v;
    $s++;
}

print($s);
<?php
$input = '';
$i = 0;
$sum = 0;

if ( (substr($input, 0,1)) ==  (substr($input,-1)) )
{
    $sum += (int) substr($input, 0, 1);
}

while ( $i < strlen($input) )
{
    $sub = substr($input, $i, 2);
    $i++;

    $strArr = str_split($sub, 1);
    if ( $strArr[0] == $strArr[1] )
    {
        $sum += $strArr[0];
    }
}
print($sum);

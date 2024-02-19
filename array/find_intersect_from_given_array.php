<?php

declare(strict_types=1);

$arr = [1,2,4,5];
$arr2= [3,3,4];
$arr3 = [2,3,4,5,6];

function findIntersection(array $array, array $array1, array $array2): int
{
    $i=0;$j=0;$k=0;

    while ($i < count($array) && $j < count($array1) && $k < count($array2) ){
        if ($array[$i] === $array1[$j] && $array1[$j] === $array2[$k]){
            return $array[$i];
        }

        if ($array[$i] < $array1[$j]) {
            $i++;
        } else if ($array1[$j] < $array2[$k]) {
            $j++;
        } else {
            $k++;
        }
    }
    return -1;
}

var_dump(findIntersection($arr, $arr2, $arr3));

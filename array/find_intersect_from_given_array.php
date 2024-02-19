<?php

declare(strict_types=1);


//Даны три неубывающих массива чисел. Найти число, которое присутствует во всех трех массивах.
//
//Input: [1,2,4,5], [3,3,4], [2,3,4,5,6]
//Output: 4
//Целевое решение работает за O(p + q + r), где p, q, r – длины массивов, доп. память O(1), но эту информацию интервьюер не сообщает.

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

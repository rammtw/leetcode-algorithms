<?php

declare(strict_types=1);

// Given n points on a 2D plane where points[i] = [xi, yi],
// Return the widest vertical area between two points such that no points are inside the area.

$points = [[8,7],[9,9],[7,4],[9,7]];

function maxWidthOfVerticalArea($points) {
    $x = [];
    for ($i = 0; $i <count($points); $i++) {
        $x[] = $points[$i][0];
    }
    sort($x);
    $max = 0;
    for ($i = 0; $i < count($x)-1; $i++) {
        $diff = $x[$i+1] - $x[$i];
        if ($diff >= $max) {
            $max = $diff;
        }
    }
    return $max;
}

var_dump(maxWidthOfVerticalArea($points));

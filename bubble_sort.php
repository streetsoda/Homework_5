<?php

function bubbleSort(array &$a) {
    for ($i = 0; $i < count($a); $i++) {
        for ($j = count($a)-1; $j >= $i+1; $j--) {
            if ($a[$j] < $a[$j-1]) {
                $t = $a[$j];
                $a[$j] = $a[$j-1];
                $a[$j-1] = $t;
            }
        }
    }
    return $a;
}

$a = [7, 1, 56.5, 33, 71, 400, 3];
echo json_encode(bubbleSort($a)), PHP_EOL;
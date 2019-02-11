<?php

function mergeSort(&$a, $j, $k) {
    if ($j < $k) {
        $q = (int)(($j + $k) / 2);
        mergeSort($a, $j, $q);
        mergeSort($a, $q + 1, $k);
        sortMerge($a, $j, $q, $k);
    }
}
function sortMerge(&$a, $j, $q, $k) {
    for ($i = $j; $i <= $q; $i++) {
        $left[] = $a[$i];
    }
    for ($i = $q + 1; $i <= $k; $i++) {
        $right[] = $a[$i];
    }
    $left[] = $right[] = -INF;;
    $y = $z = 0;
    for ($i = $j; $i <= $k; $i++) {
        if ($left[$y] >= $right[$z]) {
            $a[$i] = $left[$y];
            $y++;
        } else {
            $a[$i] = $right[$z];
            $z++;
        }
    }
}
$a = [400,670.5,5,93,54,1,7,142];
mergeSort($a, 0, count($a) - 1);
echo json_encode($a), PHP_EOL;
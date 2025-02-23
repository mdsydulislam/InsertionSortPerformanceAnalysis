<?php
function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}
$data = array_map('intval', file('random_10k.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
$start = microtime(true);
$sortedData = insertionSort($data);
$end = microtime(true);
echo "Insertion Sort Execution Time: " . number_format(($end - $start) * 1000, 4) . " milliseconds\n";
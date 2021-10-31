<?php
// PHP >= 7.0

function binarySearch(array $items, int $value)
{
    $firstIndex = 0;
    $lastIndex = count($items) - 1;
    $middleIndex = floor($lastIndex / 2);

    while ($items[$middleIndex] != $value && $firstIndex < $lastIndex) {
        if ($value < $items[$middleIndex]) {
            $lastIndex = $middleIndex - 1;
        } else if ($value > $items[$middleIndex]) {
            $firstIndex = $middleIndex + 1;
        }
        $middleIndex = floor(($lastIndex + $firstIndex) / 2);
    }

    return ($items[$middleIndex] != $value) ? -1 : $middleIndex;
}
$items = [1, 2, 3, 4, 5, 7, 8, 9];
echo binarySearch($items, 1) . PHP_EOL;
echo binarySearch($items, 5) . PHP_EOL;
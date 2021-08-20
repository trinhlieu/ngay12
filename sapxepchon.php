<?php
function selectionSort($list) {
    for ($i=0; $i < count($list)-1; $i++) {
        $min = $i;
        for ($j=$i+1; $j < count($list); $j++) {
            if ($list[$j]<$list[$min]) {
                $min = $j;
            }
        }
        $list = swap_list($list, $i, $min);
    }
    return $list;
}

function swap_list($list, $left, $right) {
    $backup = $list[$right];
    $list[$right] = $list [$left];
    $list[$left] = $backup;
    return $list;
}

$my_list = [1, 9, 4.5, 6.6, 5.7, -4.5];
//$new_list = selectionSort($my_list);
echo implode(', ',$my_list );
echo '<br>';
echo 'new list: ' . '<br>';
echo implode(', ',selectionSort($my_list)). PHP_EOL;

<?php

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function map($arr, $func)
{

    $New_list = [];
    foreach ($arr as $key => $item) {
        $New_list[$key] = $func($item);
    }
    return $New_list;
}

function sum($num)
{
    return $num + 2;
}

var_dump(map($list, function ($num) {
    return $num * 2;
}));


var_dump((map($list,'sum')));

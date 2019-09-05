<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($index = 0; $index < count($arr); $index++) {
        if ($min > $arr[$index]) {
            $min = $arr[$index];
        }
    }
    echo "Giá trị nhỏ nhất trong mảng: ". $min;
}
$arr = [2, 4, 5, 7, 5, 3];
findMin($arr);

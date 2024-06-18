<?php
// max(min(left_max,right_max)-height, 0)
function trap($arr)
{
    $stored_water = 0;
    $length = count($arr);
    $clonedArray = $arr;
    foreach($arr as $key => $height)
    {
        $min = [];
        $right_max = max(array_slice($clonedArray,$key,$length));
        $left_max = ($key != 0) ? max(array_slice($clonedArray,0,$key)) : $height;
        array_push($min, $right_max, $left_max);
        $stored_water += max(min($min)-$height,0);
    }
    print_r($stored_water);
    return $stored_water;
}

$arr =  [3, 0, 1, 0, 4, 0, 2];
$arr =[3,0,2,0,4];
$arr = [0,1,0,2,1,0,1,3,2,1,2,1];

trap($arr);
?>
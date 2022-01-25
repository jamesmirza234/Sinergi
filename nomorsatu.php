<?php

$arr = array(1,3,2,8,5,7,4,0);

print("Array Asli");
echo "<pre>";
print_r($arr);
echo "</pre>";
$arr = bubble_sort($arr);
print("Setelah di sorting menggunakan bubble sort");
echo "<pre>";
print_r($arr);
echo "</pre>";

function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
               
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
?>
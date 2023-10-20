<?php 
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

$merged_Array = array_merge($mix, $nums);
natsort($merged_Array);

$mix = array_slice($merged_Array,0, count($mix));
print_r($mix);
<?php 
$nums = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < count($nums); $i++) {
	$rand = rand(0, count($nums) -1);
	[$nums[$i], $nums[$rand]] = [$nums[$rand], $nums[$i]];

}

print_r($nums);
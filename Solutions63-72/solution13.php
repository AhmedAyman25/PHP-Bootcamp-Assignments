<?php 
$nums = [10, 100, -20, 50, 30];

function FindMax($nums){
	$max = $nums[0];
	foreach ($nums as $num) {
		if ($num > $max) {
			$max = $num;
		}
	}
	return $max;
}

echo FindMax($nums);
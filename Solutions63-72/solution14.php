<?php
$nums = [10, 100, -20, 50, 30];

function FindMin($nums)
{
	$min = $nums[0];
	foreach ($nums as $num) {
		if ($num < $min) {
			$min = $num;
		}
	}
	return $min;
}

echo FindMin($nums);
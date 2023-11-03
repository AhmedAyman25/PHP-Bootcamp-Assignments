<?php 
$nums = [11, 2, 10, 7, 20, 50];

function sumOfItems($nums)
{
	$result = 0;
	foreach ($nums as $num) {
		if(is_numeric($num)){
		$result += $num;
		}
		
	}
	return $result;
}

echo sumOfItems($nums);
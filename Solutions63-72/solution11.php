<?php 
$arr = ["A", "B", "C", "D", "E"];

function numOfItems($arr){
	$counter = 0;
	foreach($arr as $item){
		$counter++;
	}
	return $counter;
}

echo numOfItems($arr);
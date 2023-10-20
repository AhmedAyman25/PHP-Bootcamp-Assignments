<?php
$nums = [5, 10, 20, 5, 30, 40];

$numsWithout5 = array_filter($nums,
 function ($item) {
	return $item <> 5;
}
);

echo array_reduce($numsWithout5, function ($carry, $item) {
	return $carry + $item;
});
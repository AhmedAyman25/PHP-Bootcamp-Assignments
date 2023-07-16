<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// Output
// "Sayed"
// "Osama"

for($i = 0 ; $i<count($names) ; $i++){
	echo $names[$nums[$help_num]].'<br>';
	echo $names[$nums[$help_num] + $nums[$help_num]].'<br>';
	break;

}
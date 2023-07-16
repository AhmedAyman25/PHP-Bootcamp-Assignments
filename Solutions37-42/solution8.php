<?php
$nums = [1, 13, 12, 20, 51, 17, 30];
for($i = 0 ; $i< count($nums); $i++){
	if($nums[$i] % 2 == 0 ){
		echo intval($nums[$i] / 2).'<br>';
	}else{
		continue;
	}
}
// Output
// 6
// 10
// 15
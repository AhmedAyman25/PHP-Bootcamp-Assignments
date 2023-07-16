<?php
$mix = [1, 2, "A", "B", "C", 3, 4];

$numbers = 0; // counter to count the printed nums
$letters = 0; // counter to count the ignored letters

for($i = 0 ; $i <count($mix); $i++){
    if(is_numeric($mix[$i])):
      echo $mix[$i].'<br>';
	  $numbers ++ ;
    else:
	  $letters ++;
      continue; // Skip non-numeric elements.
    endif;
}
echo " $numbers Numbers Printed".'<br>';
echo " $letters Letters Ignored".'<br>';


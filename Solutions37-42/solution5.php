<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

// Output
// 2
// 3
// 4

for($i = $start + 1; $i <count($mix); $i++){
    if(is_numeric($mix[$i])):
      echo $mix[$i].'<br>';
    else:
      continue; // Skip non-numeric elements.
    endif;
}

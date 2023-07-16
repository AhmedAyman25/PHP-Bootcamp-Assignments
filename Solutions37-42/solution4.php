<?php

$start = 10;
$end = 0;
$stop = 3;

for ($i=$start; $i > $end ; $i--) { 
  if($i < $start):
    echo $end.$i.'<br>';
    if($i == $stop):
      break;
    endif;
  else:
    echo $i.'<br>';
  endif;
}

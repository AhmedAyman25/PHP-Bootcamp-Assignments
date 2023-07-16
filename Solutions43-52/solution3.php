<?php

function sum_all(...$nums){
$result = 0;
foreach ($nums as $num) {
   if($num == 5){
      continue;
   }elseif($num == 10){
      $num = 20;
      $result += $num;
   }else{
      $result += $num;
   }
}
return $result;

}



echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo '<br>';
echo sum_all(5, 10, 5, 10); // 40


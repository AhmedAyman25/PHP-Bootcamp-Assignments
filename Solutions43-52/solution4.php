<?php

function multiply(...$nums){
$result = 1;
foreach ($nums as $num) {
   if(is_numeric($num)){
    $result *= intval($num);
   }else{
    continue;
   }
}
return $result;

}

// Needed Output
echo multiply(10, 20); // 200
echo '<br>';
echo multiply("A", 10, 30); // 300
echo '<br>';
echo multiply(100.5, 10, "B"); // 1000
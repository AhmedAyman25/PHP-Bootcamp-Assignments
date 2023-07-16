<?php
$num = 2;
while ($num < 520) {
   if($num == 2){
	echo intval($num/$num).'<br>' ;
	echo $num + 2 . "<br>";
   }else{
	 echo $num + 2 . "<br>";
   }
    $num = ($num + 2) * 2;
}


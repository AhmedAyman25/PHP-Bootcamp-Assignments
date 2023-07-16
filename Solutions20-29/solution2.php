<?php 

$a = "10";

echo (int)$a;
echo '<br>';
echo gettype((int) $a);
echo '<br>';

echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';

echo intval($a);
echo '<br>';
echo gettype(intval($a));
echo '<br>';

settype($a , 'integer');
echo $a;
echo '<br>';
echo gettype($a);


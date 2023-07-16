<?php

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d1 = "$a $b $c";

// Method Two
 $d2 = "{$a} {$b} {$c}";

// Method Three
 $d3 = $a.' '.$b.' '.$c;

// Method Four
$d4 = sprintf("%s %s %s", $a, $b, $c);;

echo $d1; // Elzero Web School
echo '<br>';
echo $d2; // Elzero Web School
echo '<br>';
echo $d3; // Elzero Web School
echo '<br>';
echo $d4; // Elzero Web School
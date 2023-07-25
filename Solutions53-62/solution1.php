<?php
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";


# First way
// $str[intval($num_two)] = $let_two;
// $str[$num_one] = $let_one;

# Second way
$str = str_replace(['%','0'],[$let_two,$let_one],$str);
echo $str; // Elzero
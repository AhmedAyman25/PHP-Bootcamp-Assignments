<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

// 1
// 2
echo substr_count($str,$e,$four);
echo '<br>';
echo substr_count($str,strtolower($o),-$four);
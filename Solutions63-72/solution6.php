<?php

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;


print_r(array_pad($chars, count($chars) * strlen($char), $char[$zero]));
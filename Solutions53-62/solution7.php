<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$chars = implode($chars);
echo ucfirst(strtolower(str_replace([1, 2], ["", ""], $chars)));
// Output
// "Elzero"
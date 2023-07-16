<?php
// Code 1
$a = @$b or die('Custom Error ');
echo $b;
// Code 2
$f = @file("Not_A_File") or die('Custom Error ');
echo $f;
// Code 3
@(include("Not_A_File")) or die('Custom Error '); 
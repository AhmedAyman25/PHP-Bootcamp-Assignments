<?php

$nums = [10, 20, 30];

echo array_reduce($nums, function($carry, $item){ return $carry + $item;}).PHP_EOL;
echo array_sum($nums);
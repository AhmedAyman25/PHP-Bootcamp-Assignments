<?php
$chars = ["A", "B", "C"];

# 1st way 
$chars[3] = 'D';

# 2nd way 
$chars[] = 'D';

# 3rd way
array_push($chars,'D');
 
#4th way

$D = ['D'];
$chars=array_merge($chars, $D);


print_r($chars);
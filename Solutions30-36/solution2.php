<?php 

$a = 200;
$b = 200;
$c = 100;

if($a > $b):
	echo "A is Larger than B";
	elseif ($a> $c) :
		echo" A is Larger than C ";
	else:
			echo 'A Is Not Larger Than B Or C';
endif;


<?php

function calculate($n1 , $n2 , $op = '+'){
	if($op == '+' || $op == 'a' || $op == 'add'){
		return ($n1 + $n2 );
	}elseif ($op == 's' || $op == 'subtract') {
		return ($n1 - $n2);
	}elseif ($op == 'm' || $op == 'multiply') {
		return ($n1 * $n2);
	}else{
		return ' Unknown Operation';
	}
}




// Needed Output
echo calculate(10, 20); // 30
echo '<br>';
echo calculate(10, 20, "a"); // 30
echo '<br>';
echo calculate(10, 20, "s"); // -10
echo '<br>';
echo calculate(10, 20, "subtract"); // -10
echo '<br>';
echo calculate(10, 20, "multiply"); // 200
echo '<br>';
echo calculate(10, 20, "m"); // 200
		
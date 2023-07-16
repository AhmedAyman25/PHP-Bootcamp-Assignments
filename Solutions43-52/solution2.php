<?php 
function get_arguments(...$args){
	$result = ' ';
	foreach($args as $arg){
		$result = $result." ".$arg;
	}
return $result;
}


echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo '<br>';
echo get_arguments("I", "Love", "PHP"); // I Love PHP
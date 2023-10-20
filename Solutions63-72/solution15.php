<?php 
$chars = ["o", "r", "e", "z", "l", "E"];



function TextReverse($chars){

	$text = '';
	$chars_len = 0;
	foreach ($chars as $char) {
		$chars_len++;
	}
	
	for ($i = ($chars_len- TRUE); $i >= 0; $i--){
		$text .= $chars[$i];	
	}
	return $text;
}

echo TextReverse($chars);
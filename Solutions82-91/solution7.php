<?php 
$OldContent = file_get_contents('elzero2.txt');
$NewContent = str_replace("Osamaa", "Elzero", $OldContent);
file_put_contents('elzero2.txt', $NewContent);
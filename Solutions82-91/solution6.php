<?php
//1st way
$handle = fopen('elzero.txt','r');
echo fgets($handle);
echo fgets($handle);
echo '<br>';

//2nd way
rewind($handle);
echo fread($handle,24);
echo '<br>';

//3rd way
rewind($handle);
$line = file('elzero.txt');
echo $line[0];
echo $line[1];
echo '<br>';
fclose($handle);

//4th way
echo file_get_contents('elzero.txt', true, null,0,24);
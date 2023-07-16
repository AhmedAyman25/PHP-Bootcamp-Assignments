<?php 
echo '***************Using While Loop*************** <br>';
$index = 0;
while($index <= 20 ):
	if($index % 2 == 0):
  		echo $index."<br>";
	endif;
  $index++;  
  endwhile;
echo '***************Using do While Loop*************** <br>';
$index = 0;
do{
if($index % 2 == 0):
  	echo $index."<br>";
endif;
$index++;

}while($index <= 20 );

echo '***************Using for Loop*************** <br>';

for ($index = 0;$index<=20;$index++):
	if($index % 2 == 0):
  		echo $index."<br>";
	endif;
endfor;

<?php
mkdir("Programming\PHP",0711,True);
if(file_exists("Programming")){
	rmdir("Programming\PHP") && rmdir("Programming");
	if(!file_exists("Programming") && !file_exists("Programming\PHP")){
		echo "Directory Programming/PHP Removed" . '<br>';
		echo "Directory Programming Removed";
	}
}
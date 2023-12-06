<?php

function change_permissions($filename){
	if(is_dir($filename)){
		echo 'This Is Directory And Only Files Allowed' . '<br>';
		
	}else{
		if (pathinfo($filename)['extension'] == 'txt') {
			chmod($filename, 0700);
			clearstatcache();
			echo " Permissions Changed" . '<br>';
		} else {
			echo 'File Extension Is Not Txt' . '<br>';
		}
	}
}


// Test Cases

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if( $_SERVER['REQUEST_METHOD'] === 'POST'){
	$Username = $_POST['user'];
	echo "The Request Method Is Post And Username Is $Username <br>";
	if( in_array($_POST['user'],$admins)){
		echo "This Username {$Username} Is Admin <br>";
	}
}
?>
<form action="solution3.php" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
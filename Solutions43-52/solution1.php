<?php
function greeting($name , $gender = 'unknown'){
  if($gender == 'Male' || $gender == 'male'){
    echo " Hello Mr $name <br>";
  }elseif($gender == 'Female' || $gender == 'female'){
    echo " Hello Miss $name <br>";
  }else{
    echo " Hello $name <br>";
  }
}
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
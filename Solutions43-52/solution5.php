<?php

function check_status($a, $b, $c) {
  $result = '';
  if(is_string($a) && is_int($b) && is_bool($c)){
    if($c == true)
    {
      $result .= "Hello ".$a.", Your Age Is ".strval($b).", You Are Available For Hire";
    }
    else{
      $result .= "Hello ".$a.", Your Age Is ".strval($b).", You Are Not Available For Hire";
    }
  }
  elseif (is_int($a) && is_string($b) && is_bool($c)) {
    if($c == true)
    {
      $result .="Hello ".$b.", Your Age Is ".strval($a).", You Are Available For Hire";
    }
    else
    {
      $result .= "Hello ".$b.", Your Age Is ".strval($a).", You Are Not Available For Hire";
    }
  }
  elseif (is_bool($a) && is_string($b) && is_int($c)) {
    if($a == true)
    {
      $result .= "Hello ".$b.", Your Age Is ".strval($c).", You Are Available For Hire";
    }
    else
    {
      $result .= "Hello ".$b.", Your Age Is ".strval($c).", You Are Not Available For Hire";
    }
  }
  elseif(is_bool($a) && is_int($b) && is_string($c)){
    if($a == true)
    {
      $result .= "Hello ".$c.", Your Age Is ".strval($b).", You Are Available For Hire";
    }
    else
    {
      $result .= "Hello ".$c.", Your Age Is ".strval($b).", You Are Not Available For Hire";
    }


  }

  return $result;

}

echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo '<br>';
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
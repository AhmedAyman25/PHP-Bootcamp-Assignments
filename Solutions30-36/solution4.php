<?php

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}
  echo "<br>";
// Output
//"B + C = A"

echo ($a + $b === $c)? "A + B = C ":(($a + $c === $b)?"A + C = B": (($b + $c === $a)?"B + C = A":"The End"));
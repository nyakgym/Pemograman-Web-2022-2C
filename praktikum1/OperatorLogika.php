<?php

$a = true; //Bernilai 1
$b = false; //Bernilai 0

//AND
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>";

//OR
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";

//NOT
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";

?>

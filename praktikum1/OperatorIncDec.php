<?php
echo "<h3>Post Increment</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a++ . " (\$a++)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";

echo "<h3>Pre Decrement</h3>";
$b = 7;
echo "\$b = $b <br />";
echo "\$b akan bernilai 6: " . ++$b . " (++\$b)<br />";
echo "\$a akan bernilai 6: " . $b . "<br />";

echo "<h3>Post Decrement</h3>";
$c = 4;
echo "\$c = $c <br />";
echo "\$c akan bernilai 5: " . $c-- . " (\$c--)<br />";
echo "\$c akan bernilai 4: " . $c . "<br />";

echo "<h3>Pre Decrement</h3>";
$d = 9;
echo "\$d = $d <br />";
echo "\$d akan bernilai 4: " . --$d . " (--\$d)<br />";
echo "\$d akan bernilai 4: " . $d . "<br />";
?>
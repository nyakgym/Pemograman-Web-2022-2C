<?php
    $a    ="Belajar";
    $b    ="String";
    $c    ="PHP";
        
    //kombinasi operasi string
    $hasil1    ="$a $b $c";
    $hasil2    ="Saya sedang $a $b $c";
    $hasil3    =$a ." ". $b ." "."di dalam" ." ". $c;
    $hasil4    ="Saya sedang ".$a." ".$b." ".$c;
    
    echo $hasil1; echo "<br />"; // Belajar String PHP
    echo $hasil2; echo "<br />"; // Saya sedang Belajar String PHP
    echo $hasil3; echo "<br />"; // Belajar String di dalam PHP
    echo $hasil4; echo "<br />"; // Saya sedang Belajar String PHP
?>
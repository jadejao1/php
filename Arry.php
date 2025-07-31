<?php

$color = array("red", "blue");

// Method 1: print_r
echo "Using print_r():<br>";
print_r($color);
echo "<br><br>";

// Method 2: var_dump
echo "Using var_dump():<br>";
var_dump($color);
echo "<br><br>";

// Method 3: foreach loop
echo "Using foreach loop:<br>";
foreach ($color as $c) {
    echo $c . "<br>";
}

?>

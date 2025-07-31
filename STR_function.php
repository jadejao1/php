<?php

echo "------ String Functions Example ------<br>";

$text = "  Hello World!  ";
$charSearch = "o";
$replaceText = "Everyone";

// strtolower()
echo "Lowercase: " . strtolower($text) . "<br>";

// strtoupper()
echo "Uppercase: " . strtoupper($text) . "<br>";

// substr()
echo "Substring (start 2, length 5): " . substr($text, 2, 5) . "<br>";

// strcmp()
$str1 = "Apple";
$str2 = "apple";
echo "Compare 'Apple' vs 'apple': " . strcmp($str1, $str2) . "<br>";

// str_replace()
echo "Replace 'World' with 'Everyone': " . str_replace("World", $replaceText, $text) . "<br>";

// strrev()
echo "Reversed: " . strrev($text) . "<br>";

// strchr()
echo "First occurrence of '$charSearch': " . strchr($text, $charSearch) . "<br>";

// strlen()
echo "Length of text: " . strlen($text) . "<br>";

// ltrim()
echo "After ltrim(): '" . ltrim($text) . "'\n";

// rtrim()
echo "After rtrim(): '" . rtrim($text) . "'\n";

// trim()
echo "After trim(): '" . trim($text) . "'\n";
//strpos() 
echo "strpos(\"trishir\",\"s\") = " . strpos("trishir", "s") . "<br>";
?>
Date and time baki nay karu sir e 

<?php
echo '<style>
    body { font-family: Arial, sans-serif; background: #f9f9f9; color: #222; margin: 30px; }
    h2 { color: #2c3e50; }
    .section { background: #fff; border-radius: 8px; box-shadow: 0 2px 8px #ddd; padding: 18px 24px; margin-bottom: 24px; }
    .section-title { font-size: 1.2em; margin-bottom: 10px; color: #2980b9; }
    .output { margin-left: 18px; }
</style>';

echo '<div class="section"><div class="section-title">Arithmetic Operators</div><div class="output">';
$x = 10;
$y = 3;
echo "Addition: " . ($x + $y) . "<br>";
echo "Subtraction: " . ($x - $y) . "<br>";
echo "Multiplication: " . ($x * $y) . "<br>";
echo "Division: " . ($x / $y) . "<br>";
echo "Modulus: " . ($x % $y) . "<br>";
echo "Exponentiation: " . ($x ** $y) . "<br>";
echo '</div></div>';

echo '<div class="section"><div class="section-title">Assignment Operators</div><div class="output">';
$a = 5;
$b = 10;
$a += $b;
echo "Addition assignment: $a<br>";
$a -= $b;
echo "Subtraction assignment: $a<br>";
$a *= $b;
echo "Multiplication assignment: $a<br>";
$a /= $b;
echo "Division assignment: $a<br>";
$a %= $b;
echo "Modulus assignment: $a<br>";
echo '</div></div>';

echo '<div class="section"><div class="section-title">Comparison Operators</div><div class="output">';
$m = 5;
$n = "5";
echo "Equal: " . ($m == $n) . "<br>";
echo "Identical: " . ($m === $n) . "<br>";
echo "Not Equal: " . ($m != $n) . "<br>";
echo "Not Identical: " . ($m !== $n) . "<br>";
echo "Greater than: " . ($m > $n) . "<br>";
echo "Less than: " . ($m < $n) . "<br>";
echo "Greater than or equal to: " . ($m >= $n) . "<br>";
echo "Less than or equal to: " . ($m <= $n) . "<br>";
echo "Spaceship: " . ($m <=> $n) . "<br>";
echo '</div></div>';

echo '<div class="section"><div class="section-title">Logical Operators</div><div class="output">';
$p = true;
$q = false;
echo "And: " . ($p and $q) . "<br>";
echo "Or: " . ($p or $q) . "<br>";
echo "Xor: " . ($p xor $q) . "<br>";
echo "&&: " . ($p && $q) . "<br>";
echo "||: " . ($p || $q) . "<br>";
echo "Not: " . (!$p) . "<br>";
echo '</div></div>';

echo '<div class="section"><div class="section-title">Bitwise Operators</div><div class="output">';
$r = 6;
$s = 3;
echo "AND: " . ($r & $s) . "<br>";
echo "OR: " . ($r | $s) . "<br>";
echo "XOR: " . ($r ^ $s) . "<br>";
echo "NOT: " . (~$r) . "<br>";
echo "Left Shift: " . ($r << 1) . "<br>";
echo "Right Shift: " . ($r >> 1) . "<br>";
echo '</div></div>';

echo '<div class="section"><div class="section-title">Increment/Decrement Operators</div><div class="output">';
$t = 5;
echo "Post Increment: " . ($t++) . "<br>";
echo "After Post Increment: $t<br>";
echo "Pre Increment: " . (++$t) . "<br>";
echo "Post Decrement: " . ($t--) . "<br>";
echo "After Post Decrement: $t<br>";
echo "Pre Decrement: " . (--$t) . "<br>";
echo '</div></div>';

echo '<div class="section"><div class="section-title">String Operators</div><div class="output">';
$str1 = "Hello ";
$str2 = "World";
echo "Concatenation: " . ($str1 . $str2) . "<br>";
$str1 .= $str2;
echo "Concatenation assignment: $str1<br>";
echo '</div></div>';

echo '<div class="section"><div class="section-title">Array Operators</div><div class="output">';
$arr1 = array("a" => "apple", "b" => "banana");
$arr2 = array("c" => "cherry", "d" => "date");
$arr3 = $arr1 + $arr2;
echo "Union: ";
print_r($arr3);
echo "<br>";
echo "Equality: " . ($arr1 == $arr2) . "<br>";
echo "Identity: " . ($arr1 === $arr2) . "<br>";
echo "Inequality: " . ($arr1 != $arr2) . "<br>";
echo "Non-identity: " . ($arr1 !== $arr2) . "<br>";
echo '</div></div>';
?>
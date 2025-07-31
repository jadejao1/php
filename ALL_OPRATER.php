
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Math & Comparison Operators , ARRAY ,STRING </title>
    <style>
        body {
            background:rgb(194, 203, 225);
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 650px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 36px;
        }
        h2 {
            color: #2d3a4b;
            margin-top: 0;
        }
        .section {
            margin-bottom: 28px;
        }
        .section-title {
            font-size: 1.1em;
            color:rgb(34, 37, 43);
            margin-bottom: 8px;
            font-weight: 600;
        }
        code {
            background: #f0f2f7;
            padding: 2px 6px;
            border-radius: 4px;
            color: #c7254e;
        }
        .output {
            background: #f8fafc;
            border: 1px solid #e3e7ed;
            border-radius: 6px;
            padding: 12px 18px;
            margin-bottom: 10px;
            font-size: 1em;
            color: #222;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Math & Comparison Operators</h2>

        <div class="section">
            <div class="section-title">Arithmetic Operators</div>
            <div class="output">
                <?php
                $x = 10;
                $y = 3;
                echo "Addition (<code>x + y</code>): " . ($x + $y) . "<br>";
                echo "Subtraction (<code>x - y</code>): " . ($x - $y) . "<br>";
                echo "Multiplication (<code>x * y</code>): " . ($x * $y) . "<br>";
                echo "Division (<code>x / y</code>): " . ($x / $y) . "<br>";
                echo "Modulus (<code>x % y</code>): " . ($x % $y) . "<br>";
                echo "Exponentiation (<code>x ** y</code>): " . ($x ** $y) . "<br>";
                ?>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Comparison Operators</div>
            <div class="output">
                <?php
                $a = 5;
                $b = 5;
                $c = 10;
                echo "Equal (<code>5 == '5'</code>): " . (($a == $b) ? 'true' : 'false') . "<br>";
                echo "Not equal (<code>5 != 10</code>): " . (($a != $c) ? 'true' : 'false') . "<br>";
                echo "Not equal (<code>5 &lt;&gt; 10</code>): " . (($a <> $c) ? 'true' : 'false') . "<br>";
                echo "Greater than (<code>10 > 5</code>): " . (($c > $a) ? 'true' : 'false') . "<br>";
                echo "Less than (<code>5 < 10</code>): " . (($a < $c) ? 'true' : 'false') . "<br>";
                echo "Greater than or equal (<code>10 >= 5</code>): " . (($c >= $a) ? 'true' : 'false') . "<br>";
                echo "Less than or equal (<code>5 <= 10</code>): " . (($a <= $c) ? 'true' : 'false') . "<br>";
                echo "Identical (<code>5 === '5'</code>): " . (($a === $b) ? 'true' : 'false') . "<br>";
                echo "Not identical (<code>5 !== '5'</code>): " . (($a !== $b) ? 'true' : 'false') . "<br>";
                ?>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Assignment Operators</div>
            <div class="output">
                <?php
                $x = 10;
                $assign = $x;
                $add = $x; $add += 5;
                $sub = $x; $sub -= 3;
                $mul = $x; $mul *= 2;
                $div = $x; $div /= 4;
                $mod = $x; $mod %= 3;       
                $exp = $x; $exp **= 2;

                echo "Assign: $assign<br>";
                echo "Add and assign: $add<br>";
                echo "Subtract and assign: $sub<br>";
                echo "Multiply and assign: $mul<br>";
                echo "Divide and assign: $div<br>";
                echo "Modulus and assign: $mod<br>";
                echo "Exponent and assign: $exp<br>";
                ?>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Logical Operators</div>
            <div class="output">
                <?php
                $a = true;
                $b = false;
                $and = $a && $b; 
                $or = $a || $b; 
                $not = !$a; 
                echo "Logical AND (<code>true && false</code>): " . ($and ? 'true' : 'false') . "<br>";
                echo "Logical OR (<code>true || false</code>): " . ($or ? 'true' : 'false') . "<br>";
                echo "Logical NOT (<code>!true</code>): " . ($not ? 'true' : 'false') . "<br>";
                ?>
            </div>
        </div>
    </div>
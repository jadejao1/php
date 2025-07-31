<?php
// Example value, you can set $number dynamically as needed
$number = 0;

// Determine sign
if ($number > 0) {
    $sign = 'Positive';
} elseif ($number < 0) {
    $sign = 'Negative';
} else {
    $sign = 'Zero';
}

// Determine parity
if ($number % 2 == 0) {
    $parity = 'Even';
} else {
    $parity = 'Odd';
}
// Handle year selection from dropdown
$selectedYear = isset($_GET['year']) ? (int)$_GET['year'] : 0;

// Determine if leap year
if ($selectedYear > 0) {
    if (($selectedYear % 4 == 0 && $selectedYear % 100 != 0) || ($selectedYear % 400 == 0)) {
        $leapYear = 'Leap Year';
    } else {
        $leapYear = 'Not a Leap Year';
    }
} else {
    $leapYear = 'N/A';
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .result-box {
            background-color: #f0f8ff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
            border-radius: 8px;
            padding: 24px;
            width: 300px;
            margin: 40px auto;
            font-family: Arial, sans-serif;
            font-size: 18px;
        }
        .dropdown-form {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form class="dropdown-form" method="get">
        <label for="year">Select Year:</label>
        <select name="year" id="year" onchange="this.form.submit()">
            <?php
            for ($y = 0; $y <= 3000; $y++) {
                $selected = ($y == $selectedYear) ? 'selected' : '';
                echo "<option value=\"$y\" $selected>$y</option>";
            }
            ?>
        </select>
    </form>
    <div class="result-box">
        <?php
        echo "Selected Year: $selectedYear<br>";
        echo "Leap Year: $leapYear<br>";
        echo "sing of number :-  $sign <br>";
        echo " ood or even :- $parity<br>";
        echo "what is number :- $number<br>";
        ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loop Comparison</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #d9afd9, #97d9e1);
            padding: 40px;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            flex-wrap: wrap;
        }

        .box {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            background: linear-gradient(135deg, #ffffff, #f1f1f1);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            border: 2px solid #e0e0e0;
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: scale(1.03);
        }

        .box h2 {
            text-align: center;
            background: linear-gradient(to right, #11998e, #38ef7d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .box-content {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- While Loop Box -->
    <div class="box">
        <h2>While Loop</h2>
        <div class="box-content">
            <?php 
            $count = 1; 
            while ($count <= 10) { 
                echo $count . "<br>"; 
                $count++; 
            }
            ?>
        </div>
    </div>

    <!-- Do While Loop Box -->
    <div class="box">
        <h2>Do While Loop</h2>
        <div class="box-content">
            <?php 
            $count = 1;
            do {
                echo $count . "<br>";   
                $count++;   
            } while ($count <= 10);
            ?> 
        </div>
    </div>

    <!-- For Loop Box -->
    <div class="box">
        <h2>For Loop</h2>
        <div class="box-content">
            <?php 
            for ($i = 1; $i <= 10; $i++) {
                echo $i . "<br>";
            }
            ?>
        </div>
    </div>

    <!-- Number Pattern Box -->
    <div class="box">
        <h2>Number Pattern</h2>
        <div class="box-content">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $j . " ";
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>

    <!-- Multiplication Table Box -->
    <div class="box">
        <h2>Multiplication Table</h2>
        <div class="box-content">
            <form method="GET">
                <input type="number" name="num" class="form-input" placeholder="Enter a number" required>
                <button type="submit" class="form-button">Make a table </button>
            </form>

            <?php
            if (isset($_GET['num']) && is_numeric($_GET['num'])) {
                $num = intval($_GET['num']);
                echo "<br><strong>Table of $num:</strong><br>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "$num x $i = " . ($num * $i) . "<br>";
                }
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>

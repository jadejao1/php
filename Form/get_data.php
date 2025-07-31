<?php
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission Result</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #3a3a5d, #5c5c87);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .output-box {
            background: rgba(255, 255, 255, 0.08);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            max-width: 500px;
            text-align: center;
        }

        .output-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #f0f0ff;
        }

        .output-box p {
            font-size: 18px;
            margin: 10px 0;
            color: #e0e0f0;
        }
    </style>
</head>
<body>

<div class="output-box">
    <h2>Form Submission Details</h2>
    <p>Hello buddy: <strong><?php echo htmlspecialchars($name); ?></strong></p>
    <p>Your age is: <strong><?php echo htmlspecialchars($age); ?></strong></p>
    <p>Your email is: <strong><?php echo htmlspecialchars($email); ?></strong></p>
</div>

</body>
</html>

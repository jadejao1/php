<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade Chart</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #1a237e 0%, #00bcd4 100%);
            min-height: 100vh;
            margin: 0;
        }
        .container {
            width: 420px;
            margin: 60px auto;
            background: #fff;
            padding: 36px 44px 28px 44px;
            border-radius: 18px;
            box-shadow: 0 4px 24px 0 rgba(26,35,126,0.10);
            border: 1.5px solid #00bcd4;
        }
        h2 {
            text-align: center;
            margin-bottom: 32px;
            color: #1a237e;
            font-weight: 700;
        }
        .subject-row {
            display: flex;
            align-items: center;
            margin-bottom: 18px;
            background: #f0f4ff;
            border-radius: 7px;
            padding: 7px 12px;
        }
        .subject-row label {
            flex: 1;
            font-weight: 500;
        }
        .subject-row input {
            width: 70px;
            padding: 7px;
            margin-right: 12px;
            border: 1.5px solid #00bcd4;
            border-radius: 5px;
        }
        .subject-row .grade {
            width: 48px;
            text-align: center;
            font-weight: bold;
            color: #ffd700;
        }
        .submit-btn {
            width: 100%;
            padding: 13px;
            margin-top: 18px;
            background: linear-gradient(90deg, #3949ab 60%, #00bcd4 100%);
            color: #fff;
            border: none;
            border-radius: 7px;
            font-size: 1.08em;
            font-weight: 600;
            cursor: pointer;
        }
        .result-box, .total-box {
            margin-top: 24px;
            padding: 18px;
            border-radius: 10px;
            text-align: center;
            font-size: 1.1em;
            box-shadow: 0 2px 12px #00bcd422;
        }
        .result-box.pass {
            background: #e9f7ef;
            color: #43a047;
        }
        .result-box.fail {
            background: #fff0f0;
            color: #c0392b;
        }
        .total-box {
            background: #f0f4ff;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Student Grade Chart</h2>
    <form method="post">
        <?php
        $subjects = ['html', 'php', 'cn', 'dwdm', 'figma'];
        $grades = [];
        $total = 0;
        $fail = false;

        function getGrade($mark) {
            if ($mark >= 90) return 'O';
            if ($mark >= 80) return 'A+';
            if ($mark >= 70) return 'A';
            if ($mark >= 60) return 'B';
            if ($mark >= 50) return 'C';
            return 'F';
        }

        foreach ($subjects as $subject) {
            $mark = isset($_POST[$subject]) ? (int)$_POST[$subject] : '';
            $grade = ($mark !== '') ? getGrade($mark) : '';
            if ($grade === 'F') $fail = true;
            if ($mark !== '') $total += $mark;
            $grades[$subject] = ['mark' => $mark, 'grade' => $grade];
        }
        ?>
        <?php foreach ($subjects as $subj): ?>
            <div class="subject-row">
                <label for="<?= $subj ?>"><?= strtoupper($subj) ?>:</label>
                <input type="number" id="<?= $subj ?>" name="<?= $subj ?>" min="0" max="100" required value="<?= $grades[$subj]['mark'] ?>">
                <span class="grade"><?= $grades[$subj]['grade'] ?></span>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="submit-btn">Submit</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="total-box">
            Total Marks: <?= $total ?> / 500
        </div>
        <div class="result-box <?= $fail ? 'fail' : 'pass' ?>">
            <?php
            $avg = $total / count($subjects);
            $overallGrade = getGrade($avg);
            $result = $fail ? "Fail" : "Pass";
            ?>
            <strong>Overall Grade:</strong> <?= $overallGrade ?><br>
            <strong>Result:</strong> <?= $result ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>

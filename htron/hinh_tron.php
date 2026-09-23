
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hình tròn</title>
</head>
<body>
    <form method="post">
        Bán kính: <input type="number" name="r" step="any" required><br>
        <button type="submit">Tính</button>
    </form>

    <?php
        define("PI", 3.14);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $r = $_POST["r"];
            $dt = PI * $r * $r;
            $cv = 2 * PI * $r;
            echo "<p>Diện tích: $dt</p>";
            echo "<p>Chu vi: $cv</p>";
        }
    ?>
</body>
</html>

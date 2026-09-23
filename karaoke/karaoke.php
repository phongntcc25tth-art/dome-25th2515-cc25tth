<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Karaoke</title>
</head>
<body>
    <form method="post">
        Giờ bắt đầu: <input type="time" name="bd" required><br>
        Giờ kết thúc: <input type="time" name="kt" required><br>
        Đơn giá/giờ: <input type="number" name="gia" value="100000"><br>
        <button type="submit">Tính tiền</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bd = strtotime($_POST["bd"]);
            $kt = strtotime($_POST["kt"]);
            $gia = $_POST["gia"];
            
            if ($kt > $bd) {
                $gio = ($kt - $bd) / 3600;
                $tien = $gio * $gia;
                echo "<p>Tiền thanh toán: $tien VNĐ</p>";
            } else {
                echo "<p style='color:red'>Giờ kết thúc phải > giờ bắt đầu!</p>";
            }
        }
    ?>
</body>
</html>
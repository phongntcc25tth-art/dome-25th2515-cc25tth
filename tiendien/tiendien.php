<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tiền điện</title>
</head>
<body>
    <form method="post">
        Tên chủ hộ: <input type="text" name="ten" required><br>
        Chỉ số cũ: <input type="number" name="cu" required><br>
        Chỉ số mới: <input type="number" name="moi" required><br>
        Đơn giá: <input type="number" name="gia" value="2000"><br>
        <button type="submit">Tính</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ten = $_POST["ten"];
            $cu = $_POST["cu"];
            $moi = $_POST["moi"];
            $gia = $_POST["gia"];
            
            if ($moi >= $cu) {
                $tien = ($moi - $cu) * $gia;
                echo "<p>Chủ hộ: $ten</p>";
                echo "<p>Tiền điện: $tien VNĐ</p>";
            } else {
                echo "<p style='color:red'>Chỉ số mới phải ≥ chỉ số cũ!</p>";
            }
        }
    ?>
</body>
</html>
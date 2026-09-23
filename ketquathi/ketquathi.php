<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kết quả thi</title>
</head>
<body>
    <form method="post">
        Điểm Toán: <input type="number" name="toan" step="0.1" required><br>
        Điểm Lý: <input type="number" name="ly" step="0.1" required><br>
        Điểm Hóa: <input type="number" name="hoa" step="0.1" required><br>
        Điểm chuẩn: <input type="number" name="chuan" step="0.1" value="20"><br>
        <button type="submit">Xem kết quả</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $toan = $_POST["toan"];
            $ly = $_POST["ly"];
            $hoa = $_POST["hoa"];
            $chuan = $_POST["chuan"];
            
            $tong = $toan + $ly + $hoa;
            echo "<p>Tổng điểm: $tong</p>";
            
            if ($toan > 0 && $ly > 0 && $hoa > 0 && $tong >= $chuan) {
                echo "<p style='color:green; font-weight:bold'>ĐẬU</p>";
            } else {
                echo "<p style='color:red; font-weight:bold'>RỚT</p>";
            }
        }
    ?>
</body>
</html>
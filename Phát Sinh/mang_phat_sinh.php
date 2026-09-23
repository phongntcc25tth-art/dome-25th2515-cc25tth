<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Phát Sinh Mảng</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        form { background: #e6f2ff; padding: 20px; display: inline-block; border-radius: 8px; }
        input { margin: 8px; padding: 5px; width: 150px; }
        button { padding: 8px 20px; background: #0066cc; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <form method="post" action="mang_phat_sinh.php">
        <h2>PHÁT SINH MẢNG NGẪU NHIÊN</h2>
        Nhập n: <input type="number" name="n" min="1" required><br>
        <button type="submit">Thực hiện</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["n"];
            if ($n <= 0) { echo "<p style='color:red'>n phải là số nguyên dương!</p>"; exit; }
            
            $mang = array();
            for ($i = 0; $i < $n; $i++) {
                $mang[] = rand(0, 100);
            }
            
            echo "<p><strong>Mảng phát sinh:</strong> " . implode(", ", $mang) . "</p>";
            
            $dem_chan = 0;
            foreach ($mang as $x) if ($x % 2 == 0) $dem_chan++;
            echo "<p>Số phần tử chẵn: $dem_chan</p>";
            
            $dem_nho100 = 0;
            foreach ($mang as $x) if ($x < 100) $dem_nho100++;
            echo "<p>Số phần tử nhỏ hơn 100: $dem_nho100</p>";
            
            $tong_am = 0;
            foreach ($mang as $x) if ($x < 0) $tong_am += $x;
            echo "<p>Tổng các số âm: $tong_am</p>";
            
            $vi_tri_0 = array();
            foreach ($mang as $vt => $x) if ($x == 0) $vi_tri_0[] = $vt;
            echo "<p>Vị trí số 0: " . (empty($vi_tri_0) ? "Không có" : implode(", ", $vi_tri_0)) . "</p>";
            
            $mang_tang = $mang;
            sort($mang_tang);
            echo "<p>Mảng sắp xếp tăng: " . implode(", ", $mang_tang) . "</p>";
        }
    ?>
</body>
</html>
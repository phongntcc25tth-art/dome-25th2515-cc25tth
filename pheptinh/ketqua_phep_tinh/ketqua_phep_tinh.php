<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả phép tính</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        .box { background: #d9ffcc; padding: 20px; display: inline-block; border-radius: 8px; }
        .loi { color: red; font-weight: bold; }
        a { color: #0066cc; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="box">
        <h2>KẾT QUẢ PHÉP TÍNH</h2>

        <?php
            // === Bài 7: KIỂM TRA DỮ LIỆU ===
            // Kiểm tra có gửi dữ liệu không
            if (!isset($_POST['so1']) || !isset($_POST['so2'])) {
                echo '<p class="loi">Lỗi: Thiếu dữ liệu!</p>';
                echo '<br><a href="pheptinh.php">← Quay lại</a>';
                exit; // Dừng chương trình
            }

            // Kiểm tra có phải số không
            if (!is_numeric($_POST['so1']) || !is_numeric($_POST['so2'])) {
                echo '<p class="loi">Lỗi: Vui lòng nhập số hợp lệ!</p>';
                echo '<br><a href="pheptinh.php">← Quay lại</a>';
                exit;
            }

            // Lấy dữ liệu
            $so1 = $_POST['so1'];
            $so2 = $_POST['so2'];
            $phep = $_POST['phep'];

            // Kiểm tra chia cho 0
            if ($phep == 'chia' && $so2 == 0) {
                echo '<p class="loi">Lỗi: Không thể chia cho 0!</p>';
                echo '<br><a href="pheptinh.php">← Quay lại</a>';
                exit;
            }

            // === Bài 6: TÍNH TOÁN ===
            $ten_phep = '';
            $ketqua = 0;

            switch ($phep) {
                case 'cong':
                    $ten_phep = 'Cộng';
                    $ketqua = $so1 + $so2;
                    break;
                case 'tru':
                    $ten_phep = 'Trừ';
                    $ketqua = $so1 - $so2;
                    break;
                case 'nhan':
                    $ten_phep = 'Nhân';
                    $ketqua = $so1 * $so2;
                    break;
                case 'chia':
                    $ten_phep = 'Chia';
                    $ketqua = $so1 / $so2;
                    break;
            }

            // In kết quả
            echo "<p><strong>Phép tính:</strong> $ten_phep</p>";
            echo "<p><strong>Số thứ nhất:</strong> $so1</p>";
            echo "<p><strong>Số thứ hai:</strong> $so2</p>";
            echo "<p><strong>Kết quả:</strong> $ketqua</p>";
        ?>

        <br>
        <a href="pheptinh.php">← Quay lại trang tính</a>
    </div>
</body>
</html>
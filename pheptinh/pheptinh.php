<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 6 & 7 — Phép tính</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        form { background: #cce5ff; padding: 20px; display: inline-block; border-radius: 8px; }
        input, select { margin: 8px; padding: 5px; width: 180px; }
        button { padding: 8px 20px; background: #0066cc; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <form method="post" action="ketqua_phep_tinh.php">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        
        <label>Số thứ nhất:</label><br>
        <input type="number" name="so1" step="any" required><br>
        
        <label>Chọn phép tính:</label><br>
        <select name="phep">
            <option value="cong">Cộng (+)</option>
            <option value="tru">Trừ (-)</option>
            <option value="nhan">Nhân (×)</option>
            <option value="chia">Chia (÷)</option>
        </select><br>
        
        <label>Số thứ hai:</label><br>
        <input type="number" name="so2" step="any" required><br><br>
        
        <button type="submit">Xem kết quả</button>
    </form>
</body>
</html>

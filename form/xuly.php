<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kết quả</title>
</head>
<body>
    <h2>Thông tin nhận được</h2>
    <?php
        echo "<p>Tên: " . $_POST["ten"] . "</p>";
        echo "<p>Địa chỉ: " . $_POST["diachi"] . "</p>";
        echo "<p>Điện thoại: " . $_POST["dt"] . "</p>";
        echo "<p>Email: " . $_POST["email"] . "</p>";
    ?>
    <a href="form.html">Quay lại</a>
</body>
</html>
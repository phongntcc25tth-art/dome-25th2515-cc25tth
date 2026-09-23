<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>
    <div>
        <a href="menu.php?page=trangchu">Trang chủ</a> |
        <a href="menu.php?page=gioithieu">Giới thiệu</a> |
        <a href="menu.php?page=tintuc">Tin tức</a> |
        <a href="menu.php?page=lienhe">Liên hệ</a> |
        <a href="menu.php?page=diendan">Diễn đàn</a>
    </div>
    <hr>

    <?php
        $page = isset($_GET["page"]) ? $_GET["page"] : "trangchu";
        $file = $page . ".php";
        if (file_exists($file)) include($file);
        else echo "<p>Chào mừng!</p>";
    ?>
</body>
</html>
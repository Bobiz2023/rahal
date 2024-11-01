<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// جلب المحتوى الحالي للعرض
$query = "SELECT content FROM pages WHERE page='home'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$currentContent = $row['content'];
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>لوحة التحكم - تعديل محتوى الصفحة الرئيسية</h2>

    <form action="update.php" method="POST">
        <textarea name="content" rows="10" cols="50"><?php echo htmlspecialchars($currentContent); ?></textarea>
        <input type="submit" value="حفظ">
    </form>

    <p><a href="logout.php">تسجيل الخروج</a></p>

</body>
</html>

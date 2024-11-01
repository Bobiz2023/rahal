<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدرسة رحال بن أحمد الثانوية</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>مدرسة رحال بن أحمد الثانوية</h1>
    </header>

    <main>
        <?php
        include 'config.php';
        $query = "SELECT content FROM pages WHERE page='home'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<p>" . $row['content'] . "</p>";
        } else {
            echo "<p>لم يتم العثور على المحتوى.</p>";
        }
        ?>

        <p><a href="login.php"><button>دخول إلى لوحة التحكم</button></a></p>
    </main>

    <footer>
        <p>حقوق النشر &copy; 2024 مدرسة رحال بن أحمد الثانوية</p>
    </footer>

</body>
</html>

<?php
include 'config.php';

if (isset($_POST['content'])) {
    $content = $conn->real_escape_string($_POST['content']);
    $query = "UPDATE pages SET content='$content' WHERE page='home'";

    if ($conn->query($query) === TRUE) {
        echo "تم تحديث المحتوى بنجاح.";
    } else {
        echo "حدث خطأ أثناء التحديث: " . $conn->error;
    }
    header("Location: dashboard.php");
    exit;
}
?>

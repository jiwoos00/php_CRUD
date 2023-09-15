<?php
require_once("dbconfig.php");


if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $id = mysqli_real_escape_string($conn, $id);
    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);

    $sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "게시물 수정 오류: " . $conn->error;
    }
}

$conn->close();
?>

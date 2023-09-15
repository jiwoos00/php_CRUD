<?php
require_once("dbconfig.php");

// 게시물 생성
if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];

    // 사용자 입력을 위해 SQL Injection 방지를 위해 mysqli_real_escape_string 사용
    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "게시물 생성 오류: " . $conn->error;
    }
}

$conn->close();
?>

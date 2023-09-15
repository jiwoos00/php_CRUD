<?php
require_once("dbconfig.php");


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "DELETE FROM posts WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "게시물 삭제 오류: " . $conn->error;
    }
}

$conn->close();
?>

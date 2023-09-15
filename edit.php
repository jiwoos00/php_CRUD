<?php
require_once("dbconfig.php");


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM posts WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row["title"];
        $content = $row["content"];
    } else {
        echo "게시물을 찾을 수 없습니다.";
    }
}

$conn->close();
?>
<!-- 게시물 수정 양식 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 수정</title>
    <!-- Bootstrap CSS 링크 추가 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- 네비게이션 바 -->
    <?php include 'nav.php'; ?>
    
    <div class="container mt-5">
        <h4 class="mb-4">게시물 수정</h1>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">제목:</label>
                <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">내용:</label>
                <textarea name="content" class="form-control" required><?php echo $content; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">수정 완료</button>
        </form>
    </div>
</body>
</html>

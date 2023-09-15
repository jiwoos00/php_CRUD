<?php
require_once("dbconfig.php");

// 게시물 목록 가져오기
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 페이지</title>
    <!-- Bootstrap CSS 링크 추가 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <!-- 네비게이션 바 -->
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
            
        <!-- 게시물 목록 표시 -->
        <h4 class="mt-4">게시물 목록</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>제목</th>
                    <th>내용</th>
                    <th>작성일</th>
                    <th>작업</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // PHP 코드를 사용하여 데이터베이스에서 게시물 목록을 가져옴
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["title"] . '</td>';
                    echo '<td>' . $row["content"] . '</td>';
                    echo '<td>' . $row["created_at"] . '</td>';
                    echo '<td>';
                    echo '<a href="edit.php?id=' . $row["id"] . '" class="btn btn-warning btn-sm me-1">수정</a> ';
                    echo '<a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm">삭제</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JavaScript 및 jQuery 링크 추가 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>

    <!-- Bootstrap CSS 링크 추가 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- 네비게이션 바 -->
    <?php include 'nav.php'; ?>
    
    <div class="container mt-5">
      
        <!-- 게시물 생성 양식 -->
        <h4>게시물 생성</h2>
        <form method="post" action="create.php">
            <div class="mb-3">
                <label for="title" class="form-label">제목:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">내용:</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">게시물 생성</button>
        </form>
        
       
    </div>
    
    <!-- Bootstrap JavaScript 및 jQuery 링크 추가 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html> 

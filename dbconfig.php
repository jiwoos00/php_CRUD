<?php
    $host = "localhost";
    $username = "username";
    $password = "password";
    $database = "dbname";

    $conn = new mysqli($host, $username, $password, $database);

    // 연결 확인
    if ($conn->connect_error) {
        die("데이터베이스 연결 실패: " . $conn->connect_error);
    }
?>
<?php
$dsn = 'mysql:host=*****.db.sakura.ne.jp;dbname=****;charset=utf8';
$user = 'leadership';
$password = '*****';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    exit('DB接続エラー：' . $e->getMessage());
}
?>
<?php
// db_connect.php を読み込んで DB 接続
require_once('db_connect.php');

// POSTデータを受け取る
$log_date = $_POST['log_date'];
$action = $_POST['action'];
$partner = $_POST['partner'];
$score = $_POST['score'];
$note = $_POST['note'];

// SQL文を準備（プレースホルダ使用）
$sql = 'INSERT INTO trust_log (log_date, action, partner, score, note) 
        VALUES (:log_date, :action, :partner, :score, :note)';

// 実行準備
$stmt = $pdo->prepare($sql);

// 値をバインドして実行
$stmt->bindValue(':log_date', $log_date, PDO::PARAM_STR);
$stmt->bindValue(':action', $action, PDO::PARAM_STR);
$stmt->bindValue(':partner', $partner, PDO::PARAM_STR);
$stmt->bindValue(':score', $score, PDO::PARAM_INT);
$stmt->bindValue(':note', $note, PDO::PARAM_STR);

// 実行して結果チェック
if ($stmt->execute()) {
    echo "記録が保存されました。<a href='index.php'>戻る</a>";
} else {
    echo "エラーが発生しました。";
}
?>

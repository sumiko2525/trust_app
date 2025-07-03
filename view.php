<?php
require_once('db_connect.php');

$sql = 'SELECT * FROM trust_log ORDER BY created_at DESC';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$logs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>信頼スコア一覧</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f7fdfd;
            color: #333;
            margin: 40px;
        }

        h1 {
            color: #009688;
        }

        a {
            text-decoration: none;
            color: #ff6f3c;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th {
            background-color: #009688;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #e0f2f1;
        }

        tr:hover {
            background-color: #c8e6c9;
        }

        .back-link {
            margin-bottom: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>信頼スコアの記録一覧</h1>
    <a class="back-link" href="index.php">← 新しく記録する</a>

    <table>
        <tr>
            <th>日付</th>
            <th>行動内容</th>
            <th>相手</th>
            <th>スコア</th>
            <th>メモ</th>
            <th>登録日時</th>
        </tr>
        <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= htmlspecialchars($log['log_date']) ?></td>
                <td><?= nl2br(htmlspecialchars($log['action'])) ?></td>
                <td><?= htmlspecialchars($log['partner']) ?></td>
                <td><?= htmlspecialchars($log['score']) ?></td>
                <td><?= nl2br(htmlspecialchars($log['note'])) ?></td>
                <td><?= htmlspecialchars($log['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

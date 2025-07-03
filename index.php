<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>信頼貯金ログ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: "Hiragino Kaku Gothic ProN", sans-serif;
      background-color: #f5fcfb;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container {
      max-width: 600px;
      margin: auto;
      padding: 1rem;
      animation: fadeIn 1s ease-in;
    }

    h1 {
      text-align: center;
      color: #009688;
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }

    form {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 150, 136, 0.2);
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    label {
      font-weight: bold;
      color: #555;
      display: flex;
      flex-direction: column;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      width: 100%;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #ff7043;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #f4511e;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 1.6rem;
      }

      form {
        padding: 16px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>信頼貯金ログ</h1>
    <form action="insert.php" method="POST">
      <label>日付:
        <input type="date" name="log_date" required>
      </label>

      <label>行動内容:
        <textarea name="action" required></textarea>
      </label>

      <label>相手（誰に対して）:
        <input type="text" name="partner" required>
      </label>

      <label>スコア（0〜10）:
        <input type="number" name="score" min="0" max="10" required>
      </label>

      <label>メモ（任意）:
        <textarea name="note"></textarea>
      </label>

      <button type="submit">記録する</button>
    </form>
  </div>
</body>
</html>

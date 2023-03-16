<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <style type="text/css">
        body {
            background-color: #f9fff2;
        }
        .input-area{
            margin-bottom: 20px;
        }
        input[type="text"],input[type="email"],select{
            width:  300px;
            height: 30px;
        }
        textarea {
            width: 300px;
        }
        p {
            font-weight: bold;
            font-size:  20px;
        }
        .btn-border {
            display:  inline-block;
            max-width:  180px;
            text-align: left;
            border: 2px solid #9ec34b;
            font-size: 15px;
            color: #9ec34b;
            text-decoration: none;
            padding: 8px 16px;
            transition: .4s;
        }
        .btn-border::hover {
            background-color: #9ec34b;
            border-color: #cbe585;
            color: #FFF;
        }
    </style>
</head>
<body>
        <form action="confirm.php" method="POST">
            <h2>お問い合わせフォーム</h2>
            <div class="input-area">
                <p>名前</p>
                <input type="text" name="name" placeholder="例) 亜細亜太郎" required>
            </div>

            <div class="input-area">
                <p>メール</p>
                <input type="email" name="email" placeholder="例) abc@abc.com" required>
            </div>
            <div class="input-area">
                <p>性別</p>
                <label><input type="radio" name="sex" value="男性" checked=男性></label>
                <label><input type="radio" name="sex" value="女性" checked=女性></label>
            </div>

            <div class="input-area">
                <p>お住まいの地域</p>
                <select name="pref" required>
                    <option value="">-選択-</option>
                    <option value="東京都">-東京都-</option>
                    <option value="大阪府">-大阪府-</option>
                    <option value="北海道">-北海道-</option>
                    <option value="その他">-その他-</option>
                </select>
            </div>

            <div class="input-are">
                <p>お問い合わせ理由</p>
                <label><input type="checkbox" name="reason[]" value="質問">質問</label>
                <label><input type="checkbox" name="reason[]" value="ご意見ご要望">ご意見ご要望</label>
                <label><input type="checkbox" name="reason[]" value="資料請求">資料請求</label>
                <label><input type="checkbox" name="reason[]" value="掲載依頼">掲載依頼</label>
                <label><input type="checkbox" name="reason[]" value="その他">その他</label>
            </div>

            <div class="input-area">
                <p>お問い合わせ内容</p>
                <textarea name="contact_body" rows="5" placeholder="例) 具体的な内容を記載" required></textarea>
            </div>
            <div class="input-area">
                <input type="submit" name="submit" value="確認画面へ" class="btn-border">
            </div>
        </form>
</body>
</html>
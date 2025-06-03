<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header>
        <h1>FashionablyLate Admin</h1>
    </header>
    <main>
        <section class="search-section">
            <input type="text" placeholder="名前やメールアドレスを入力してください">
            <select>
                <option value="">性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
            </select>
            <select>
                <option value="">お問い合わせの種類</option>
                <option value="exchange">商品の交換について</option>
                <option value="refund">返品について</option>
            </select>
            <input type="date">
            <button>検索</button>
            <button>リセット</button>
            <button>エクスポート</button>
        </section>
        <table>
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせ内容</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button>詳細</button></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate Contact</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
  <header class="site-header">
    <h1 class="logo">FashionablyLate</h1>
    <a href="http://localhost:8000/login" class="login-link">login</a>
  </header>

  <main class="register-main">
    <h2 class="register-title">Register</h2>
    <div class="form-container">
      <form action="/register" method="post" >
        @csrf
        <div class="form-group">
          <label for="name">お名前</label>
          <input type="text" id="name" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}" />
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form-group">
          <label for="email">メールアドレス</label>
          <input type="text" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form-group">
          <label for="password">パスワード</label>
          <input type="password" id="password" name="password" placeholder="例: coachtech1106" value="{{ old('password') }}" />
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>

        <button type="submit" class="submit-button">登録</button>
      </form>
    </div>
  </main>
</body>

</html>
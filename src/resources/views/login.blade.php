<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
  <header class="header">
    <h1 class="logo">FashionablyLate</h1>
    <a href="{{ url('/register') }}">register</a>
  </header>

  <main class="main">
    <h2 class="main-title">Login</h2>
    <form class="form" action="/login" method="post">
      @csrf
      <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="text" id="email" name="email"  placeholder="例: test@example.com" value="{{ old('email') }}" />
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
      <button type="submit" class="btn">ログイン</button>
    </form>
  </main>
</body>

</html>
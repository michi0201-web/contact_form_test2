<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate Contact</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header>FashionablyLate</header>
  <h2>Contact</h2>
  <form action="/confirm" method="post">
    @csrf
    <div class="form-group">
      <label>お名前 <span class="required">※</span></label>
      <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name') }}"/>
      <div class="form__error">
        @error('last_name')
          {{ $message }}
        @enderror
      </div>
      <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name') }}"/>
      <div class="form__error">
        @error('first_name')
          {{ $message }}
        @enderror
      </div>
    </div>

    <div class="form-group">
      <label>性別 <span class="required">※</span></label>
      <div class="gender-options">
        <label>
          <input type="radio" name="gender" value="男性" {{ old('gender', '男性') == '男性' ? 'checked' : '' }}> 男性
        </label>
        <label>
          <input type="radio" name="gender" value="女性" {{ old('gender', '男性') == '女性' ? 'checked' : '' }}> 女性
        </label>
        <label>
          <input type="radio" name="gender" value="その他" {{ old('gender', '男性') == 'その他' ? 'checked' : '' }}> その他
        </label>
      </div>
      <div class="form__error">
        @error('gender')
          {{ $message }} 
        @enderror
       </div>
    </div>

    <div class="form-group">
      <label>メールアドレス <span class="required">※</span></label>
      <input type="text" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
      <div class="form__error">
        @error('email')
          {{ $message }} 
        @enderror
       </div>
    </div>

    <div class="form-group">
      <label>電話番号 <span class="required">※</span></label>
       <div class="tel-inputs">
       <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}">
       -
        @error('tel1')
        <div class="form__error">{{ $message }}</div>
        @enderror

      <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}">
      -
        @error('tel2')
        <div class="form__error">{{ $message }}</div>
        @enderror

      <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
        @error('tel3')
       <div class="form__error">{{ $message }}</div>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <label>住所 <span class="required">※</span></label>
      <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
        @error('address')
          {{ $message }} 
        @enderror
    </div>

    <div class="form-group">
      <label>建物名</label>
      <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101"/>
        @error('building')
          {{ $message }} 
        @enderror
    </div>

    <div class="form-group">
      <label>お問い合わせの種類 <span class="required">※</span></label>
      <select name="inquiry_type" value="{{ old('inquiry_type') }}">
      <option value="" disabled selected>選択してください</option>
      <option>商品のお届けについて</option>
        <option>商品の交換について</option>
        <option>商品トラブル</option>
        <option>ショップへのお問い合わせ</option>
        <option>その他</option>
      </select>
        @error('inquiry_type')
          {{ $message }} 
        @enderror
    </div>

    <div class="form-group">
      <label>お問い合わせ内容 <span class="required">※</span></label>
      <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('content') }}"></textarea>
      @error('content')
          {{ $message }} 
        @enderror
    </div>

    <div class="submit-btn">
      <button type="submit">確認画面</button>
    </div>
  </form>
</body>

</html>
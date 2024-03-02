<html>

<head>
    <meta charset="UTF-8">
    <title>カリキュラム</title>

<body>
    <h1>会員情報編集画面(仮)</h1>
    <div>
        @if ($errors->any())
            <p style="color: red">入力内容に不備があります</p>
        @endif
        <form method="POST" action="{{ route('confirm') }}">
            @csrf
            <table>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="text" name="email" value="{{ $userData[0]->email }}"></td>
                    <td style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><input type="text" name="password" value="{{ $userData[0]->password }}"></td>
                    <td style="color: red">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>名前</th>
                    <td><input type="text" name="name" value="{{ $userData[0]->name }}"></td>
                    <td style="color: red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><input type="text" name="tel" value="{{ $userData[0]->tel }}"></td>
                    <td style="color: red">
                        @error('tel')
                            {{ $message }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>緊急連絡先</th>
                    <td><input type="text" name="tel2" value="{{ $userData[0]->tel2 }}"></td>
                    <td style="color: red">
                        @error('tel2')
                            {{ $message }}
                        @enderror
                    </td>

                </tr>
            </table>
            <input type="hidden" name="id" value="{{ $userData[0]->id }}">
            <input type="submit" id="confirm" value="内容確認画面へ">
        </form>
    </div>
</body>

</html>

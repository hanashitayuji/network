<html>

<head>
    <meta charset="UTF-8">
    <title>カリキュラム</title>

<body>
    <h1>会員情報編集内容確認画面(仮)</h1>
    <div>
        <p>ご入力内容をご確認ください</p>
    </div>
    <form method="POST" action="{{ route('complete') }}">
        @csrf
        <table>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $userData['email'] }}</td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>{{ $userData['password'] }}</td>
            </tr>
            <tr>
                <th>名前</th>
                <td>{{ $userData['name'] }}</td>
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{ $userData['tel'] }}</td>
                </td>
            </tr>
            <tr>
                <th>緊急連絡先</th>
                <td>{{ $userData['tel2'] }}</td>
                </td>
            </tr>
        </table>
        <input type="hidden" name="email" value="{{ $userData['email'] }}">
        <input type="hidden" name="password" value="{{ $userData['password'] }}">
        <input type="hidden" name="name" value="{{ $userData['name'] }}">
        <input type="hidden" name="tel" value="{{ $userData['tel'] }}">
        <input type="hidden" name="tel2" value="{{ $userData['tel2'] }}">
        <input type="hidden" name="id" value="{{ $userData['id'] }}">
        <input type="submit" value="変更">
    </form>
</body>

</html>

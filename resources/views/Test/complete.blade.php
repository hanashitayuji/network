<html>

<head>
    <meta charset="UTF-8">
    <title>カリキュラム</title>

<body>
    <h1>会員情報更新完了画面(仮)</h1>
    <div>
        @if ($update)
            <p>会員情報の更新が完了しました</p>
        @else
            <p>会員情報の更新に失敗しました</p>
        @endif
    </div>
    <a href="{{ route('top') }}">トップへ</a>
</body>

</html>

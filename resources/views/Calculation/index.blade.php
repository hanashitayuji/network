<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>カリキュラム</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/Calculation/index.js') }}"></script>

<body>
    <h1>計算ツール画面</h1>
    <div>
        <table>
            <tr>
                <th>計算マスターくん</th>
                <td><input type="txst" name="num1"> +-×÷ <input type="txst" name="num2"> <input type="button"
                        onclick="calculation()" value="実行">
                </td>
            </tr>
        </table>
        <div>
            <p>実行結果</p>
            <p class="addition" id="addition"></p>
            <p class="subtraction" id="subtraction"></p>
            <p class="multiplication" id="multiplication"></p>
            <p class="dividing" id="dividing"></p>
        </div>
    </div>
</body>

</html>

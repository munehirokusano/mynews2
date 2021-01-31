<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>title</title>
    </head>
    <body>
        <table>
            <tr>
                <th>お名前</th><td>{{ $text['contact_name'] }}</td>
            </tr> 
            <tr>
                <th>email</th><td>{{ $text['contact_email'] }}</td>
            </tr> 
            <tr>
                <th>体験コース</th><td>{{ $text['contact_course'] }}</td>
            </tr>
            <tr>
                <th>お住まい</th><td>{{ $text['contact_area'] }}</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th><td>{{ $text['contact_message'] }}</td>
            </tr>
        </table>
    </body>
</html>

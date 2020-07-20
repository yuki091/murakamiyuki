<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>詳細</h1>
<table border="1">
    <tr>
        <th>カテゴリー</th>
        <th>ブランド</th>
        <th>メモ</th>
        <th>作成日</th>
    </tr>
    <tr>
    <img src="{{ asset('storage/'.$cloth->cloth_filename) }}" width="300px">
        <td>{{ $cloth->category_name }}</td>
        <td>{{ $cloth->brand_name }}</td>
        <td>{{ $cloth->memo }}</td>
        <td>{{ $cloth->created_at }}</td>
        <td><a href="/home/{{ $cloth->category_id }}/edit">編集</a></td>
        <a href="/home">ホーム</a>
    </tr>
</table>
    
</body>
</html>
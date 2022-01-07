<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
</head>

<body>
    <h1>
        Musics in the list
    </h1>
    <table>
        <tr>
            <th>Singer</th>
            <th>Song Title</th>
            <th>Time (sec)</th>
        </tr>
        @foreach ($musics as $music)
            <tr>
                <td>{{ $music->singer }}</td>
                <td>{{ $music->title }}</td>
                <td class="time">{{ $music->length }} s</td>
            </tr>
        @endforeach
    </table>
</body>

</html>

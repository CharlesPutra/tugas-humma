<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>menampilkan data dari absens</h1>

    @foreach ($datas as $data)
        <h1>{{$data->nama}}</h1>
        <h1>{{$data->jurusan}}</h1><br>
    @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>siswa</title>
</head>
<body>
   <h1>{{$nama}}</h1>
   @foreach ($nilai as $val)
       <h1>{{$val}}</h1>
   @endforeach
    {{-- <br>
    <h1>{{$nama}}</h1>
    <h2>{{$nilai}}</h2>
    <h2>{{$guru}}</h2> --}}
</body>
</html>
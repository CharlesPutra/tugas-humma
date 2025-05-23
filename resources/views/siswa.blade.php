@extends('halaman utama.welcome')

@section('navbar')

<ul>
@foreach ($perpus as $buku)
    <li>{{ $buku }}</li>
@endforeach
</ul>
@endsection

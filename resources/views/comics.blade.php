@extends('layouts.app')
@section('index')
    <h2>sono comics</h2>
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic->title }}</li>
            <a href="{{ route('comics.show', $comic) }}">show</a>
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">Crea Comics</a>
@endsection

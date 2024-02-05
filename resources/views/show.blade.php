@extends('layouts.app')
@section('index')
    <h2>sono show</h2>
    <ul>
        <li>{{ $comic->title }} - {{ $comic->series }} - {{ $comic->id }}- {{ $comic->description }}</li>
        <a href="{{ route('comics.index') }}">Torna a Comics</a>
    </ul>
@endsection

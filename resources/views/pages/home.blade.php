@extends('layouts.app')

@section('main')
    <h1>ciao</h1>

    @foreach ($all_movies as $item)
        <h2>{{ $item['title'] }}</h2>
    @endforeach
@endsection

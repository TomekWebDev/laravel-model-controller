@extends('layouts.app')

@section('main')
    <h1>ciao</h1>


    <div class="cards-container d-flex flex-wrap w-100 justify-content-center">

        @foreach ($all_movies as $key => $item)
            <div class="card my-2 mx-2">
                <div class="card-body">
                    <h5 class="card-title">Title: {{ $item['title'] }}</h5>
                    <p class="card-text">Original title: {{ $item['original_title'] }}</p>
                    <p class="card-text">Country: {{ $item['nationality'] }}</p>
                    <p class="card-text">Release date: {{ $item['date'] }}</p>
                    <p class="card-text">Vote: {{ $item['vote'] }}</p>
                    <a href="{{ route('single', compact('key')) }}" class="btn btn-primary">More</a>
                </div>
            </div>
        @endforeach

        @foreach ($movies_filtered as $item)
            <h3> {{ $item['title'] }} </h3>
        @endforeach





    </div>
@endsection

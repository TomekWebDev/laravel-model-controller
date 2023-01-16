<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function showMovie($key)
    {

        // 'select * from books'
        // $all_movies = Movie::all();

        $index = $key + 1;

        $single_movie = Movie::find($key);


        // dd($single_movie);


        return view('pages.single', compact('single_movie'));
    }
}

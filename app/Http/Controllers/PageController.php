<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        // 'select * from books'
        $all_movies = Movie::all();

        $movies_filtered = Movie::where('title', 'Like', 'G%')->get();



        // $data = [
        //     'new_list_title' => 'lista film filtrati',
        //     'movies_all' => $all_movies,
        //     'movies_filtered' => $movies_filtered,
        // ];

        // dd($all_movies);

        return view('pages.home', compact('all_movies', 'movies_filtered'));
    }
}

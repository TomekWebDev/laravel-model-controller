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

        //filtraggio elementi
        // $movies_filtered = Movie::where('title', 'Like', 'L%')->get();

        // $data = [
        //     'filtered_title' => 'lista film filtrati',
        //     'movies_all' => $all_movies,
        //     'movies_filtered' => $filtered_movies
        // ];

        // dd($all_movies);

        return view('pages.home', compact('all_movies'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Episode;
use App\Genre;

class HomeController extends Controller
{
    public function index()
    {

        $movie = Movie::all();
        return view('welcome',['movie' => $movie]);
    }

    public function movies($id){
        $movie = Movie::find($id);
        $episode = Episode::where('movies_id',$id)->paginate(4);
        return view('movies',['movie' => $movie],['episode' => $episode]);

    }

    public function genres($id){

        $genre = \App\Genre::where('id',$id)->first();
        $movie = \App\Movie::all();
        return view('genres',['genre' => $genre],['movie'=>$movie]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\Genre;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MoviesController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    function index()
    {
        $slides =  Movie::orderBy('movies.created_at', 'DESC')
        ->join('schedules','schedules.scheduleID', '=', 'movies.movieID')
        ->limit(6)->get();


        $soons =  Movie::where('released', '>', Carbon::now('Europe/Stockholm'))->limit(6)->get();
        return view('index', compact('slides', 'soons'));
    }

    function movies()
    {
        //Load all movies
        $movies =  Movie::all();

        //Load all movies that are scheduled to be shown on the cinema this week
        $start = date('Y-m-d');
        $end = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + 7, date('Y')));
        $weekmovies = Schedule::whereBetween('show_time', [$start, $end])
            ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
            ->get();

        //$show = date_format(date_create($schedules[0]->show_time),'Y-m-d');

        //Load all the movies that will be released on the future from todate
        $futuremovies =  Movie::where('released', '>', Carbon::now('Europe/Stockholm'))->get();

        //Load movies showing in dar es salaam theatres
        $darmovies = Schedule::where('region_id', '=', 1)
            ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
            ->get();

        //Load movies showing in Mwanza theatres
        $mwzmovies = Schedule::where('region_id', '=', 2)
            ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
            ->get();

        //Load movies showing in Arusha theatres
        $arumovies = Schedule::where('region_id', '=', 3)
            ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
            ->get();

        //Load movies showing in Morogoro theatres
        $mormovies = Schedule::where('region_id', '=', 4)
            ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
            ->get();

        //Load movies showing in Dodoma theatres
        $dommovies = Schedule::where('region_id', '=', 5)
            ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
            ->get();

        return view('movies', compact('movies', 'weekmovies', 'futuremovies', 'darmovies', 'mwzmovies', 'arumovies', 'mormovies', 'dommovies'));
        //return $start.'  '.$end.'   '.$schedules.'  '.$schedules[0]->show_time;
    }

    function search(Request $request)
    {
        //return view('celebrities');
        $result1 = collect(Movie::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('writter', 'like', '%' . $request->search . '%')
            ->orWhere('director', 'like', '%' . $request->search . '%')
            ->orWhere('language', 'like', '%' . $request->search . '%')
            ->orWhere('genre_name', 'like', '%' . $request->search . '%')
            ->orWhere('region_name', 'like', '%' . $request->search . '%')
            ->orWhere('screen_name', 'like', '%' . $request->search . '%')
            ->orWhere('theatre_name', 'like', '%' . $request->search . '%')
            ->join('schedules', 'schedules.movie_id', '=', 'movies.movieID')
            ->join('regions', 'regID', '=', 'schedules.region_id')
            ->join('theatres', 'theatreID', '=', 'schedules.theatre_id')
            ->join('screens', 'screenID', '=', 'schedules.screen_id')
            ->join('genres', 'genres.genreID', '=', 'movies.genre_id')
            ->distinct('movieID')
            ->get());

        $result2 = $result1->unique('movieID');
        $results = $result2->values()->all();


        return view('search', compact('results'));
    }

    function theatre(Request $request)
    {
        $movies = Schedule::where('theatre_id', '=', $request->theatreID)
            ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
            ->join('theatres', 'theatres.theatreID', '=', 'schedules.theatre_id')
            ->join('regions', 'regions.regID', '=', 'schedules.region_id')
            ->get();

        $name = $movies[0]->theatre_name;
        $region = $movies[0]->region_name;

        return view('theatre-movies', compact('movies','name','region'));
    }
    
    function top()
    {
        return view('top-movies');
    }
    function blog()
    {
        return view('blog');
    }

    function synopsis(Request $request)
    {

        $movie = Movie::where('movieID', $request->movieID)
            ->join('schedules', 'schedules.movie_id', '=', 'movies.movieID')
            ->join('regions', 'regions.regID', '=', 'schedules.region_id')
            ->join('theatres', 'theatres.theatreID', '=', 'schedules.theatre_id')
            ->join('screens', 'screens.screenID', '=', 'schedules.screen_id')
            ->join('genres', 'genres.genreID', '=', 'movies.genre_id')
            ->first();

        return view('synopsis', compact('movie'));
        //return $movie;
    }




    //ADMIN SECTION
    function addform()
    {

        $genres = Genre::all();
        return view('admin.addmovie', compact('genres'));
    }

    function postmovie(Request $request)
    {
        $file = $request->hasFile('image');
        if ($file) {
            $newfile = $request->file('image');
            $file_path = $newfile->store('public/images');
            //dd(asset('/storage/'.$file_path));
            //$title = $request->title;

            Movie::create(
                [
                    'title' => $request->title,
                    'genre_id' => $request->genre,
                    'writter' => $request->writter,
                    'director' => $request->director,
                    'duration' => $request->duration,
                    'released' => $request->released,
                    'language' => $request->language,
                    'overview' => $request->overview,
                    'trailer' => $request->trailer,
                    'image' => $file_path,
                ]

            );
        }

        return redirect('available');
    }
    function available()
    {
        $movies =  Movie::orderBy('created_at','DESC')->get();
        return view('admin.available', compact('movies'));
    }

    function edit(Request $request)
    {
        $movie =  Movie::find($request->id);
        return view('admin.edit', compact('movie'));
    }

    function update(Request $request)
    {


        $newfile = $request->file('image');
        $file_path = $newfile->store('public/images');


        $movie =  Movie::find($request->id);

        $movie->title = $request->title;
        $movie->writter = $request->writter;
        $movie->director = $request->director;
        $movie->duration = $request->duration;
        $movie->released = $request->released;
        $movie->language = $request->language;
        $movie->overview = $request->overview;
        $movie->image =  $file_path;

        $movie->save();
        return redirect('/available');
    }

    public function destroy(Request $request)
    {
        $movie =  Movie::where('movieID', $request->movieID)->first();
        $movie->delete();
        return redirect('/available');
    }
}

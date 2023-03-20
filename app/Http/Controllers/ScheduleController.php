<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Movie;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $schedules = Schedule::orderBy('schedules.created_at', 'desc')
        ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
        ->join('regions', 'regions.regID', '=', 'schedules.region_id')
        ->join('theatres', 'theatres.theatreID', '=', 'schedules.theatre_id')
        ->join('screens', 'screens.screenID', '=', 'schedules.screen_id')
        ->get();
        return view('admin.schedules', compact('schedules')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.addschedule', compact('movies'));
        $movies = Movie::all();
        return view('admin.addschedule', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Schedule::create(
            [
                'movie_id' => $request->movie,
                'region_id' => $request->region,
                'theatre_id' => $request->theatre,
                'screen_id' => $request->screen,
                'show_time' => $request->time,
                'price' => $request->price,
                
            ]
        );

        return redirect('/schedules');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    // public function edit(Schedule $schedule)
    // {
    //     $schedules = Schedule::where('id', $request->scheduleID)->get();
    //     return view('admin.addschedule', compact('movies'));
    // }

    public function edit(Request $request)
    {
        $movies = Movie::all();

        $schedules = Schedule::where('scheduleID', $request->scheduleID)
        ->join('movies', 'movies.movieID', '=', 'schedules.movie_id')
        ->join('regions', 'regions.regID', '=', 'schedules.region_id')
        ->join('theatres', 'theatres.theatreID', '=', 'schedules.theatre_id')
        ->join('screens', 'screens.screenID', '=', 'schedules.screen_id')
        ->get();
        return view('admin.editschedule', compact('schedules','movies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $schedule =  Schedule::where('scheduleID', $request->id)->first();

        //echo $schedule;
        $schedule->movie_id = $request->movie;
        $schedule->region_id = $request->region;
        $schedule->theatre_id = $request->theatre;
        $schedule->screen_id = $request->screen;
        $schedule->show_time = $request->time;

        $schedule->save();
        return redirect('/schedules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $schedule =  Schedule::where('scheduleID', $request->scheduleID)->first();
        $schedule->delete();
        return redirect('/schedules');
    }
}

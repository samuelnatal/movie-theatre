<?php

namespace App\Http\Controllers;

use App\Models\Theatre;

class TheatreController extends Controller
{
    public function index()
    {
        $theatres = Theatre::join('regions', 'regions.regID', '=', 'theatres.region_id')
            ->get();

        return view('admin.theatres', compact('theatres'));
    }
}

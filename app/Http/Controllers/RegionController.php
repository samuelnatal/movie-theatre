<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    function region(Request $request)
    {
        $name = '';
        switch ($request->regID) {
            case 1:
                $name = 'DAR ES SALAAM';
                break;
            case 2:
                $name = 'MWANZA';
                break;
            case 3:
                $name = 'ARUSHA';
                break;
            case 4:
                $name = 'MOROGORO';
                break;
            case 5:
                $name = 'DODOMA';
                break;
        }
        $reg = Region::where('regID', '=', $request->regID)
            ->join('theatres', 'theatres.region_id', '=', 'regions.regID')
            ->get();
        return view('region', compact('reg','name'));
    }
}

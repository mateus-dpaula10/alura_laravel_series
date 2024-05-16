<?php

namespace App\Http\Controllers;

use App\Models\Series;

class SeasonsController extends Controller
{
    public function index(Series $series)
    {
        $seasons = $series->seasons()->with('episodes')->get();

        return view ('seasons.index')->with('seasons', $seasons)->with('series', $series);

        // $seasons = Season::query()
        //     ->with('episodes')
        //     ->where('series_id', $series)
        //     ->get();

        // return view ('seasons.index')->with('seasons', $seasons);
    }
}

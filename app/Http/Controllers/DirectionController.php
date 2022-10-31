<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Place;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function _2dPlace(Place $place)
    {
        // $place->put('lon', $place->block->lon);
        // $place->put('lat', $place->block->lat);
        // $place->put('icon', $place->block->icon);
        $place->lon = $place->block->lon;
        $place->lat = $place->block->lat;
        $place->icon = $place->block->icon;


        return view('direction/2d', ['place' => $place]);
    }

    public function _2dBlock(Block $block)
    {
        return view('direction/2d', ['place' => $block]);
    }

    public function ar($cords)
    {
        dd($cords);
        // for ($i=0; $i < $cords->; $i++) { 
        //     # code...
        // }
        return view('direction/ar', compact('cords'));
    }
}

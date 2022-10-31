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
        $arr = explode(',', $cords);
        $cords = collect();
        for ($i=1; $i < count($arr); $i+=2) {
            $cords->put($i-1, collect(['lon' => $arr[$i-1], 'lat' =>$arr[$i]]));
        }
        
        // for ($i=0; $i < $cords->; $i++) { 
        //     # code...
        // }
        return view('direction/ar', compact('cords'));
    }
}

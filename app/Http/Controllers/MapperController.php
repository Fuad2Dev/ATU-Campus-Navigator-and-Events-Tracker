<?php

namespace App\Http\Controllers;

use App\Models\mapper;
use Illuminate\Http\Request;

class MapperController extends Controller
{
    public function _2d(){
        $map = mapper::all();
        
        return view('map.2d', compact('map'));
    }
}

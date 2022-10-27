<?php

namespace App\Http\Controllers;

use App\Models\Mapper;
use Illuminate\Http\Request;

class MapperController extends Controller
{
    public function _2d(){
        $map = mapper::all();
        
        return view('map.2d', compact('map'));
    }
    public function _3d(){
        
        return view('map.3d');
    }
}

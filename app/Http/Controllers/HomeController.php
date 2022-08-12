<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;

class HomeController extends Controller
{
    public function index(){
        $associations = Association::all();
        
        return view('home', compact('associations'));
    }

}

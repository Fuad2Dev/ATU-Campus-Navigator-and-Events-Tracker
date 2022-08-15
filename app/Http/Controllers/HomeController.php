<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Association;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $associations = Association::all();
        $my = User::find(auth()->user()->id);
        return view('home', compact( 'my'));
    }

}

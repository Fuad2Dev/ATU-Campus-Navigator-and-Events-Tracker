<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Association;
use App\Models\Block;
use App\Models\Place;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $associations = collect();
        $locations = collect();
        return view('search', compact('associations', 'locations'));
    }
    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ], [
            'required' => 'required'
        ]);
        $keyWord = request('search');

        if (Str::startsWith($keyWord, '#')) {
            $keyWord = substr($keyWord, 1);
            // dd($keyWord);
            $associations = Association::query()
                ->where('id', "$keyWord")
                ->get();
            // dd($associations);
            $locations = collect();
        } else {
            $associations = Association::query()
                ->where('name', 'LIKE', "%{$keyWord}%")
                ->get();

            $places = Place::query()
                ->where('name', 'LIKE', "%{$keyWord}%")
                ->get();

            $block = Block::query()
                ->where('name', 'LIKE', "%{$keyWord}%")
                ->get();

            $locations = collect($block)->merge($places);

        }

        return view('search', compact('associations', 'locations'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Association;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $associations = collect();
        $events = collect();
        return view('search', compact('associations', 'events'));
    }
    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ], [
            'required' => 'required'
        ]);
        $keyWord = request('search');

        $associations = Str::startsWith($keyWord, '#') ?

            Association::query()
            ->where('id', 'LIKE', "%{$keyWord}%")
            ->get() :
            Association::query()
            ->where('name', 'LIKE', "%{$keyWord}%")
            ->get();

        $events = collect();


        // $events = Str::startsWith($keyWord, '#') ?
        //     Event::query()
        //     ->where('id', 'LIKE', "%{$keyWord}%")
        //     ->get() :
        //     Event::query()
        //     ->where('name', 'LIKE', "%{$keyWord}%")
        //     ->get();

        return view('search', compact('associations', 'events'));
    }
}

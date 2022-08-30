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
        $users = collect();
        return view('search', compact('associations', 'users'));
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

        $users = Str::startsWith($keyWord, '#') ?

            User::query()
            ->where('id', 'LIKE', "%{$keyWord}%")
            ->get() :
            User::query()
            ->where('first_name', 'LIKE', "%{$keyWord}%")
            ->orWhere('last_name', 'LIKE', "%{$keyWord}%")
            ->get();


        // $events = Str::startsWith($keyWord, '#') ?
        //     Event::query()
        //     ->where('id', 'LIKE', "%{$keyWord}%")
        //     ->get() :
        //     Event::query()
        //     ->where('name', 'LIKE', "%{$keyWord}%")
        //     ->get();

        return view('search', compact('associations', 'users'));
    }
}

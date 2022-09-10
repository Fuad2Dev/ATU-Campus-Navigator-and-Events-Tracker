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

        if (Str::startsWith($keyWord, '#')) {
            $keyWord = substr($keyWord, 1);
            $associations = Association::query()
                ->where('id', 'LIKE', "%{$keyWord}%")
                ->get();
        } else {
            $associations = Association::query()
                ->where('name', 'LIKE', "%{$keyWord}%")
                ->get();
        }
        
        return view('search', compact('associations'));
    }

    

}

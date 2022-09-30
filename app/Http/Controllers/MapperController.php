<?php

namespace App\Http\Controllers;

use App\Models\Mapper;
use Illuminate\Http\Request;

class MapperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mapper.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapper  $mapper
     * @return \Illuminate\Http\Response
     */
    public function show(Mapper $mapper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapper  $mapper
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapper $mapper)
    {
        return view('mapper.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapper  $mapper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapper $mapper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapper  $mapper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapper $mapper)
    {
        //
    }
}

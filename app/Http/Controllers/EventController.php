<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Association;
use App\Models\InviteType;
use Illuminate\Http\Request;

class EventController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Association $association)
    {
        $inviteTypes = InviteType::all();
        // dd($inviteTypes);
        return view('event.create', compact('association', 'inviteTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Association $association,Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ],[
            'required' => 'required'
        ]);
        // dd($request->all());
        // $row = $request->all();
        // array_push($row, $association->id);

        $association->events()->create($request->all());

        return redirect()->route('association.show', $association);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association, Event $event)
    {
        $inviteTypes = InviteType::all();
        return view('event.edit', compact('event', 'association', 'inviteTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association, Event $event)
    {
        $this->validate($request,[
            'name' => 'required',
        ],[
            'required' => 'required'
        ]);
        // dd($request->all());
        // $row = $request->all();
        // array_push($row, $association->id);

        $name = $request->name;
        $description = $request->description;
        $invite_type_id = $request->invite_type_id;

        $association->events()->find($event->id)->update(compact('name', 'description', 'invite_type_id'));

        return redirect()->route('association.show', $association);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association, Event $event)
    {
        $association->events()->find($event->id)->delete();

        return redirect()->route('association.show', $association);
    }
}

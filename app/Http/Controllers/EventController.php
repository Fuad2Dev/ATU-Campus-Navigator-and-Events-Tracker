<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Association;
use App\Models\Block;
use App\Models\InviteType;
use App\Models\Place;
use Carbon\Carbon;
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
        // dd(Carbon::now());
        $inviteTypes = InviteType::all();
        $now = Carbon::now()->addHours(3);
        if ($now->minute > 30) {
            $now->addHour();
            $now->minute(00);
        } else {
            $now->minute(30);
        }
        // dd($now->format('Y-m-d h:i'));

        $places = Place::all()->where('place_type_id', 1);
        return view('event.create', compact('association', 'inviteTypes', 'now', 'places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Association $association, Request $request)
    {
        // dd($request);
        $this->validate(
            $request,
            [
                'name' => 'required',
                'time' => 'after: 6:00| before: 22:00',
                'date_time' => 'required|after:3 hours',
                'place_id' => 'required'
            ],
            [
                'name.required' => 'required',
                'place_id.required' => 'required',
                'time.after' => 'too early to hold an event',
                'time.before' => 'too late to hold an event',
                'date_time.after' => 'time >= 3 hours',
            ]
        );

        // dd($request->all());
        $event = $association->events()->create($request->all());
        // dd($event);

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
        $now = Carbon::now();
        return view('event.edit', compact('event', 'association', 'now'));
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
        // dd($request);
        $this->validate(
            $request,
            [
                'name' => 'required',
                'time' => 'after: 6:00| before: 22:00',
                'date_time' => 'required|after:grace_period',
            ],
            [
                'name.required' => 'required',
                'time.after' => 'too early to hold an event',
                'time.before' => 'too late to hold an event',
                'date_time.after' => 'time >= 3 created date',
            ]
        );


        $association->events()->find($event->id)->update($request->all());

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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Association;
use App\Models\Notification;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserAssociation;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Association $association)
    {
        $users = collect();
        $invited = $association->associates()->wherePivot('role_id', 5)->get();
        
        return view('association.invite', compact('association', 'users', 'invited'));
    }
    
    public function invite(Association $association, User $user)
    {
        $association->allMembers()->attach($user->id, ['role_id' => 5]);
        Notification::notify(4, $association->id, $user);

        return redirect()->route('association.add', $association);
    }

    public function search(Request $request, Association $association)
    {
        $this->validate($request, [
            'search' => 'required'
        ], [
            'required' => 'required'
        ]);
        $keyWord = request('search');

        // Get All Aliens
        $ids = $association->associates->pluck('id')->all();
        $aliens = User::whereNotIn("id", $ids);

        // Run Query Through Aliens
        if (Str::startsWith($keyWord, '#')) {
            $keyWord = substr($keyWord, 1);
            $users = $aliens
                ->where('id', 'LIKE', "%{$keyWord}%")
                ->get();
        } else {
            $users = $aliens
                ->where('first_name', 'LIKE', "%{$keyWord}%")
                ->orWhere('last_name', 'LIKE', "%{$keyWord}%")
                ->get();
        }

        // Get All Invited Users
        $invited = $association->associates()->wherePivot('role_id', 5)->get();

        return view('association.invite', compact('association', 'users', 'invited'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uniqueId = $this->generateUniqueId();
        return view('association.create', compact('uniqueId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'id' => 'required|max:6|min:3'
        ], [
            'required' => 'required'
        ]);

        $association = Association::create($request->all());

        $association->members()->attach(auth()->user()->id, ['role_id' => 1]);


        return redirect()->route('association.show', ['association' => $request->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        $requests = ($association->requests);
        return view('association.show', compact('association', 'requests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        return view('association.edit', compact('association'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association)
    {
        $association->update($request->all());

        return redirect()->route('association.show', $association);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
        // eNU08n
        $association->delete();
        $association->events()->delete();

        // notify
        Notification::notify(10, $association->id, $association->allMembers);

        return redirect()->route('home');
    }

    public function generateUniqueId()
    {
        do {
            $code = Str::random(6);
        } while (Association::where("id", "=", $code)->first());

        return $code;
    }

    public function acceptRequest(Association $association, User $user)
    {
        // dd($user);
        Notification::notify(2, $association->id, $user);



        $association->associates()->updateExistingPivot($user->id, ['role_id' => 3]);

        // notify user

        return redirect()->route('association.show', $association);
    }
    
    public function acceptInvite(Association $association)
    {
        $user = auth()->user();
        
        Notification::notify(5, $association->id, $association->executives);



        $association->associates()->updateExistingPivot($user->id, ['role_id' => 3]);

        // notify user

        return redirect()->route('association.show', $association);
    }

    public function cancel(Association $association)
    {
        $association->associates()->detach(auth()->user()->id);
        return redirect()->route('association.show', $association);
    }

    public function decline(Association $association, User $user)
    {
        $association->associates()->detach($user->id);
        Notification::notify(3, $association->id, $user);
        return redirect()->route('association.show', $association);
    }



    public function request(Association $association)
    {
        // dd($association->executives     );
        Notification::notify(1, $association->id, $association->executives);
        $user = User::find(auth()->user()->id);

        // send request
        $association->allMembers()->attach($user->id, ['role_id' => 4]);

        // notify executives

        return redirect()->route('association.show', $association->id);
    }

    public function leave(Association $association)
    {
        $user_id = auth()->user()->id;
        $association->allMembers()->detach($user_id);
        return redirect()->route('association.show', $association->id);
    }

    public function promote(Association $association, User $user)
    {
        $association->associates()->updateExistingPivot($user->id, ['role_id' => 2]);

        // notify
        Notification::notify(7, $association->id, $user);

        return redirect()->route('association.show', $association);
    }

    public function demote(Association $association, User $user)
    {
        // dd("yoo");
        $association->associates()->updateExistingPivot($user->id, ['role_id' => 3]);

        // notify
        Notification::notify(8, $association->id, $user);

        return redirect()->route('association.show', $association);
    }

    public function remove(Association $association, User $user)
    {
        // dd("yoo");
        $association->associates()->detach($user->id);

        //notify
        Notification::notify(9, $association->id, $user);

        return redirect()->route('association.show', $association);
    }
}

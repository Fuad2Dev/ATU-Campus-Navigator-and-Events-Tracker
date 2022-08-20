<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Association;
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
    public function index()
    {
        //
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
        ],[
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
        $requests = ($association->requets);
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
    public function destroy($id)
    {
        //
    }

    public function generateUniqueId()
    {
        do {
            $code = Str::random(6);
        } while (Association::where("id", "=", $code)->first());
  
        return $code;
    }

    public function accept(Association $association, User $user){
        
        $association->associates()->updateExistingPivot($user->id, ['role_id' => 3]);

        return redirect()->route('association.show', $association);
    }

    public function decline(Association $association, User $user){
        $association->associates()->detach($user->id);

        return redirect()->route('association.show', $association);
    }



    public function request(Association $association){
        $user_id = auth()->user()->id;
        $association->allMembers()->attach($user_id, ['role_id' => 4]);
        return redirect()->route('association.show', $association->id);
    }

    public function leave(Association $association){
        $user_id = auth()->user()->id;
        $association->allMembers()->detach($user_id);
        return redirect()->route('association.show', $association->id);
    }

    public function promote(Association $association, User $user){
        $association->associates()->updateExistingPivot($user->id, ['role_id' => 2]);
        return redirect()->route('association.show', $association);
    }

    public function demote(Association $association, User $user){
        // dd("yoo");
        $association->associates()->updateExistingPivot($user->id, ['role_id' => 3]);
        return redirect()->route('association.show', $association);
    }

    public function remove(Association $association, User $user){
        // dd("yoo");
        $association->associates()->detach($user->id);
        return redirect()->route('association.show', $association);
    }
}

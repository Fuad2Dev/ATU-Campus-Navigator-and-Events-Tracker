<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
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
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create user

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ], [
            'required' => 'required',
            'confirmed' => 'password mismatch',
            'email' => 'invalid email format'
        ]);

        $credentials = collect($request->all());
        $credentials->put('password', Hash::make($request->password));

        $user = User::create($credentials->all());

        // login
        auth()->login($user);

        return redirect()->route('home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    // login user
    public function login(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'password' => 'required|min:8'
        ],[
            'required' =>'required'
            
        ]);

        $logIn = Auth::attempt([
            'id' => $request->id,
            'password' => $request->password,
        ]);

        if ($logIn) 
            return redirect()->route('home');
        else
            dd($request);
    } 

    // logout user
    public function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    } 
}

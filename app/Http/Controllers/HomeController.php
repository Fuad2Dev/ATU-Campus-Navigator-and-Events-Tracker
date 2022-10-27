<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Association;
use App\Models\Notification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $my = User::find(auth()->user()->id);
        $notifications = Notification::show($my->notifications);
        
        return view('home', compact( 'my', 'notifications'));
    }

    

}

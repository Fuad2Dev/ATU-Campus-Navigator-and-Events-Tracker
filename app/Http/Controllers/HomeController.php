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
        $events = $this->events();
        // dd($events);
        return view('home', compact( 'my', 'notifications', 'events'));
    }

    public function events(){
        $associations = User::find(auth()->user()->id)->associations;
        $events = collect();
        foreach ($associations as $association) {
            $events->add($association->events);
        }
        return $events->first();
    }

}

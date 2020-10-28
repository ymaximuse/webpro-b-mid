<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::latest()->paginate(5);
        return view('home', compact('events'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function profile(){
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}

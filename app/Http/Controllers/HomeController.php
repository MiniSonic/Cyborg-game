<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $games = Game::where('id', '<', '9')->get();
        return view('pages.home', ['games' => $games]);
    }
    public function browse(){
        $featured = Game::where('id', '<', '5')->get();
        $downloaded = Game::where('id', '<', '4')->orderBy('downloads', 'desc')->get();
        return view('pages.browse', ['featured' => $featured, 'downloaded' => $downloaded]);
    }
    public function details(){
        return view('pages.details');
    }
    public function streams(){
        return view('pages.streams');
    }
    public function profile(){
        return view('pages.profile');
    }


    public function profileShow(User $user){
        return view('pages.profileUser', ['user' => $user]);
    }
    
}

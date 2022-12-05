<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Game;
use App\Live;
use App\Role;

class AdminController extends Controller
{
    //

    public function index(){
        return view('pages.admin.indexAdmin');
    }

    public function userShow(){
        $users = User::all();
        return view('pages.admin.users.userShow', ['users' => $users]);
    }
    public function userCreate(){

    }
    public function gameShow(){
        $games = Game::all();
        return view('pages.admin.games.gameShow', ['games' => $games]);
    }
    public function liveShow(){
        $lives = Live::all();
        return view('pages.admin.lives.liveShow', ['lives' => $lives]);
    }


    public function streamerShow(){
        $streamers = Role::find(2)->users;
        return view('pages.admin.streamers.streamerShow', ['streamers' => $streamers]);
    }
}

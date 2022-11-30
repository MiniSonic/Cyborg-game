<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Live;
use App\Role;

class LiveController extends Controller
{
    //
    public function index(){
        $lives = Live::where('id', '<', '6')->get();
        $streamers = Role::find(2)->users;
        return view('pages.streams', ['lives' => $lives, 'streamers' => $streamers]);
    }
}

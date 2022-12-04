<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    //

    public function index(){
        
    }

    public function show(Game $game){
        $gamesList = Game::where('id', '<', '7')->get();
        return view('pages.detailsGame', ['game' => $game, 'gamesList' => $gamesList]);
    }
    public function create(){

    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){
        
    }
}

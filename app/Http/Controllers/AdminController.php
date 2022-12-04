<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){
        return view('pages.admin.indexAdmin');
    }

    public function userShow(){
        return view('pages.admin.users.userShow');
    }

    public function userCreate(){
        return view('pages.admin.users.userCreate');
    }
}

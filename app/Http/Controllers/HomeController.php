<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //return 'Hi! Welcome to Tourist Destination Website';
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }
}

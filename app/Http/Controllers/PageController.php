<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Hi! Welcome to Laravel';
    }
    public function about(){
        return 'Noora Aulia Hidayat <br>2041720046';

    }
    public function articles($id){
        return 'This is page with th ID: '.$id;
    }
}


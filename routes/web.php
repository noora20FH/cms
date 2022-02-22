<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//PRACTICUM 1
//no 1
Route::get('/', function () {
    echo "Hi, Welcome to Laravel";
}
);
//no2
Route::get('/about', function(){
    echo "Noora Aulia Hidayat <br>";
    echo "2041720046 <br>";
    echo "TI-2I";
}

)-> name('about');

//no3
Route::get('/articles/{id}', function ($id){
    echo "This is Article page with ID: " .$id;
}

);


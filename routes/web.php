<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\ProgramController;
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
//Route::get('/', function () {
//    echo "Hi, Welcome to Laravel";
//}
//);
//no2
//Route::get('/about', function(){
  //  echo "Noora Aulia Hidayat <br>";
//echo "2041720046 <br>";
  //  echo "TI-2I";
//}

//)-> name('about');

//no3
//Route::get('/articles/{id}', function ($id){
//    echo "This is Article page with ID: " .$id;
//}

//);

//PRACTICUM 2
//Route::get('/',[PageController::class,'index']);
//Route::get('/about',[PageController::class,'about']);
//Route::get('/articles/{id}',[PageController::class,'articles']);

//PRACTICUM 3
//Route::get('/',[HomeController::class,'index'])->name('home-controller');
//Route::get('/',[AboutController::class,'index'])->name('about-controller');
//Route::get('/',[ArticleController::class,'index'])->name('article-controller');
//no. 1
Route::get('/', function(){
    echo 'Hi! Welcome to Tourist Destination Website';
});

//no. 2
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        echo 'This is Marbel Edu Games Page';
    });

    Route::get('/riri-story-books', function(){
        echo 'This is Riri Strory Book Page';
    });

    Route::get('/kolak-kids-songs', function(){
        echo 'This is Kolak Kids Songs Page';
    });
});


//no3 
Route::get('news', function(){
    echo 'This is the news page';
});

Route::get('news/{title}', function($title){
    echo "This News is about " .$title;
});


//no. 4
Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);

    Route::get('/magang', [ProgramController::class, 'magang']);

    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});


//no.5
Route::get('/about-us', function(){
    echo 'Noora Aulia Hidayat <br>2041720046 <br>TI-2I';
});

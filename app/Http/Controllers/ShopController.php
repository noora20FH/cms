<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;

class ShopController extends Controller
{
    //
    public function shopIndex()
    {
        # code...
        #$shops = Shop::all();
        #return view('shop', compact('shops'));
        
        $shops = DB::select('select name,content from shops where id = ?', [2]);
        return view('shop', ['shops' => $shops]);
    }
    public function showShop(){
        return view('shop');
    }
    
}

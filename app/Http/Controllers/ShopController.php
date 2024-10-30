<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
   public function index(){
    $buy=Shop::OrderBy('created_at', 'desc')->where('status', 'true')->get();
    return view('index', compact('buy')); 
}

public function indexs(){
    $buy=Shop::OrderBy('created_at', 'desc')->where('status', 'false')->get();
    return view('welcome',compact('buy'));
}
public function create(Request $request){
    Shop::create(['txt' => request('txt'), 'quantity' => request('quantity'),]);
    return redirect('/');
}
}
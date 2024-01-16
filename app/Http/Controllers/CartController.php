<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    //
    public function Get(Request $request,$user_id): View
    {
        $getbyid=Cart::where('user_id',$user_id)->get();

        if(!$getbyid) return view('welcome');

        return view('welcome',['cart'=>$getbyid]);
    }
}

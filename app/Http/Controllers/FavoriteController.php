<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    //
    public function GetbyAll(Request $request, $user_id): View
    {

        $getbyid = Favorite::where('user_id',$user_id)->get();

        if(!$getbyid) return view('welcome');

        return view('welcome',['favorite'=>$getbyid]);
    }

    public function CreateFav(Request $request, $data): View
    {

        ['user_id' => $user_id, 'product_id' => $product_id] = $data;

        $NewFav = Favorite::create([
            'user_id'=>$user_id,
            'product_id' => $product_id
        ]);

        return view('welcome',['favorite'=>$NewFav]);
    }


}

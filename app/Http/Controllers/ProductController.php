<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function GetAll(Request $request): View
    {

        $getAll=Product::all();

        return view('welcome',['products'=>$getAll]);
    }

    public function GetbyID(Request $request, $id): View
    {

        $getbyid= Product::find(i);

        if(!$getbyid) return view('welcome');

        return view('welcome',['product'=>$getbyid]);
    }

    public function GetbyName(Request $request, $name): View
    {

        $getbyname= Product::where('name',$name);

        if(!$getbyname) return view('welcome');

        return view('welcome',['product'=>$getbyname]);
    }


}

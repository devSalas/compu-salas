<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function GetAll(Request $request): View
    {

        $getAll=Category::all();

        return view('welcome',['categories'=>$getAll]);
    }
    public function GetbyID(Request $request, $product_id): View
    {

        $getbyid = Category::where('product_id',$product_id)->get();

        if(!$getbyid) return view('welcome');

        return view('welcome',['category'=>$getbyid]);
    }
}

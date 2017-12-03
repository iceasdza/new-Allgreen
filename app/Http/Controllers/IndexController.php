<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagories;
use App\product;

class IndexController extends Controller
{
    public function index()
    {
        $items= catagories::all();
        $products = product::where('CatagoriesID',1)->get();
        $catagory = catagories::where('CatagoriesID',1)->get();
        return view('index',compact('items','catagory','id','products'));
    }
}

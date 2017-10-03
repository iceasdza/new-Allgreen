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
        $products = product::where('CatagoriesID',4)->get();
        $catagory = catagories::where('CatagoriesID',4)->get();
        return view('index',compact('items','catagory','id','products'));
    }
}

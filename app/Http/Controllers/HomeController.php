<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagories;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = catagories::all();
        // dd($items);
        return view('home',compact('items'));
    }

    public function store(Request $request){

        // dd($request);

        $catagory = new catagories;
        $catagoryname = $request->input('catagoryName');
        // $catagoryDes = $request->input('catagoryDes');

        $catagory->catagoriesName = $catagoryname;
        // $catagory->catagoriesDes = $catagoryDes;

        $catagory->save();
        return  redirect('admin');
    }
}

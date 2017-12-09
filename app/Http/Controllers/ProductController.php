<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagories;
use App\product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $items= catagories::all();
        $products = product::where('CatagoriesID',$id)->get();
        $catagory = catagories::where('CatagoriesID',$id)->get();
        return view('shopManage',compact('items','catagory','id','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $product = new product;
        if($request->hasFile('img')){
            $img = $request->file('img');
            $catagoryID = $request->input('catagoryID');
            $productName = $request->input('prodName');
            $proDesc = $request->input('prodDesc');
            $function = $request->input('function');
            $imgname = $img->getClientOriginalName();
            $request->file('img')->move($catagoryID,$imgname);
            $product->path = "/".$catagoryID."/".$imgname;
            $product->productName = $productName;
            $product->CatagoriesID = $catagoryID;
            $product->function = $function;
            $product->productDes = $proDesc;
            $product->save();
            return  redirect('/admin/catagoriesID='.$catagoryID);
           
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function delete(Request $request){
                $product = new product;
                $id =  $request->input('productId');
                $catagoryID =  $request->input('catagoryID');  
                $delete = product::where('productID',$id);
                $delete->delete();
                return  redirect('/admin/catagoriesID='.$catagoryID);
    }
}

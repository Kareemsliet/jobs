<?php

namespace App\Http\Controllers;

use App\Models\Product;
use File;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function upload($name,$files){
        
        $ext=explode('.',$name);
        $ext=strtolower(end($ext));
        $file=time().".$ext";
        return $file;
    }
    public function index()
    {
        $products=Product::all();
      return view('products.show',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product= new Product;
        $product->name=$request->name;
        $product->image=$this->upload($_FILES['file']['name'],$_FILES['file']);
        $product->save();
       return to_route('products.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product,$id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name=$request->name;
         $product->image=$this->upload($_FILES['file']['name'],$_FILES['file']);
         $product->save();
         return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index');
    }
}

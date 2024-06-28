<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
 function create(){
    return view('pages.add');
 }
 function index(){
    $products=Store::all();
    return view('pages.show',compact('products'));
 }
 function edit($id){
    $product=Store::find($id);
    return view('pages.edit',compact('product'));
 }
 function  store(Request $request){
 $product=new Store;
 $product->name=$request->name;
 $product->advantge=$request->advantge;
 $product->quality=$request->quality;
 $product->target=$request->target;
 $product->save();
 return to_route('store.create');
 }
 function update(Request $request,$id){
    $product=Store::find($id);
    $product->name=$request->name;
 $product->advantge=$request->advantge;
 $product->quality=$request->quality;
 $product->target=$request->target;
 $product->save();
  return to_route('store.index');
 }
 function delete($id){
    $product=Store::find($id);
    $product->delete();
    return to_route('store.index');
 }
 function destroy($id){
    $product=Store::find($id);
    $product->delete();
    return to_route('store.index');
 }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function addProduct(Request $request){
        $products=new Product;
        $products->name=$request->input('name');
        $products->description=$request->input('description');
        $products->price=$request->input('price');
        $products->file_path=$request->file('file')->store('products');
        $products->save();
        return $products;
    }
    public function list(){
        return Product::all();
    }
    public function delete($id){
        $result=Product::where('id',$id)->delete();
        if($result){
            return ['result'=>'Product has been deleted'];
        }
    }
    public function getProducts($id){
        $result=Product::where('id',$id)->first();
        if($result){
            return $result;
        }
    }
    public function updateProducts($id,Request $request){
        $products=Product::find($id);
        $products->name=$request->input('name');
        $products->description=$request->input('description');
        $products->price=$request->input('price');
        if($request->file('file')){
        $products->file_path=$request->file('file')->store('products');
        }
        $products->save();
        return $products;
    }
    public function serachProducts($key){
        return Product::where('name','LIKE',"%$key%")->get();
    }
}

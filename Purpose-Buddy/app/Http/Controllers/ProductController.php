<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function index(){
        return view('product.index');
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $data = $request->validate(
            [
                'name' => 'required',
                'qty' => 'required|numeric',
                'price' => 'required|decimal:0,2',
                'description' => 'required'
            ]
        );

        $newProduct = Product::create($data);

        return redirect(route('product.show'));

    }

    public function show(){

        $products = Product::all();

        return view('product.show' , ['products' => $products]);
    }

    public function update( Product $product ){
        return view('product.update', ['product' => $product]);
    }

    public function edit( Product $product, Request $request ){
        
        $data = $request->validate(
            [
                'name' => 'required',
                'qty' => 'required|numeric',
                'price' => 'required|decimal:0,2',
                'description' => 'required'
            ]
        );

        $product->update($data);

        return redirect(route('product.show'))->with('success' ,'Product Update Successfully');
    }

    public function delete( Product $product){
        return view('product.delete', ['product' => $product ]);
    }

    public function remove( Product $product){
        $product->delete();
        return redirect(route('product.show'))->with('success' ,'Product Deleted Successfully');
    }

}

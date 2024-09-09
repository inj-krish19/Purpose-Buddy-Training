<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Barryvdh\Debugbar\Facades\Debugbar;

class ProductController extends Controller
{
    //

    public function index(){
        Debugbar::info('I am at Product Page');

        // Make It Commented For Not Generating Issue
        // Just For Information and Example
        // try{
        //     throw new Exception("It always throws Exception");
        // }catch( Exception $e ){
        //     Debugbar::addException($e);
        // }

        return view('product.index');
    }
    
    public function create(){
        Debugbar::info('Wanna Create a Product ??');
        Debugbar::startMeasure('Rendering Create Product Page');
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

        Debugbar::info('Details Validated Successfully');
        $newProduct = Product::create($data);
        Log::channel('product')->info('Adding Product : ' . json_encode( $request->all() ) );

        Debugbar::info('Product Created');
        return redirect(route('product.show'));

    }

    public function show(){

        $products = Product::all();
        Debugbar::startMeasure('Showing Products');

        return view('product.show' , ['products' => $products]);
    }

    public function update( Product $product ){
        Debugbar::startMeasure('Updating Products');
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

        Debugbar::info('Details Validated Successfully');
        $product->update($data);
        Log::channel('product')->info('Updating Product : ' . json_encode( $request->all() ) );

        Debugbar::info('Product Updated');
        return redirect(route('product.show'))->with('success' ,'Product Update Successfully');
    
    }

    public function delete( Product $product){
        
        Debugbar::startMeasure('Deleting Products');
        Debugbar::warning('Wanna Delete Product ??');
        return view('product.delete', ['product' => $product ]);

    }
    
    public function remove( Product $product, Request $request ){
        
        $product->delete();
        Log::channel('product')->info('Deleting Product : ' . json_encode( $request->all() ) );

        Debugbar::errors('Product Deleted');
        return redirect(route('product.show'))->with('success' ,'Product Deleted Successfully');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BannerController extends Controller
{

    public function index()
    {

        //$products= product::all();
        return view('product.create');

    }

    public function create()
    {
        $products= Product::all();
        return view('product.create',['products'=>$products]);
    }

    public function store(Request $request)
    {
        $data= $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,4',
            'description' => 'nullable',

        ]);

            $newProduct = Product::create($data);
            return redirect()->back()->with('success','Product Added Successfuly') ;

    }

    public function edit(Product $product){
        return view('product.edit',['product'=>$product]);
    }

    public function update(Product $product,Request $request){
        $data= $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,4',
            'description' => 'nullable',

        ]);
        $product->update($data);
        return redirect(route('product.create'))->with('success','Product Updated Successfuly') ;
    }

    public function destory(Product $product){

        $product->delete();
        return redirect(route('product.create'))->with('success','Product Delete Successfuly') ;
    }

    public function view($id){
        $product=Product::find($id);
        return view('product.view')->with('product',$product);
    }

}

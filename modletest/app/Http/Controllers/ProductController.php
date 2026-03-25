<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\person;
use App\Models\stock;

use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products= product::paginate(3);
        // $products= product::with('person')->get();
        // $products= person::find(1)->product;
        $products= product::withWhereHas('person',function ($query) {
            $query->where('id','2');
        })->get();

        return $products;


        // return view('products.showProducts', compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = product::find(7);
        $product->product_stocks()->createMany([
            ['stock' => "40"],
            ['stock' => "60"],
            ['stock' => "90"],
        ]);
        // return view('products.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        // $product = new product;
        // $product->name =$request->name;  
        // $product->price = $request->price;
        // $product->detail = $request->detail;
        $path = $request->file('img')->store('photos', 'public');
        // $product->img = $path;
        // $product->save();

        product::create([
                "name"    => $request->name,  
                "price"   => $request->price, 
                "detail"  => $request->detail,
                "img"     => $path
            ]);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('products.editProduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        $path = $request->file('img')->store('photos', 'public');
        $product->update([
                "name"    => $request->name,  
                "price"   => $request->price, 
                "detail"  => $request->detail,
                "img"     => $path
            ]);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        product::Find($id)->delete();

        return redirect('/products');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Models\product;
use App\Models\stock;

use App\Http\Requests\StorepersonRequest;
use App\Http\Requests\UpdatepersonRequest;
use Illuminate\Support\Facades\Redirect;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $persons=person::with('product')->get();

        
        // $persons = person::with('product')->with('product_stocks')->get();
        // $persons = person::find(2);
        // $persons->product;

        // $persons=person::has('product','>',3)->with('product')->get();
        // $persons=person::withCount('product')->get();

        // $persons = product::find(1)->person;
        // $persons=person::where('name','deep')->withWhereHas('product',function ($query) {
        //     $query->where('price','600');
        // })->get();
        // foreach ($persons as $person) {
        //     echo $person->name."<br>";
        //     echo $person->product->name."<br>";
        //     echo $person->product_stocks->stock."<br>";
        //     echo "<hr>";
        // }

        // $persons = person::with('product')->with('product_stocks')->get();
        // $persons = person::with('product_stocks')->find(1);

        $persons=person::with('roles')->find(3);

        

        return $persons;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person = person::find(3);
        // $person = person::create([
        //     "name"    => 'hello4',
        //     "email"   => 'hello4@gmail.com'
        // ]);

        // $person->product()->createMany([
        //     [
        //         "name"      => 'suit',
        //         "price"     => '1000',
        //         "detail"    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur omnis, eaque vero autem eligendi alias ab fuga magnam impedit aliquam praesentium debitis, veritatis fugit eum itaque reprehenderit facilis quas amet.',
        //         "img"       => 'photos/SRkP0bg522udiUJnUQAyUhHFmnMhl2u27cHHFLYj.jpg'
        //     ],
        //     [
        //         "name"      => 'follow down',
        //         "price"     => '2000',
        //         "detail"    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur omnis, eaque vero autem eligendi alias ab fuga magnam impedit aliquam praesentium debitis, veritatis fugit eum itaque reprehenderit facilis quas amet.',
        //         "img"       => 'photos/SRkP0bg522udiUJnUQAyUhHFmnMhl2u27cHHFLYj.jpg'
        //     ],
        //     [
        //         "name"      => 'hello4',
        //         "price"     => '550',
        //         "detail"    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur omnis, eaque vero autem eligendi alias ab fuga magnam impedit aliquam praesentium debitis, veritatis fugit eum itaque reprehenderit facilis quas amet.',
        //         "img"       => 'photos/SRkP0bg522udiUJnUQAyUhHFmnMhl2u27cHHFLYj.jpg'
        //     ]
        // ]);

        // $products= $person->product;

        // foreach ($products as $product) {
        //     $product->product_stocks()->create(['stock' => "40"]);
        // }
        $roles=[4,5];

        // $person->roles()->attach($roles);
        $person->roles()->detach(4);


        return Redirect("/");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepersonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepersonRequest $request, person $person)
    {
        $person = person::find(3);
        $person->roles()->detach(4);


        return Redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(person $person)
    {
        
    }
}

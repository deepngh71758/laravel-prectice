<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $json = File::get(path:'database/json/product.json');
        // $products = collect(json_decode($json));

        // $products->each(function($products){
        //     product::create([
        //         "name"      => $products->name,
        //         "price"     => $products->price,
        //         "detail"    => $products->detail,
        //         "img"       => $products->img,
        //         "person_id" => $products->person_id
        //     ]);
        // });
        product::factory()->count(50)->create();
    }
}

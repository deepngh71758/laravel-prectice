<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/stock.json');
        $stock = collect(json_decode($json));

        $stock->each(function($stock){
            stock::create([
                "stock"    => $stock->stock,
                "product_id"   => $stock->product_id
            ]);
        });
    }
}

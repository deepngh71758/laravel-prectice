<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $json = File::get(path:'database/json/person.json');
        // $person = collect(json_decode($json));

        // $person->each(function($person){
        //     person::create([
        //         "name"    => $person->name,
        //         "email"   => $person->email
        //     ]);
        // });
        person::factory()->count(10)->create();
    }
}

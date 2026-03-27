<?php

namespace Database\Seeders;

use App\Models\blogs;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/blogs.json');
        $blogs = collect(json_decode($json));

        $blogs->each(function($blogs){
            blogs::create([
                "title"      => $blogs->title,
                "content"    => $blogs->content,
                "user_id" => User::inRandomOrder()->first()->id
            ]);
        });
    }
}

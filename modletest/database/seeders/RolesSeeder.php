<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\roles;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/roles.json');
        $roles = collect(json_decode($json));

        $roles->each(function($role){
            roles::create([
                "role"    => $role->role
            ]);
        });
    }
}

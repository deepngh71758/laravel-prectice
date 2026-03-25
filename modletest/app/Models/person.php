<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = ['name', 'email'];
    public function product(){
        return $this->hasMany(product::class)
                ->where('price', '<', 500);
    }

    public function product_stocks(){
        return $this->hasManyThrough(stock::class,product::class);
    }

    public function roles(){
        return $this->belongsToMany(roles::class,'person_roles','person_id', 'roles_id');
        // return $this->belongsToMany(roles::class);
    }
}


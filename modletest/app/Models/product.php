<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'detail', 'img'];

    public function person (){
        return $this->belongsTo(person::class);
    }
    public function product_stocks(){
        return $this->hasMany(stock::class);
    }
}


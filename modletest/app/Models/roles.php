<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    /** @use HasFactory<\Database\Factories\rolesFactory> */
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = ['role'];

    public function person(){
        return $this->belongsToMany(person::class);
    }
}

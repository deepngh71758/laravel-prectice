<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    /** @use HasFactory<\Database\Factories\BlogsFactory> */
    use HasFactory;
    protected $fillable = ['title', 'content', 'blogimg','user_id'];

    public function user (){
        return $this->belongsTo(User::class);
    }
}

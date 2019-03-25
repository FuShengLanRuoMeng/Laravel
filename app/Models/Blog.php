<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);   
    }
}
